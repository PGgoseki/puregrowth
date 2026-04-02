// セレクトボックス
const selects = document.querySelectorAll("select");
if (selects.length) {
  for (let i = 0; i < selects.length; i++) {
    selects[i].addEventListener("change", function() {
      const selectedOption = this.querySelector("option:checked");
      if (selectedOption.value === "選択してください") {
        this.classList.add("placeholder");
      } else {
        this.classList.remove("placeholder");
      }

    });
  }
}

// セレクトボックス色修正
jQuery("select").on("change", function() {
  if (jQuery(this).val() === "選択してください") {
    jQuery(this).addClass("placeholder");
    jQuery(this).find("option").removeClass("placeholder");
  } else {
    jQuery(this).removeClass("placeholder");
  }
});
