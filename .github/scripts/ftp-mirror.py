#!/usr/bin/env python3
"""本番サーバのテーマを FTP でローカルへ丸ごとダウンロードする。

GitHub Actions 上で実行され、認証情報は環境変数（Secrets）から受け取る。
サーバへの書き込みは一切行わない（RETR のみ）。

追加インストールを避けるため標準ライブラリの ftplib だけを使う。
"""

import ftplib
import os
import sys

HOST   = os.environ["FTP_SERVER"]
USER   = os.environ["FTP_USERNAME"]
PASS   = os.environ["FTP_PASSWORD"]
REMOTE = os.environ["REMOTE_DIR"].rstrip("/")
DEST   = os.environ["DEST"]

TIMEOUT = 60
downloaded = 0


def connect():
    """まず FTPS を試し、駄目なら平文 FTP にフォールバックする。"""
    try:
        ftp = ftplib.FTP_TLS(timeout=TIMEOUT)
        ftp.connect(HOST, 21)
        ftp.login(USER, PASS)
        ftp.prot_p()
        print("FTPS で接続しました", flush=True)
    except Exception as exc:
        print("FTPS に失敗したため平文 FTP で接続します: %s" % exc, flush=True)
        ftp = ftplib.FTP(timeout=TIMEOUT)
        ftp.connect(HOST, 21)
        ftp.login(USER, PASS)
    ftp.set_pasv(True)
    return ftp


def list_dir(ftp, path):
    """(名前, 種別) の一覧を返す。MLSD が使えなければ NLST で代用する。"""
    try:
        return [
            (name, facts.get("type"))
            for name, facts in ftp.mlsd(path)
            if name not in (".", "..")
        ]
    except Exception:
        pass

    entries = []
    ftp.cwd(path)
    for raw in ftp.nlst():
        name = raw.split("/")[-1]
        if name in ("", ".", ".."):
            continue
        try:
            ftp.cwd(path + "/" + name)
            entries.append((name, "dir"))
            ftp.cwd(path)
        except ftplib.error_perm:
            entries.append((name, "file"))
    return entries


def walk(ftp, remote_path, local_path):
    global downloaded
    os.makedirs(local_path, exist_ok=True)

    for name, kind in list_dir(ftp, remote_path):
        remote_child = remote_path + "/" + name
        local_child = os.path.join(local_path, name)

        if kind == "dir":
            walk(ftp, remote_child, local_child)
        elif kind == "file":
            with open(local_child, "wb") as handle:
                ftp.retrbinary("RETR " + remote_child, handle.write)
            downloaded += 1
            if downloaded % 50 == 0:
                print("  %d ファイル取得済み..." % downloaded, flush=True)


def main():
    print("接続先: %s%s" % (HOST, REMOTE), flush=True)
    ftp = connect()
    try:
        walk(ftp, REMOTE, DEST)
    finally:
        try:
            ftp.quit()
        except Exception:
            ftp.close()

    print("ダウンロード完了: %d ファイル" % downloaded, flush=True)

    if downloaded < 100:
        print(
            "::error::取得ファイル数が少なすぎます。REMOTE_DIR の指定を確認してください。",
            flush=True,
        )
        sys.exit(1)


if __name__ == "__main__":
    main()
