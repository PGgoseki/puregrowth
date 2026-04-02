<style>


@media screen and (min-width: 768px) {
h2.newconTop {color: #172438; font-size: 300%; margin: 4vw auto 2vw; padding: 0 .3vw .4vw; width: fit-content; text-align: center; font-weight: bold;background: linear-gradient(transparent 60%, #FEF500 0%);}

h2.newconTop + .fwb {line-height: 2; font-size: 120%;}

h2.newconttl { display: block; padding: 1vw 0; text-align: center; font-size: 200%; color: #fff; background: linear-gradient(to right,#049fba 0%, #1d74a7 14.3%, #384d91 70.05%, #27356e 100%);}

.yellowmarker {background: linear-gradient(transparent 60%, #FEF500 0%); display: inline; line-height: 1.4;}
.tac {text-align: center;}
.mb1 {margin-bottom: 1vw;}
.mb2 {margin-bottom: 2vw;}
.mb3 {margin-bottom: 3vw;}
.mb4 {margin-bottom: 4vw;}
.mb6 {margin-bottom: 6vw;}
.mb8 {margin-bottom: 8vw!important;}
.fwb {font-weight: bold; font-size: 110%;}
.fwb12 {font-weight: bold; font-size: 140%;}
.fwb16 {font-weight: bold; font-size: 160%;}

.cta {margin-bottom: 8vw;}
.cta h2 {font-size: 220%; font-weight: bold; margin: 0 auto 1vw; text-align: center;}
.cta a {position: relative; display: block; margin-right: auto; margin-left: auto; width: 30vw; height: auto; margin-top: 7vw;}
.cta a:before {display: block; position: absolute; content:""; width: 1px; height: 5vw; background: #707070; top: -5vw; left: 0; right: 0; margin: auto;}
.cta a img {width: 100%; height: 100%; object-fit: contain;}

.calBox {margin: 5vw 0 8vw;}
.carousel > * {flex: 0 0 100%;}
.group { display: flex; align-items: center; gap: 4vw; padding-right: 4vw; width: 100%; will-change: transform;width: max-content;}
.card { width: 10vw; height: auto;}
.carousel { margin: 0 auto 2vw; padding: 0; overflow: hidden; display: flex;}
.group.animated { animation: scrolling 50s linear infinite;}
@keyframes scrolling { 0%{transform: translateX(0);}100% {transform: translateX(-100%);}}
.carousel.rev .group.animated{animation-direction: reverse;}
header nav,header .btn {visibility: hidden!important;}
section {padding-bottom: 0 !important;}
.consultantCalBox {margin-bottom: 12vw;}

.consultantCalBox .card { width: 22vw; height: auto;}
.consultantCalBox .card p {font-size: 85%;margin: 1vw 0;}
.consultantCalBox .card h2 {font-weight: bold; font-size: 230%; font-weight: bold;}

.consulTxt {font-size: 160%; font-weight: bold;}
.newconservicettl {position: relative; color: #172438; font-size: 280%; margin: 4vw auto 1vw; padding: 0 .3vw .4vw; width: fit-content; text-align: center; font-weight: bold; padding-bottom: 1.5vw; margin-bottom: 4vw;}
.newconservicettl:after { position: absolute; left: 0; right: 0; bottom: 0; margin: 0 auto; display: block; content:""; width: 18vw; height: .3vw; background: linear-gradient(to right,#049fba 0%, #1d74a7 14.3%, #384d91 70.05%, #27356e 100%);}
.newconserviceCont {}
.newconserviceCont .cell { width: 100%; background: #fff; margin-bottom: 2vw; border-radius: 2vw; -webkit-filter: drop-shadow(0px 0px 5px rgba(0,0,0,.3)); filter: drop-shadow(0px 0px 5px rgba(0,0,0,.3)); overflow: hidden; border: solid 1px #fff;}
.newconserviceCont .cell .q { width: 100%; display: flex; justify-content: space-between; align-items: center; padding: 1.3vw 2vw; box-sizing: border-box; background: linear-gradient(to right,#049fba 0%, #1d74a7 14.3%, #384d91 70.05%, #27356e 100%);}
.newconserviceCont .cell .q .icon { width: 3vw; height: 3vw; margin-right: 1.5vw;}
.newconserviceCont .cell .q .icon svg{ width: 100%; height: 100%; object-fit: contain;}
.newconserviceCont .cell .q h2 { color: #fff; text-align: left; font-weight: bold; font-size: 220%; flex: 1;}
.newconserviceCont .cell .q .toggle { width: 3vw; height: 3vw; overflow: hidden;}
.newconserviceCont .cell .q .toggle img {width: 100%; height: 100%; object-fit: contain;opacity: 0; visibility: hidden;display: none;}
.newconserviceCont .cell .q .toggle img.show {opacity: 1; visibility: visible;display: block;}
.newconserviceCont .cell .a {position: relative; background: url(<?php echo get_template_directory_uri() ?>/img/newcon/bg_service.png),#F8F8F8; padding: 3vw 5vw; display: none;}
.newconserviceCont .cell .a p {position: relative; z-index: 2;line-height: 1.6!important; margin-bottom: 1vw; font-weight: bold; font-size: 110%;}
.newconserviceCont .cell .a p:last-child {margin-bottom: 0;}
.newconserviceCont .cell .a svg { display: block; position: absolute; z-index: 1; top: 0;bottom: 0; left: 0; right: 0; margin: auto; width: 8vw; height: auto; object-fit: contain;}

.dammyFormArea {padding: 20vw 0; text-align: center;}
.newconBbg {background: linear-gradient(to bottom,#F1FBFC 0%, #F1FBFC 50%, #fff 50%, #fff 100%); padding-top: 3vw; margin-top: 3vw;}

.spbr {display: none;}
}








@media screen and (max-width: 767px) {
#newcon { font-size: .8rem!important;}
#newcon p {line-height: 1.2;}
h2.newconTop {color: #172438; font-size: 200%; margin: 8vw auto 2vw; padding: 0 .6vw .8vw; width: fit-content; text-align: center; font-weight: bold;background: linear-gradient(transparent 60%, #FEF500 0%);}
h2.newconttl { display: block; padding: 2vw 0; text-align: center; font-size: 130%; color: #fff; background: linear-gradient(to right,#049fba 0%, #1d74a7 14.3%, #384d91 70.05%, #27356e 100%);}

.spnobr br {display: none;}
.yellowmarker {background: linear-gradient(transparent 60%, #FEF500 0%); display: inline; line-height: 1.4;}
.tac {text-align: center;}
.mb1 {margin-bottom: 2vw;}
.mb2 {margin-bottom: 4vw;}
.mb3 {margin-bottom: 6vw;}
.mb4 {margin-bottom: 4vw;}
.mb6 {margin-bottom: 6vw;}
.mb8 {margin-bottom: 16vw!important;}
.fwb {font-weight: bold; font-size: 100%;}
.fwb12 {font-weight: bold; font-size: 100%;}
.fwb16 {font-weight: bold; font-size: 130%;}

.cta h2 {font-size: 160%; font-weight: bold; margin: 0 auto 1vw; text-align: center;}
.cta .fwb16 {font-size: 110%!important;}
.cta .fwb12 {font-size: 90%!important;}
.cta a {position: relative; display: block; margin-right: auto; margin-left: auto; width: 80vw; height: auto; margin-top: 8vw;}
.cta a:before {display: block; position: absolute; content:""; width: 1px; height: 4vw; background: #707070; top: -4vw; left: 0; right: 0; margin: auto;}
.cta a img {width: 100%; height: 100%; object-fit: contain;}

.calBox {margin-bottom: 10vw;}
.carousel > * {flex: 0 0 100%; margin-bottom: 3rem;}
.group { display: flex; gap: 3vw; padding-right: 3vw; margin: 0; width: 100%; will-change: transform;width: max-content;}
.card { width: 20vw; height: auto;}
.card p {font-size: 70%;margin: .5vw 0;}
.card h2 {font-weight: bold; font-size: 130%; font-weight: bold;}
.carousel { margin: 0 auto; padding: 6vw 0 0; overflow: hidden; display: flex;}
.group.animated { animation: scrolling 50s linear infinite;}
@keyframes scrolling { 0%{transform: translateX(0);}100% {transform: translateX(-100%);}}
.carousel.rev .group.animated{animation-direction: reverse;}
header nav,header .btn {visibility: hidden!important;}
section {padding: 0 !important;}

.consultantCalBox {margin-bottom: 10vw;}
.consultantCalBox .group .card { width: 50vw; height: auto;}

.consulTxt {font-size: 110%; font-weight: bold;}
.newconservicettl {position: relative; color: #172438; font-size: 160%; margin: 4vw auto 1vw; padding: 0 .6vw .4vw; width: fit-content; text-align: center; font-weight: bold; padding-bottom: 3vw; margin-bottom: 4vw;}
.newconservicettl:after { position: absolute; left: 0; right: 0; bottom: 0; margin: 0 auto; display: block; content:""; width: 30vw; height: .8vw; background: linear-gradient(to right,#049fba 0%, #1d74a7 14.3%, #384d91 70.05%, #27356e 100%);}
.newconserviceCont {}
.newconserviceCont .cell { width: 100%; background: #fff; margin-bottom: 2vw; border-radius: 5vw; overflow: hidden; border: solid 1px #fff;}
.newconserviceCont .cell .q { width: 100%; display: flex; justify-content: space-between; align-items: center; padding: 4vw; box-sizing: border-box; background: linear-gradient(to right,#049fba 0%, #1d74a7 14.3%, #384d91 70.05%, #27356e 100%);}
.newconserviceCont .cell .q .icon { width: 5vw; height: 5vw; margin-right: 2vw;}
.newconserviceCont .cell .q .icon svg{ width: 100%; height: 100%; object-fit: contain;}
.newconserviceCont .cell .q h2 { color: #fff; text-align: left; font-weight: bold; font-size: 120%; flex: 1;}
.newconserviceCont .cell .q .toggle { width: 5vw; height: 5vw; overflow: hidden;}
.newconserviceCont .cell .q .toggle img {width: 100%; height: 100%; object-fit: contain;opacity: 0; visibility: hidden;display: none;}
.newconserviceCont .cell .q .toggle img.show {opacity: 1; visibility: visible;display: block;}
.newconserviceCont .cell .a {position: relative; background: url(<?php echo get_template_directory_uri() ?>/img/newcon/bg_service.png),#F8F8F8; padding: 4vw; display: none;}
.newconserviceCont .cell .a p {position: relative; z-index: 2;line-height: 1.6!important; margin-bottom: 1vw;}
.newconserviceCont .cell .a p:last-child {margin-bottom: 0;}
.newconserviceCont .cell .a svg { display: block; position: absolute; z-index: 1; top: 0;bottom: 0; left: 0; right: 0; margin: auto; width: 8vw; height: auto; object-fit: contain;}

.dammyFormArea {padding: 20vw 0; text-align: center;}
.newconBbg {background: linear-gradient(to bottom,#F1FBFC 0%, #F1FBFC 50%, #fff 50%, #fff 100%); padding-top: 6vw; margin-top: 6vw; overflow: hidden;}
}
</style>
