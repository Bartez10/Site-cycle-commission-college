 <?php
  $page_title = 'Випускники';
  require_once 'header.php';
?>
<header >
  <section class="sequel-kidsa" style="position: fixed;" >
  <div class="sequel-masopedub">
  <div class="mplishmen"  style="display: flex;">
  <a href="index.php"><img class="logogo" src="img/Logo.webp" alt="Логотип"></a>
  <div style="font-size: 16px; color: white; margin-top:23px; ">
    <h2 style="font-size: 16px; text-transform:none;line-height: 0.5em;"  >Циклова комісія</h2>
  <h2 style="font-size: 16px;text-transform:none; line-height: 0.5em;">програмування</h2>
</div>
<div class="logo1">
  <form method="post" action="search_vypusk.php" name="f1">
    <input class="toggle1" style="font-size: 14px;" style="font-size: 14px;"  type="text" name="search_vypusk" required placeholder="Пошук випуску" title="Введіть рік випуску" />
    <div class="search1"></div>
  </form>
    </div>
  </div>
  <nav>
  <div class="sequel-benmuekes"><a id="gedunean-giversaryd" href="#!"><span></span></a></div>
  <ul class="sequel-lasotedun">
  <li>
  <a href="#">Про ЦК</a>
   <ul class="sequel-dropdown">
  <li>
  <a href="history.php" class="col_men">Історія ЦК</a>
  </li>
  <li>
  <a href="teacher.php" class="col_men">Викладачі ЦК</a>
  </li>
  <li>
  <a href="news.php" class="col_men">Новини</a>
  </li>
  </ul>
  </li>
  <li>
  <a href="#">Навчальна діяльність</a>
   <ul class="sequel-dropdown">
  <li class="col_men">
  <a href="dyszypliny.php">Навчальний план</a>
  </li>
  <li class="col_men">
  <a href="kursovi.php">Курсові роботи</a>
  </li>
  <li class="col_men">
  <a href="dyplomni.php">Дипломні роботи</a>
  </li>
  <li class="col_men">
  <a href="vidkryti_zan.php">Виховні заходи</a>
  </li>
  <li class="col_men">
  <a href="http://man.guscoll.com/">Мала академія наук</a>
  </li>
  <li class="col_men">
  <a href="#">Конкурси та олімпіади</a>
  <ul class="sequel-dropdown">
  <li class="col_men">
  <a href="informatyka.php">Олімпіада з інформатики</a>
  </li>
  <li class="col_men">
  <a href="matem.php">Олімпаіда з математики</a>
  </li>
  <li class="col_men">
  <a href="olimpiady.php">Всеукраїнська олімпіада з програмування</a>
  </li>
  </ul>
  </li>
  </ul>
  </li>
  <li>
  <a href="#">Наші випускники</a>
  <ul class="sequel-dropdown">
  <li class="col_men">
  <a href="krashi_vypusknyky.php" class="col_men">Кращі випускники</a>
  </li>
  <li class="col_men">
  <a href="vypusknyky.php">Випускники</a>
  </li>
  </ul>
  </li>
  <li>
  <a href="#">Галерея</a>
  <ul class="sequel-dropdown">
  <li class="col_men">
  <a href="index.html" class="col_men">Фото</a>
  </li>
  <li class="col_men">
  <a href="video.php">Відео</a>
  </li>
  </ul>
  </li>
  <form class="form-search" method="post" action="search_vypusk.php" target="" name="f1">
  <div style="display: flex; justify-content: space-between;">
  <input type="search" name="search_vypusk" required placeholder="Пошук випуску. Введіть рік випуску для пошуку" class="sea1">
  <input class="sea" type="image" src="http://3.bp.blogspot.com/-4w14hQHr5yQ/Tgm6u7KwUkI/AAAAAAAACAI/Hu2poBOPx3g/s1600/search.png"/>
  </div>  <!-- вместо кнопки submit -->
</form>
  </ul>
     </nav>
  </div>
</section>    
</header>   

  <style>

.tabs {
  left: 50%;
  -webkit-transform: translateX(-50%);
          transform: translateX(-50%);
  position: relative;
  background: white;
  display: contents;
  width: 100%;
  height: auto;
  box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
  border-radius: 5px;
  min-width: 240px;
}
.tabs input[name="tab-control"] {
  display: none;
}
.tabs .content section h2,
.tabs ul li label {
  font-family: "Alice";
  font-weight: bold;
  font-size: 18px;
  color: #428BFF;
}
.tabs ul {
  list-style-type: none;
  padding-left: 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-direction: row;
          flex-direction: row;
  margin-bottom: 10px;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -webkit-box-align: end;
      -ms-flex-align: end;
          align-items: flex-end;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
}
.tabs ul li {
  box-sizing: border-box;
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  width: 25%;
  padding: 0 10px;
  text-align: center;
}
.tabs ul li label {
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  color: #929daf;
  padding: 5px auto;
  overflow: hidden;
  text-overflow: ellipsis;
  display: block;
  cursor: pointer;
  -webkit-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
  white-space: nowrap;
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.tabs ul li label br {
  display: none;
}
.tabs ul li label svg {
  fill: #929daf;
  height: 1.2em;
  vertical-align: bottom;
  margin-right: 0.2em;
  -webkit-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
}
.tabs ul li label:hover, .tabs ul li label:focus, .tabs ul li label:active {
  outline: 0;
  color: #bec5cf;
}
.tabs ul li label:hover svg, .tabs ul li label:focus svg, .tabs ul li label:active svg {
  fill: #bec5cf;
}
.tabs .slider {
  position: relative;
  width: 25%;
  -webkit-transition: all 0.33s cubic-bezier(0.38, 0.8, 0.32, 1.07);
  transition: all 0.33s cubic-bezier(0.38, 0.8, 0.32, 1.07);
}

.tabs .content {
  margin-top: 30px;
}
.tabs .content section {
  display: none;
  -webkit-animation-name: content;
          animation-name: content;
  -webkit-animation-direction: normal;
          animation-direction: normal;
  -webkit-animation-duration: 0.3s;
          animation-duration: 0.3s;
  -webkit-animation-timing-function: ease-in-out;
          animation-timing-function: ease-in-out;
  -webkit-animation-iteration-count: 1;
          animation-iteration-count: 1;
  line-height: 1.4;
}
.tabs .content section h2 {
  color:  #072C53;
  display: none;
}
.tabs .content section h2::after {
  content: "";
  position: relative;
  display: block;
  width: 30px;
  height: 3px;
  background:  #072C53;
  margin-top: 5px;
  left: 1px;
}
.tabs input[name="tab-control"]:nth-of-type(1):checked ~ ul > li:nth-child(1) > label {
  cursor: default;
  color:  #072C53;
}
.tabs input[name="tab-control"]:nth-of-type(1):checked ~ ul > li:nth-child(1) > label svg {
  fill: #072C53;
}
@media (max-width: 600px) {
  .tabs input[name="tab-control"]:nth-of-type(1):checked ~ ul > li:nth-child(1) > label {
    background: rgba(0, 0, 0, 0.08);
  }
}
.tabs input[name="tab-control"]:nth-of-type(1):checked ~ .slider {
  -webkit-transform: translateX(0%);
          transform: translateX(0%);
}
.tabs input[name="tab-control"]:nth-of-type(1):checked ~ .content > section:nth-child(1) {
  display: block;
}
.tabs input[name="tab-control"]:nth-of-type(2):checked ~ ul > li:nth-child(2) > label {
  cursor: default;
  color:  #072C53;
}
.tabs input[name="tab-control"]:nth-of-type(2):checked ~ ul > li:nth-child(2) > label svg {
  fill:  #072C53;
}
@media (max-width: 600px) {
  .tabs input[name="tab-control"]:nth-of-type(2):checked ~ ul > li:nth-child(2) > label {
    background: rgba(0, 0, 0, 0.08);
  }
}
.tabs input[name="tab-control"]:nth-of-type(2):checked ~ .slider {
  -webkit-transform: translateX(100%);
          transform: translateX(100%);
}
.tabs input[name="tab-control"]:nth-of-type(2):checked ~ .content > section:nth-child(2) {
  display: block;
}
.tabs input[name="tab-control"]:nth-of-type(3):checked ~ ul > li:nth-child(3) > label {
  cursor: default;
  color: #072C53;
}
.tabs input[name="tab-control"]:nth-of-type(3):checked ~ ul > li:nth-child(3) > label svg {
  fill:  #072C53;
}
@media (max-width: 600px) {
  .tabs input[name="tab-control"]:nth-of-type(3):checked ~ ul > li:nth-child(3) > label {
    background: rgba(0, 0, 0, 0.08);
  }
}
.tabs input[name="tab-control"]:nth-of-type(3):checked ~ .slider {
  -webkit-transform: translateX(200%);
          transform: translateX(200%);
}
.tabs input[name="tab-control"]:nth-of-type(3):checked ~ .content > section:nth-child(3) {
  display: block;
}
.tabs input[name="tab-control"]:nth-of-type(4):checked ~ ul > li:nth-child(4) > label {
  cursor: default;
  color:  #072C53;
}
.tabs input[name="tab-control"]:nth-of-type(4):checked ~ ul > li:nth-child(4) > label svg {
  fill:  #072C53;
}
@media (max-width: 600px) {
  .tabs input[name="tab-control"]:nth-of-type(4):checked ~ ul > li:nth-child(4) > label {
    background: rgba(0, 0, 0, 0.08);
  }
}
.tabs input[name="tab-control"]:nth-of-type(4):checked ~ .slider {
  -webkit-transform: translateX(300%);
          transform: translateX(300%);
}
.tabs input[name="tab-control"]:nth-of-type(4):checked ~ .content > section:nth-child(4) {
  display: block;
}

.tabs input[name="tab-control"]:nth-of-type(5):checked ~ ul > li:nth-child(5) > label {
  cursor: default;
  color:  #072C53;
}
.tabs input[name="tab-control"]:nth-of-type(5):checked ~ ul > li:nth-child(5) > label svg {
  fill: #072C53;
}
@media (max-width: 600px) {
  .tabs input[name="tab-control"]:nth-of-type(5):checked ~ ul > li:nth-child(5) > label {
    background: rgba(0, 0, 0, 0.08);
  }
}
.tabs input[name="tab-control"]:nth-of-type(5):checked ~ .slider {
  -webkit-transform: translateX(300%);
          transform: translateX(300%);
}
.tabs input[name="tab-control"]:nth-of-type(5):checked ~ .content > section:nth-child(5) {
  display: block;
}
.tabs input[name="tab-control"]:nth-of-type(6):checked ~ ul > li:nth-child(6) > label {
  cursor: default;
  color:  #072C53;
}
.tabs input[name="tab-control"]:nth-of-type(6):checked ~ ul > li:nth-child(6) > label svg {
  fill: #072C53;
}
@media (max-width: 600px) {
  .tabs input[name="tab-control"]:nth-of-type(6):checked ~ ul > li:nth-child(6) > label {
    background: rgba(0, 0, 0, 0.08);
  }
}
.tabs input[name="tab-control"]:nth-of-type(6):checked ~ .slider {
  -webkit-transform: translateX(100%);
          transform: translateX(100%);
}
.tabs input[name="tab-control"]:nth-of-type(6):checked ~ .content > section:nth-child(6) {
  display: block;
}
.tabs input[name="tab-control"]:nth-of-type(7):checked ~ ul > li:nth-child(7) > label {
  cursor: default;
  color:  #072C53;
}
.tabs input[name="tab-control"]:nth-of-type(7):checked ~ ul > li:nth-child(7) > label svg {
  fill:  #072C53;
}
@media (max-width: 600px) {
  .tabs input[name="tab-control"]:nth-of-type(7):checked ~ ul > li:nth-child(7) > label {
    background: rgba(0, 0, 0, 0.08);
  }
}
.tabs input[name="tab-control"]:nth-of-type(7):checked ~ .slider {
  -webkit-transform: translateX(200%);
          transform: translateX(200%);
}
.tabs input[name="tab-control"]:nth-of-type(7):checked ~ .content > section:nth-child(7) {
  display: block;
}
.tabs input[name="tab-control"]:nth-of-type(8):checked ~ ul > li:nth-child(8) > label {
  cursor: default;
  color:  #072C53;
}
.tabs input[name="tab-control"]:nth-of-type(8):checked ~ ul > li:nth-child(8) > label svg {
  fill:  #072C53;
}
@media (max-width: 600px) {
  .tabs input[name="tab-control"]:nth-of-type(8):checked ~ ul > li:nth-child(8) > label {
    background: rgba(0, 0, 0, 0.08);
  }
}
.tabs input[name="tab-control"]:nth-of-type(8):checked ~ .slider {
  -webkit-transform: translateX(300%);
          transform: translateX(300%);
}
.tabs input[name="tab-control"]:nth-of-type(8):checked ~ .content > section:nth-child(8) {
  display: block;
}
.tabs input[name="tab-control"]:nth-of-type(9):checked ~ ul > li:nth-child(9) > label {
  cursor: default;
  color:  #072C53;
}
.tabs input[name="tab-control"]:nth-of-type(9):checked ~ ul > li:nth-child(9) > label svg {
  fill:  #072C53;
}
@media (max-width: 600px) {
  .tabs input[name="tab-control"]:nth-of-type(9):checked ~ ul > li:nth-child(9) > label {
    background: rgba(0, 0, 0, 0.08);
  }
}
.tabs input[name="tab-control"]:nth-of-type(9):checked ~ .slider {
  -webkit-transform: translateX(100%);
          transform: translateX(100%);
}
.tabs input[name="tab-control"]:nth-of-type(9):checked ~ .content > section:nth-child(9) {
  display: block;
}
.tabs input[name="tab-control"]:nth-of-type(10):checked ~ ul > li:nth-child(10) > label {
  cursor: default;
  color:  #072C53;
}
.tabs input[name="tab-control"]:nth-of-type(10):checked ~ ul > li:nth-child(10) > label svg {
  fill:  #072C53;
}
@media (max-width: 600px) {
  .tabs input[name="tab-control"]:nth-of-type(10):checked ~ ul > li:nth-child(10) > label {
    background: rgba(0, 0, 0, 0.08);
  }
}
.tabs input[name="tab-control"]:nth-of-type(10):checked ~ .slider {
  -webkit-transform: translateX(200%);
          transform: translateX(200%);
}
.tabs input[name="tab-control"]:nth-of-type(10):checked ~ .content > section:nth-child(10) {
  display: block;
}
.tabs input[name="tab-control"]:nth-of-type(11):checked ~ ul > li:nth-child(11) > label {
  cursor: default;
  color:  #072C53;
}
.tabs input[name="tab-control"]:nth-of-type(11):checked ~ ul > li:nth-child(11) > label svg {
  fill:  #072C53;
}
@media (max-width: 600px) {
  .tabs input[name="tab-control"]:nth-of-type(11):checked ~ ul > li:nth-child(11) > label {
    background: rgba(0, 0, 0, 0.08);
  }
}
.tabs input[name="tab-control"]:nth-of-type(11):checked ~ .slider {
  -webkit-transform: translateX(300%);
          transform: translateX(300%);
}
.tabs input[name="tab-control"]:nth-of-type(11):checked ~ .content > section:nth-child(11) {
  display: block;
}

.tabs input[name="tab-control"]:nth-of-type(12):checked ~ ul > li:nth-child(12) > label {
  cursor: default;
  color:  #072C53;
}
.tabs input[name="tab-control"]:nth-of-type(12):checked ~ ul > li:nth-child(12) > label svg {
  fill:  #072C53;
}
@media (max-width: 600px) {
  .tabs input[name="tab-control"]:nth-of-type(12):checked ~ ul > li:nth-child(12) > label {
    background: rgba(0, 0, 0, 0.08);
  }
}
.tabs input[name="tab-control"]:nth-of-type(12):checked ~ .slider {
  -webkit-transform: translateX(300%);
          transform: translateX(300%);
}
.tabs input[name="tab-control"]:nth-of-type(12):checked ~ .content > section:nth-child(12) {
  display: block;
}
.tabs input[name="tab-control"]:nth-of-type(13):checked ~ ul > li:nth-child(13) > label {
  cursor: default;
  color:  #072C53;
}
.tabs input[name="tab-control"]:nth-of-type(13):checked ~ ul > li:nth-child(13) > label svg {
  fill: #072C53;
}
@media (max-width: 600px) {
  .tabs input[name="tab-control"]:nth-of-type(13):checked ~ ul > li:nth-child(13) > label {
    background: rgba(0, 0, 0, 0.08);
  }
}
.tabs input[name="tab-control"]:nth-of-type(13):checked ~ .slider {
  -webkit-transform: translateX(100%);
          transform: translateX(100%);
}
.tabs input[name="tab-control"]:nth-of-type(13):checked ~ .content > section:nth-child(13) {
  display: block;
}
.tabs input[name="tab-control"]:nth-of-type(14):checked ~ ul > li:nth-child(14) > label {
  cursor: default;
  color:  #072C53;
}
.tabs input[name="tab-control"]:nth-of-type(14):checked ~ ul > li:nth-child(14) > label svg {
  fill:  #072C53;
}
@media (max-width: 600px) {
  .tabs input[name="tab-control"]:nth-of-type(14):checked ~ ul > li:nth-child(14) > label {
    background: rgba(0, 0, 0, 0.08);
  }
}
.tabs input[name="tab-control"]:nth-of-type(14):checked ~ .slider {
  -webkit-transform: translateX(200%);
          transform: translateX(200%);
}
.tabs input[name="tab-control"]:nth-of-type(14):checked ~ .content > section:nth-child(14) {
  display: block;
}
.tabs input[name="tab-control"]:nth-of-type(15):checked ~ ul > li:nth-child(15) > label {
  cursor: default;
  color:  #072C53;
}
.tabs input[name="tab-control"]:nth-of-type(15):checked ~ ul > li:nth-child(15) > label svg {
  fill:  #072C53;
}
@media (max-width: 600px) {
  .tabs input[name="tab-control"]:nth-of-type(8):checked ~ ul > li:nth-child(15) > label {
    background: rgba(0, 0, 0, 0.08);
  }
}
.tabs input[name="tab-control"]:nth-of-type(15):checked ~ .slider {
  -webkit-transform: translateX(300%);
          transform: translateX(300%);
}
.tabs input[name="tab-control"]:nth-of-type(15):checked ~ .content > section:nth-child(15) {
  display: block;
}
.tabs input[name="tab-control"]:nth-of-type(16):checked ~ ul > li:nth-child(16) > label {
  cursor: default;
  color:  #072C53;
}
.tabs input[name="tab-control"]:nth-of-type(16):checked ~ ul > li:nth-child(16) > label svg {
  fill: #072C53;
}
@media (max-width: 600px) {
  .tabs input[name="tab-control"]:nth-of-type(16):checked ~ ul > li:nth-child(16) > label {
    background: rgba(0, 0, 0, 0.08);
  }
}
.tabs input[name="tab-control"]:nth-of-type(16):checked ~ .slider {
  -webkit-transform: translateX(100%);
          transform: translateX(100%);
}
.tabs input[name="tab-control"]:nth-of-type(16):checked ~ .content > section:nth-child(16) {
  display: block;
}
.tabs input[name="tab-control"]:nth-of-type(17):checked ~ ul > li:nth-child(17) > label {
  cursor: default;
  color:  #072C53;
}
.tabs input[name="tab-control"]:nth-of-type(17):checked ~ ul > li:nth-child(17) > label svg {
  fill:  #072C53;
}
@media (max-width: 600px) {
  .tabs input[name="tab-control"]:nth-of-type(17):checked ~ ul > li:nth-child(17) > label {
    background: rgba(0, 0, 0, 0.08);
  }
}
.tabs input[name="tab-control"]:nth-of-type(17):checked ~ .slider {
  -webkit-transform: translateX(200%);
          transform: translateX(200%);
}
.tabs input[name="tab-control"]:nth-of-type(17):checked ~ .content > section:nth-child(17) {
  display: block;
}
.tabs input[name="tab-control"]:nth-of-type(18):checked ~ ul > li:nth-child(18) > label {
  cursor: default;
  color:  #072C53;
}
.tabs input[name="tab-control"]:nth-of-type(18):checked ~ ul > li:nth-child(18) > label svg {
  fill:  #072C53;
}
@media (max-width: 600px) {
  .tabs input[name="tab-control"]:nth-of-type(18):checked ~ ul > li:nth-child(18) > label {
    background: rgba(0, 0, 0, 0.08);
  }
}
.tabs input[name="tab-control"]:nth-of-type(18):checked ~ .slider {
  -webkit-transform: translateX(300%);
          transform: translateX(300%);
}
.tabs input[name="tab-control"]:nth-of-type(18):checked ~ .content > section:nth-child(18) {
  display: block;
}

.tabs input[name="tab-control"]:nth-of-type(19):checked ~ ul > li:nth-child(19) > label {
  cursor: default;
  color:  #072C53;
}
.tabs input[name="tab-control"]:nth-of-type(19):checked ~ ul > li:nth-child(19) > label svg {
  fill: #072C53;
}
@media (max-width: 600px) {
  .tabs input[name="tab-control"]:nth-of-type(19):checked ~ ul > li:nth-child(19) > label {
    background: rgba(0, 0, 0, 0.08);
  }
}
.tabs input[name="tab-control"]:nth-of-type(19):checked ~ .slider {
  -webkit-transform: translateX(300%);
          transform: translateX(300%);
}
.tabs input[name="tab-control"]:nth-of-type(19):checked ~ .content > section:nth-child(19) {
  display: block;
}
.tabs input[name="tab-control"]:nth-of-type(20):checked ~ ul > li:nth-child(20) > label {
  cursor: default;
  color:  #072C53;
}
.tabs input[name="tab-control"]:nth-of-type(20):checked ~ ul > li:nth-child(20) > label svg {
  fill: #072C53;
}
@media (max-width: 600px) {
  .tabs input[name="tab-control"]:nth-of-type(20):checked ~ ul > li:nth-child(20) > label {
    background: rgba(0, 0, 0, 0.08);
  }
}
.tabs input[name="tab-control"]:nth-of-type(20):checked ~ .slider {
  -webkit-transform: translateX(100%);
          transform: translateX(100%);
}
.tabs input[name="tab-control"]:nth-of-type(20):checked ~ .content > section:nth-child(20) {
  display: block;
}

@-webkit-keyframes content {
  from {
    opacity: 0;
    -webkit-transform: translateY(5%);
            transform: translateY(5%);
  }
  to {
    opacity: 1;
    -webkit-transform: translateY(0%);
            transform: translateY(0%);
  }
}
@keyframes content {
  from {
    opacity: 0;
    -webkit-transform: translateY(5%);
            transform: translateY(5%);
  }
  to {
    opacity: 1;
    -webkit-transform: translateY(0%);
            transform: translateY(0%);
  }
}
@media (max-width: 1000px) {
  .tabs ul li label {
    white-space: initial;
  }
  .tabs ul li label br {
    display: initial;
  }
  .tabs ul li label svg {
    height: 1.5em;
  }
}
@media (max-width: 600px) {
  .tabs ul li label {
    padding: 5px;
    border-radius: 5px;
  }
  .tabs ul li label span {
    display: none;
  }
  .tabs .slider {
    display: none;
  }
  .tabs .content {
    margin-top: 20px;
  }
  .tabs .content section h2 {
    display: block;
  }
}
  </style>
  

<body>
<main>
  <div class="main0" style="display: flex;">
  <div class="main1">
    
  </div>
  <div class="main2" style="height: 100%;  margin-bottom: 30px; ">
    <p><h2 class="zagolovok">Наші випускники</h2></p>
  
      <div class="tabs" >
  
  <input type="radio" id="tab1" name="tab-control" checked>
  <input type="radio" id="tab2" name="tab-control">
  <input type="radio" id="tab3" name="tab-control">  
  <input type="radio" id="tab4" name="tab-control">
  <input type="radio" id="tab5" name="tab-control">
  <input type="radio" id="tab6" name="tab-control">
  <input type="radio" id="tab7" name="tab-control">  
  <input type="radio" id="tab8" name="tab-control">
   <input type="radio" id="tab9" name="tab-control">
  <input type="radio" id="tab10" name="tab-control">  
  <input type="radio" id="tab11" name="tab-control">
  <input type="radio" id="tab12" name="tab-control">
  <input type="radio" id="tab13" name="tab-control">
  <input type="radio" id="tab14" name="tab-control">  
  <input type="radio" id="tab15" name="tab-control">
   <input type="radio" id="tab16" name="tab-control">
  <input type="radio" id="tab17" name="tab-control">  
  <input type="radio" id="tab18" name="tab-control">
  <input type="radio" id="tab19" name="tab-control">
  <input type="radio" id="tab20" name="tab-control">
  <ul>
    <li title="2020"><label for="tab1" role="button"><svg viewBox="0 0 24 24"><path d="M14,2A8,8 0 0,0 6,10A8,8 0 0,0 14,18A8,8 0 0,0 22,10H20C20,13.32 17.32,16 14,16A6,6 0 0,1 8,10A6,6 0 0,1 14,4C14.43,4 14.86,4.05 15.27,4.14L16.88,2.54C15.96,2.18 15,2 14,2M20.59,3.58L14,10.17L11.62,7.79L10.21,9.21L14,13L22,5M4.93,5.82C3.08,7.34 2,9.61 2,12A8,8 0 0,0 10,20C10.64,20 11.27,19.92 11.88,19.77C10.12,19.38 8.5,18.5 7.17,17.29C5.22,16.25 4,14.21 4,12C4,11.7 4.03,11.41 4.07,11.11C4.03,10.74 4,10.37 4,10C4,8.56 4.32,7.13 4.93,5.82Z"/>
</svg><br><span>2020</span></label></li>
    <li title="2019"><label for="tab2" role="button"><svg viewBox="0 0 24 24"><path d="M14,2A8,8 0 0,0 6,10A8,8 0 0,0 14,18A8,8 0 0,0 22,10H20C20,13.32 17.32,16 14,16A6,6 0 0,1 8,10A6,6 0 0,1 14,4C14.43,4 14.86,4.05 15.27,4.14L16.88,2.54C15.96,2.18 15,2 14,2M20.59,3.58L14,10.17L11.62,7.79L10.21,9.21L14,13L22,5M4.93,5.82C3.08,7.34 2,9.61 2,12A8,8 0 0,0 10,20C10.64,20 11.27,19.92 11.88,19.77C10.12,19.38 8.5,18.5 7.17,17.29C5.22,16.25 4,14.21 4,12C4,11.7 4.03,11.41 4.07,11.11C4.03,10.74 4,10.37 4,10C4,8.56 4.32,7.13 4.93,5.82Z"/>
</svg><br><span>2019</span></label></li>
    <li title="2018"><label for="tab3" role="button"><svg viewBox="0 0 24 24">
    <path d="M14,2A8,8 0 0,0 6,10A8,8 0 0,0 14,18A8,8 0 0,0 22,10H20C20,13.32 17.32,16 14,16A6,6 0 0,1 8,10A6,6 0 0,1 14,4C14.43,4 14.86,4.05 15.27,4.14L16.88,2.54C15.96,2.18 15,2 14,2M20.59,3.58L14,10.17L11.62,7.79L10.21,9.21L14,13L22,5M4.93,5.82C3.08,7.34 2,9.61 2,12A8,8 0 0,0 10,20C10.64,20 11.27,19.92 11.88,19.77C10.12,19.38 8.5,18.5 7.17,17.29C5.22,16.25 4,14.21 4,12C4,11.7 4.03,11.41 4.07,11.11C4.03,10.74 4,10.37 4,10C4,8.56 4.32,7.13 4.93,5.82Z"/>
</svg><br><span>2018</span></label></li>    <li title="2017"><label for="tab4" role="button"><svg viewBox="0 0 24 24">
   <path d="M14,2A8,8 0 0,0 6,10A8,8 0 0,0 14,18A8,8 0 0,0 22,10H20C20,13.32 17.32,16 14,16A6,6 0 0,1 8,10A6,6 0 0,1 14,4C14.43,4 14.86,4.05 15.27,4.14L16.88,2.54C15.96,2.18 15,2 14,2M20.59,3.58L14,10.17L11.62,7.79L10.21,9.21L14,13L22,5M4.93,5.82C3.08,7.34 2,9.61 2,12A8,8 0 0,0 10,20C10.64,20 11.27,19.92 11.88,19.77C10.12,19.38 8.5,18.5 7.17,17.29C5.22,16.25 4,14.21 4,12C4,11.7 4.03,11.41 4.07,11.11C4.03,10.74 4,10.37 4,10C4,8.56 4.32,7.13 4.93,5.82Z"/>
</svg><br><span>2017</span></label></li>

 <li title="2016"><label for="tab5" role="button"><svg viewBox="0 0 24 24"><path d="M14,2A8,8 0 0,0 6,10A8,8 0 0,0 14,18A8,8 0 0,0 22,10H20C20,13.32 17.32,16 14,16A6,6 0 0,1 8,10A6,6 0 0,1 14,4C14.43,4 14.86,4.05 15.27,4.14L16.88,2.54C15.96,2.18 15,2 14,2M20.59,3.58L14,10.17L11.62,7.79L10.21,9.21L14,13L22,5M4.93,5.82C3.08,7.34 2,9.61 2,12A8,8 0 0,0 10,20C10.64,20 11.27,19.92 11.88,19.77C10.12,19.38 8.5,18.5 7.17,17.29C5.22,16.25 4,14.21 4,12C4,11.7 4.03,11.41 4.07,11.11C4.03,10.74 4,10.37 4,10C4,8.56 4.32,7.13 4.93,5.82Z"/>
</svg><br><span>2016</span></label></li>
    <li title="2015"><label for="tab6" role="button"><svg viewBox="0 0 24 24"><path d="M14,2A8,8 0 0,0 6,10A8,8 0 0,0 14,18A8,8 0 0,0 22,10H20C20,13.32 17.32,16 14,16A6,6 0 0,1 8,10A6,6 0 0,1 14,4C14.43,4 14.86,4.05 15.27,4.14L16.88,2.54C15.96,2.18 15,2 14,2M20.59,3.58L14,10.17L11.62,7.79L10.21,9.21L14,13L22,5M4.93,5.82C3.08,7.34 2,9.61 2,12A8,8 0 0,0 10,20C10.64,20 11.27,19.92 11.88,19.77C10.12,19.38 8.5,18.5 7.17,17.29C5.22,16.25 4,14.21 4,12C4,11.7 4.03,11.41 4.07,11.11C4.03,10.74 4,10.37 4,10C4,8.56 4.32,7.13 4.93,5.82Z"/>
</svg><br><span>2015</span></label></li>
    <li title="2014"><label for="tab7" role="button"><svg viewBox="0 0 24 24">
    <path d="M14,2A8,8 0 0,0 6,10A8,8 0 0,0 14,18A8,8 0 0,0 22,10H20C20,13.32 17.32,16 14,16A6,6 0 0,1 8,10A6,6 0 0,1 14,4C14.43,4 14.86,4.05 15.27,4.14L16.88,2.54C15.96,2.18 15,2 14,2M20.59,3.58L14,10.17L11.62,7.79L10.21,9.21L14,13L22,5M4.93,5.82C3.08,7.34 2,9.61 2,12A8,8 0 0,0 10,20C10.64,20 11.27,19.92 11.88,19.77C10.12,19.38 8.5,18.5 7.17,17.29C5.22,16.25 4,14.21 4,12C4,11.7 4.03,11.41 4.07,11.11C4.03,10.74 4,10.37 4,10C4,8.56 4.32,7.13 4.93,5.82Z"/>
</svg><br><span>2014</span></label></li>    <li title="2013"><label for="tab8" role="button"><svg viewBox="0 0 24 24">
   <path d="M14,2A8,8 0 0,0 6,10A8,8 0 0,0 14,18A8,8 0 0,0 22,10H20C20,13.32 17.32,16 14,16A6,6 0 0,1 8,10A6,6 0 0,1 14,4C14.43,4 14.86,4.05 15.27,4.14L16.88,2.54C15.96,2.18 15,2 14,2M20.59,3.58L14,10.17L11.62,7.79L10.21,9.21L14,13L22,5M4.93,5.82C3.08,7.34 2,9.61 2,12A8,8 0 0,0 10,20C10.64,20 11.27,19.92 11.88,19.77C10.12,19.38 8.5,18.5 7.17,17.29C5.22,16.25 4,14.21 4,12C4,11.7 4.03,11.41 4.07,11.11C4.03,10.74 4,10.37 4,10C4,8.56 4.32,7.13 4.93,5.82Z"/>
</svg><br><span>2013</span></label></li>
 <li title="2012"><label for="tab9" role="button"><svg viewBox="0 0 24 24"><path d="M14,2A8,8 0 0,0 6,10A8,8 0 0,0 14,18A8,8 0 0,0 22,10H20C20,13.32 17.32,16 14,16A6,6 0 0,1 8,10A6,6 0 0,1 14,4C14.43,4 14.86,4.05 15.27,4.14L16.88,2.54C15.96,2.18 15,2 14,2M20.59,3.58L14,10.17L11.62,7.79L10.21,9.21L14,13L22,5M4.93,5.82C3.08,7.34 2,9.61 2,12A8,8 0 0,0 10,20C10.64,20 11.27,19.92 11.88,19.77C10.12,19.38 8.5,18.5 7.17,17.29C5.22,16.25 4,14.21 4,12C4,11.7 4.03,11.41 4.07,11.11C4.03,10.74 4,10.37 4,10C4,8.56 4.32,7.13 4.93,5.82Z"/>
</svg><br><span>2012</span></label></li>
  <li title="2011"><label for="tab10" role="button"><svg viewBox="0 0 24 24"><path d="M14,2A8,8 0 0,0 6,10A8,8 0 0,0 14,18A8,8 0 0,0 22,10H20C20,13.32 17.32,16 14,16A6,6 0 0,1 8,10A6,6 0 0,1 14,4C14.43,4 14.86,4.05 15.27,4.14L16.88,2.54C15.96,2.18 15,2 14,2M20.59,3.58L14,10.17L11.62,7.79L10.21,9.21L14,13L22,5M4.93,5.82C3.08,7.34 2,9.61 2,12A8,8 0 0,0 10,20C10.64,20 11.27,19.92 11.88,19.77C10.12,19.38 8.5,18.5 7.17,17.29C5.22,16.25 4,14.21 4,12C4,11.7 4.03,11.41 4.07,11.11C4.03,10.74 4,10.37 4,10C4,8.56 4.32,7.13 4.93,5.82Z"/>
</svg><br><span>2011</span></label></li>
    <li title="2010"><label for="tab11" role="button"><svg viewBox="0 0 24 24">
    <path d="M14,2A8,8 0 0,0 6,10A8,8 0 0,0 14,18A8,8 0 0,0 22,10H20C20,13.32 17.32,16 14,16A6,6 0 0,1 8,10A6,6 0 0,1 14,4C14.43,4 14.86,4.05 15.27,4.14L16.88,2.54C15.96,2.18 15,2 14,2M20.59,3.58L14,10.17L11.62,7.79L10.21,9.21L14,13L22,5M4.93,5.82C3.08,7.34 2,9.61 2,12A8,8 0 0,0 10,20C10.64,20 11.27,19.92 11.88,19.77C10.12,19.38 8.5,18.5 7.17,17.29C5.22,16.25 4,14.21 4,12C4,11.7 4.03,11.41 4.07,11.11C4.03,10.74 4,10.37 4,10C4,8.56 4.32,7.13 4.93,5.82Z"/>
</svg><br><span>2010</span></label></li>    <li title="2009"><label for="tab12" role="button"><svg viewBox="0 0 24 24">
   <path d="M14,2A8,8 0 0,0 6,10A8,8 0 0,0 14,18A8,8 0 0,0 22,10H20C20,13.32 17.32,16 14,16A6,6 0 0,1 8,10A6,6 0 0,1 14,4C14.43,4 14.86,4.05 15.27,4.14L16.88,2.54C15.96,2.18 15,2 14,2M20.59,3.58L14,10.17L11.62,7.79L10.21,9.21L14,13L22,5M4.93,5.82C3.08,7.34 2,9.61 2,12A8,8 0 0,0 10,20C10.64,20 11.27,19.92 11.88,19.77C10.12,19.38 8.5,18.5 7.17,17.29C5.22,16.25 4,14.21 4,12C4,11.7 4.03,11.41 4.07,11.11C4.03,10.74 4,10.37 4,10C4,8.56 4.32,7.13 4.93,5.82Z"/>
</svg><br><span>2009</span></label></li>

 <li title="2008"><label for="tab13" role="button"><svg viewBox="0 0 24 24"><path d="M14,2A8,8 0 0,0 6,10A8,8 0 0,0 14,18A8,8 0 0,0 22,10H20C20,13.32 17.32,16 14,16A6,6 0 0,1 8,10A6,6 0 0,1 14,4C14.43,4 14.86,4.05 15.27,4.14L16.88,2.54C15.96,2.18 15,2 14,2M20.59,3.58L14,10.17L11.62,7.79L10.21,9.21L14,13L22,5M4.93,5.82C3.08,7.34 2,9.61 2,12A8,8 0 0,0 10,20C10.64,20 11.27,19.92 11.88,19.77C10.12,19.38 8.5,18.5 7.17,17.29C5.22,16.25 4,14.21 4,12C4,11.7 4.03,11.41 4.07,11.11C4.03,10.74 4,10.37 4,10C4,8.56 4.32,7.13 4.93,5.82Z"/>
</svg><br><span>2008</span></label></li>
    <li title="2007"><label for="tab14" role="button"><svg viewBox="0 0 24 24"><path d="M14,2A8,8 0 0,0 6,10A8,8 0 0,0 14,18A8,8 0 0,0 22,10H20C20,13.32 17.32,16 14,16A6,6 0 0,1 8,10A6,6 0 0,1 14,4C14.43,4 14.86,4.05 15.27,4.14L16.88,2.54C15.96,2.18 15,2 14,2M20.59,3.58L14,10.17L11.62,7.79L10.21,9.21L14,13L22,5M4.93,5.82C3.08,7.34 2,9.61 2,12A8,8 0 0,0 10,20C10.64,20 11.27,19.92 11.88,19.77C10.12,19.38 8.5,18.5 7.17,17.29C5.22,16.25 4,14.21 4,12C4,11.7 4.03,11.41 4.07,11.11C4.03,10.74 4,10.37 4,10C4,8.56 4.32,7.13 4.93,5.82Z"/>
</svg><br><span>2007</span></label></li>
    <li title="2006"><label for="tab15" role="button"><svg viewBox="0 0 24 24">
    <path d="M14,2A8,8 0 0,0 6,10A8,8 0 0,0 14,18A8,8 0 0,0 22,10H20C20,13.32 17.32,16 14,16A6,6 0 0,1 8,10A6,6 0 0,1 14,4C14.43,4 14.86,4.05 15.27,4.14L16.88,2.54C15.96,2.18 15,2 14,2M20.59,3.58L14,10.17L11.62,7.79L10.21,9.21L14,13L22,5M4.93,5.82C3.08,7.34 2,9.61 2,12A8,8 0 0,0 10,20C10.64,20 11.27,19.92 11.88,19.77C10.12,19.38 8.5,18.5 7.17,17.29C5.22,16.25 4,14.21 4,12C4,11.7 4.03,11.41 4.07,11.11C4.03,10.74 4,10.37 4,10C4,8.56 4.32,7.13 4.93,5.82Z"/>
</svg><br><span>2006</span></label></li>    <li title="2005"><label for="tab16" role="button"><svg viewBox="0 0 24 24">
   <path d="M14,2A8,8 0 0,0 6,10A8,8 0 0,0 14,18A8,8 0 0,0 22,10H20C20,13.32 17.32,16 14,16A6,6 0 0,1 8,10A6,6 0 0,1 14,4C14.43,4 14.86,4.05 15.27,4.14L16.88,2.54C15.96,2.18 15,2 14,2M20.59,3.58L14,10.17L11.62,7.79L10.21,9.21L14,13L22,5M4.93,5.82C3.08,7.34 2,9.61 2,12A8,8 0 0,0 10,20C10.64,20 11.27,19.92 11.88,19.77C10.12,19.38 8.5,18.5 7.17,17.29C5.22,16.25 4,14.21 4,12C4,11.7 4.03,11.41 4.07,11.11C4.03,10.74 4,10.37 4,10C4,8.56 4.32,7.13 4.93,5.82Z"/>
</svg><br><span>2005</span></label></li>

  <li title="2004"><label for="tab17" role="button"><svg viewBox="0 0 24 24"><path d="M14,2A8,8 0 0,0 6,10A8,8 0 0,0 14,18A8,8 0 0,0 22,10H20C20,13.32 17.32,16 14,16A6,6 0 0,1 8,10A6,6 0 0,1 14,4C14.43,4 14.86,4.05 15.27,4.14L16.88,2.54C15.96,2.18 15,2 14,2M20.59,3.58L14,10.17L11.62,7.79L10.21,9.21L14,13L22,5M4.93,5.82C3.08,7.34 2,9.61 2,12A8,8 0 0,0 10,20C10.64,20 11.27,19.92 11.88,19.77C10.12,19.38 8.5,18.5 7.17,17.29C5.22,16.25 4,14.21 4,12C4,11.7 4.03,11.41 4.07,11.11C4.03,10.74 4,10.37 4,10C4,8.56 4.32,7.13 4.93,5.82Z"/>
</svg><br><span>2004</span></label></li>
    <li title="2003"><label for="tab18" role="button"><svg viewBox="0 0 24 24">
    <path d="M14,2A8,8 0 0,0 6,10A8,8 0 0,0 14,18A8,8 0 0,0 22,10H20C20,13.32 17.32,16 14,16A6,6 0 0,1 8,10A6,6 0 0,1 14,4C14.43,4 14.86,4.05 15.27,4.14L16.88,2.54C15.96,2.18 15,2 14,2M20.59,3.58L14,10.17L11.62,7.79L10.21,9.21L14,13L22,5M4.93,5.82C3.08,7.34 2,9.61 2,12A8,8 0 0,0 10,20C10.64,20 11.27,19.92 11.88,19.77C10.12,19.38 8.5,18.5 7.17,17.29C5.22,16.25 4,14.21 4,12C4,11.7 4.03,11.41 4.07,11.11C4.03,10.74 4,10.37 4,10C4,8.56 4.32,7.13 4.93,5.82Z"/>
</svg><br><span>2003</span></label></li>   

 <li title="2002"><label for="tab19" role="button"><svg viewBox="0 0 24 24"><path d="M14,2A8,8 0 0,0 6,10A8,8 0 0,0 14,18A8,8 0 0,0 22,10H20C20,13.32 17.32,16 14,16A6,6 0 0,1 8,10A6,6 0 0,1 14,4C14.43,4 14.86,4.05 15.27,4.14L16.88,2.54C15.96,2.18 15,2 14,2M20.59,3.58L14,10.17L11.62,7.79L10.21,9.21L14,13L22,5M4.93,5.82C3.08,7.34 2,9.61 2,12A8,8 0 0,0 10,20C10.64,20 11.27,19.92 11.88,19.77C10.12,19.38 8.5,18.5 7.17,17.29C5.22,16.25 4,14.21 4,12C4,11.7 4.03,11.41 4.07,11.11C4.03,10.74 4,10.37 4,10C4,8.56 4.32,7.13 4.93,5.82Z"/>
</svg><br><span>2002</span></label></li>
    <li title="2001"><label for="tab20" role="button"><svg viewBox="0 0 24 24"><path d="M14,2A8,8 0 0,0 6,10A8,8 0 0,0 14,18A8,8 0 0,0 22,10H20C20,13.32 17.32,16 14,16A6,6 0 0,1 8,10A6,6 0 0,1 14,4C14.43,4 14.86,4.05 15.27,4.14L16.88,2.54C15.96,2.18 15,2 14,2M20.59,3.58L14,10.17L11.62,7.79L10.21,9.21L14,13L22,5M4.93,5.82C3.08,7.34 2,9.61 2,12A8,8 0 0,0 10,20C10.64,20 11.27,19.92 11.88,19.77C10.12,19.38 8.5,18.5 7.17,17.29C5.22,16.25 4,14.21 4,12C4,11.7 4.03,11.41 4.07,11.11C4.03,10.74 4,10.37 4,10C4,8.56 4.32,7.13 4.93,5.82Z"/>
</svg><br><span>2001</span></label></li>
  </ul>
  <div class="content">
 <section>
          <h2>2020</h2>
          <div style=" width: 100%; height: 100%; text-align: center; border-bottom: solid; border-bottom-color:  #072C53; padding-bottom:  30px; ">
             <div><img src="img/Виховна/Покрова4.webp" class="minimized" id="im121" alt="" style=""></div>
    <div class="vypusk1" style="">
     
       <div>
          <div>
<div style="display: flex;justify-content: center;">
  <h3  style="width: 500px;font-size: 16px; height: auto; padding-bottom: 15px; padding-top: 15px;background-color: #ececec; "><b>Куратор групи:</b>Невінська Наталія Володимирівна</h3>
  </div>
  <div>
    <ol class="pills" style="">
      <li>Баюрський Роман Анатолійович </li>
     <li>Боченко Людмила Юріївна </li>
      <li>Білінський Назар Васильович </li>
      <li>Бортняк Андрій Петрович </li>
      <li>Бурба Віктор Григорович </li>
     <li>Дишлевий  Павло Романович </li>
      <li>Ігнацевич Тарас Володимирович</li>
      <li>Катрич Роман Володимирович </li>
      <li>Кунцьо  Вадим Сергійович </li>
      <li>Левенець Олег Петрович </li>
      <li>Левицький Михайло Володимирович </li>
      <li>Лукасевич Максим Анатолійович </li>
      <li>Лучка Мирон Степанович</li>
      <li>Мазур Олег Володимирович </li>
      <li>Монастирський Василь Васильович</li>
      <li>Мороз Олег Ярославович</li>
      <li>Ничка Петро Михайлович </li>
     <li>Павлов Михайло Вікторович </li>
      <li>Павчишен Олександр Сергійович </li>
      <li>Романський Степан Володимирович </li>
      <li>Романчук Володимир Олегович </li>
      <li>Сарновський Володимир Павлович </li>
      <li>Семенишен Андрій Леонідович </li>
      <li>Сидорук Віталій Юрійович </li>
      <li>Стефанець Віталій Миколайович </li>
      <li>Сухарський Віталій Олександрович </li>
      <li>Шургот Андрій Романович </li>
      <li>Юрлов Максим Олексійович </li>
    </ol>
    
  </div>
   
</div>
</div>  
    </div>
  </div></section>
        <section>
          <h2>2019</h2>
          <div style=" width: 100%; height: 100%; text-align: center; border-bottom: solid; border-bottom-color:  #072C53; padding-bottom:  30px;">
             <div><img src="img/Випуски/2019.jpg" class="minimized" id="im121" alt="" style=""></div>
    <div class="vypusk1" style="">
     
       <div>
          <div><div style="display: flex;justify-content: center;">
  <h3  style="width: 500px;font-size: 16px; height: auto; padding-bottom: 15px; padding-top: 15px;background-color: #ececec; "><b>Куратор групи:</b>Оляніна Надія Володимирівна</h3>
  </div>
<div>
    <ol class="pills" style="">
      <li>Борніцький Ростислав Іванович</li>
      <li>Денисов Денис Васильович</li>
      <li>Зеленський Костянтин Костянтинович</li>
      <li>Клекот Віталій Михайлович</li>
      <li>Ковалишин Павло Ігорович</li>
      <li>Коломий Віталій Петрович</li>
      <li>Лісневський Денис Володимирович</li>
      <li>Логвин Вероніка Миколаївна</li>
      <li>Луценко Павло Костянтинович</li>
      <li>Масловський Дем’ян Вікторович</li>
      <li>Мельничук Вадим Віталійович</li>
      <li>Музика Сергій Олександрович</li>
      <li>Олянін Денис Валерійович</li>
      <li>Прекста Даниіл Степанович</li>
      <li>Пухальський Дмитро Станіславович</li>
      <li>Радковський Юрій Андрійович</li>
      <li>Рога Олександр Васильович</li>
      <li>Романченко Валерій Васильович</li>
      <li>Стрілець Денис Володимирович</li>
      <li>Токар Богдан Сергійович</li>
            <li>Чорний Іван Павлович</li>
      <li>Шмокалюк Степан Васильович</li>
      <li>Шкляр Олесь Омелянович</li>
    </ol>
    
  </div>
    </div>
</div>  
    </div>
  </div></section>
        <section>
          <h2>2018</h2>
          <div style=" width: 100%; height: 100%; text-align: center; border-bottom: solid; border-bottom-color:  #072C53; padding-bottom:  30px; ">
             <div><img src="img/Випуски/2018.jpg" class="minimized" id="im121" alt="" style=""></div>
    <div class="vypusk1" style="">
     
       <div>
          <div>
<div style="display: flex;justify-content: center;">
  <h3  style="width: 500px;font-size: 16px; height: auto; padding-bottom: 15px; padding-top: 15px;background-color: #ececec; "><b>Куратор групи:</b>Стельмащук Людмила Володимирівна</h3>
  </div>
  <div>
    <ol class="pills" style="">
     <li>Балакунець Олег Володимирович</li>
      <li>Бандурак Олександр Андрійович</li>
      <li>Барціховський Павло Володимирович</li>
      <li>Бенькалович Тарас Андрійович</li>
      <li>Береза Юрій Анатолійович</li>
      <li>Біньковська Катерина Олександрівна</li>
      <li>Бортник Юлія Ігорівна</li>
      <li>Голдис Віталій Миколайович</li>
      <li>Гулич Андрій Васильович</li>
      <li>Деренівський Ярослав Володимирович</li>
      <li>Іванків Володимир Вікторович</li>
      <li>Івачевський Андрій Васильович</li>
      <li>Кишкан Віталій Володимирович</li>
      <li>Кінах Володимир Петрович</li>
         <li>Колісник Олег Ярославович</li>
      <li>Кравчик Вадим Олександрович</li>
      <li>Кришталович Ярослав Михайлович</li>
      <li>Кузь Сергій Васильович</li>
      <li>Кушнір Вадим Вікторович</li>
      <li>Лучка Віталій Петрович</li>
      <li>Миськова Ольга Віталіївна</li>
      <li>Сава Роман Іванович</li>
      <li>Сиротюк Іван Валерійович</li>
      <li>Фасон Сергій Сергійович</li>
      <li>Хабінець Микола Іванович</li>
      <li>Хома Андрій Миколайович</li>
      <li>Шинкар Андрій Ігорович</li>
      <li>Заставна Діана Юріївна</li>
    </ol>
    
  </div>
   
</div>
</div>  
    </div>
  </div></section>
    <section>
          <h2>2017</h2>
          <div style=" width: 100%; height: 100%; text-align: center; border-bottom: solid; border-bottom-color:  #072C53; padding-bottom:  30px;margin-bottom: 30px;">
             <div><img src="img/Випуски/2017.jpg" class="minimized" id="im121" alt="" style=""></div>
    <div class="vypusk1" style="">
     
       <div>
          <div><div style="display: flex;justify-content: center;">
  <h3  style="width: 500px;font-size: 16px; height: auto; padding-bottom: 15px; padding-top: 15px;background-color: #ececec; "><b>Куратор групи:</b>Саска Галина Володимирівна</h3>
  </div>
  <div>
    <ol class="pills" style="">
      <li>Бережний Богдан Ігорович</li>
      <li>Борніцький Віталій Володимирович</li>
      <li>Вовк Сергій Ігорович</li>
      <li>Гривнак Денис Олександрович</li>
      <li>Ділай Ольга Ігорівна</li>
      <li>Євсюков Владислав Юрійович</li>
      <li>Кенжалін Даниїл Володимирович</li>
      <li>Кінделевич Микола Олександрович</li>
      <li>Ковальковський Юрій Анатолійович</li>
      <li>Ковальчук Тарас Олегович</li>
      <li>Крещук Сергій Ігорович</li>
      <li>Легутко Геннадій Іванович</li>
      <li>Лепетун Михайло Миколайович</li>
      <li>Луцик Петро Володимирович</li>
      <li>Мієжеєвський Кароль-Артур Зеновійович</li>
      <li>Мульський Іван Анатолійович</li>
      <li>Осідак Андрій Володимирович</li>
           <li>Біленький Андрій Русланович</li>
      <li>Жеребецький Ігор Анатолійович</li>
      <li>Задунайська Олександра Михайлівна</li>
      <li>Липка Віктор Володимирович</li>
      <li>Моспанко Олег Анатолійович</li>
      <li>Палюх Василь Миколайович</li>
      <li>Піхуник Назарій Ігорович</li>
      <li>Плосконос Богдан Вікторович</li>
      <li>Повх Антон Антонович</li>
      <li>Римар Іван Андрійович</li>
      <li>Руснак Віктор Михайлович</li>
      <li>Сікора Олександр Сергійович</li>
      <li>Слободян Олександр Віталійович</li>
      <li>Стойка Олександр Андрійович</li>
      <li>Стус Михайло Павлович</li>
      <li>Ткач Іванна Леонідівна</li>
      <li>Українець Владислав Олександрович</li>
      <li>Чепига Ігор Юрійович</li>
    </ol>
    
  </div> </div>
</div>  
    </div>
  </div>
</section>
           <section>
          <h2>2016</h2>
          <div style=" width: 100%; height: 100%; text-align: center; border-bottom: solid; border-bottom-color:  #072C53; padding-bottom:  30px;">
             <div><img src="img/Випуски/2016.jpg" class="minimized" id="im121" alt="" style=""></div>
    <div class="vypusk1" style="">
     
       <div>
          <div><div style="display: flex;justify-content: center;">
  <h3  style="width: 500px;font-size: 16px; height: auto; padding-bottom: 15px; padding-top: 15px;background-color: #ececec; "><b>Куратор групи:</b>Барціховська Катерина Іванівна</h3>
  </div>
  <div>
    <ol class="pills" style="">
    <li>Баумкетнер Ярослав Ярославович</li>
      <li>Білик Микола Володимирович</li>
      <li>Вівчарик Володимир Михайлович</li>
      <li>Гайдук Роман Степанович</li>
      <li>Гуня Андрій Орестович </li>
      <li>Дмитрів Андрій Володимирович</li>
      <li>Дубінський Ярослав Володимирович</li>
      <li>Жила Владислав Романович</li>
      <li>Жук Олександр Олександрович</li>
      <li>Забігайло Олександр Іванович</li>
      <li>Зима Олег Васильович</li>
      <li>Кобилянський Іван Володимирович</li>
      <li>Ковальчук Ярослав Олегович  </li>
      <li>Кримець Олег Васильович </li>
      <li>Мадяк Сергій Петрович</li>
      <li>Стиранка Володимир Васильович</li>
      <li>Ткач Віталій Олегович</li>
      <li>Фечан Володимир Васильович</li>
      <li>Черненко Юрій Сергійович</li>
      <li>Чухрій Тарас Олександрович</li>
      <li>Яковенко Олена Миколаївна</li>
      <li>Янковська Дарія Анатоліївна</li>
    </ol>
    
  </div>
</div>
</div>  
    </div>
  </div></section>
         <section>
          <h2>2015</h2>
          <div style=" width: 100%; height: 100%; text-align: center; border-bottom: solid; border-bottom-color:  #072C53; padding-bottom:  30px;">
             <div><img src="img/Випуски/2015.jpg" class="minimized" id="im121" alt="" style=""></div>
    <div class="vypusk1" style="">
     
       <div>
          <div><div style="display: flex;justify-content: center;">
  <h3  style="width: 500px;font-size: 16px; height: auto; padding-bottom: 15px; padding-top: 15px;background-color: #ececec; "><b>Куратор групи:</b>Стельмащук Людмила Володимирівна</h3>
  </div>
  <div>
    <ol class="pills" style="">
  <li>Андрощук Віталій</li>
      <li>Бабій Катерина</li>
      <li>Бечка Андрій</li>
      <li>Біланюк Святослав</li>
      <li>Галунька Ігор</li>
      <li>Гаврилюк Євген</li>
      <li>Горячий Назарій</li>
      <li>Давидов Андрій</li>
      <li>Жмуд Віталій</li>
      <li>Журба Назарій</li>
      <li>Клочак Вадим</li>
      <li>Ковальський Олександр</li>
      <li>Коновал Назар</li>
      <li>Кузь Олександр</li>
      <li>Мадяк Олена</li>
      <li>Маргаль Назар</li>
      <li>Мех Оксана</li>
      <li>Павлюковський Іван</li>
      <li>Палій Володимир</li>
      <li>Подолян Дмитро</li>
      <li>Пожарнюк Юрій</li>
      <li>Ратушний Ярослав</li>
      <li>Савула Дмитро</li>
      <li>Сиротюк Юрій </li>
      <li>Сіньковський Дмитро</li>
       <li>Скриник Ігор</li>
      <li>Слободян Микола</li>
      <li>Сосновський Андрій </li>
      <li>Стиранка Михайло</li>
       <li>Суходола Дмитро</li>
      <li>Терешко Орест</li>
      <li>Тропак Марія</li>
      <li>Улановський Юрій</li>
       <li>Чорний Арсен</li>
      <li>Печений Мар'ян</li>
      <li>Пазій Тетяна </li>
      <li>Шпак Владислав</li>
    </ol>
    
  </div></div>
</div>  
    </div>
  </div></section>
        <section>
          <h2>2014</h2>
          <div style=" width: 100%; height: 100%; text-align: center; border-bottom: solid; border-bottom-color:  #072C53; padding-bottom:  30px;">
             <div><img src="img/Випуски/2014.jpg" class="minimized" id="im121" alt="" style=""></div>
    <div class="vypusk1" style="">
     
       <div>
          <div><div style="display: flex;justify-content: center;">
  <h3  style="width: 500px;font-size: 16px; height: auto; padding-bottom: 15px; padding-top: 15px;background-color: #ececec; "><b>Куратор групи:</b>Рибак О. П.</h3>
  </div>
  <div>
    <ol class="pills" style="">
      <li>Бембенок Богдан Васильович</li>
      <li>Варик Віталій Олегович</li>
      <li>Воробець Володимир Ігорович</li>
      <li>Ворона Віталій Миронович</li>
      <li>Галябарда Максим Борисович</li>
      <li>Дмитрів Ростислав Васильович</li>
      <li>Добруцький Костянтин Вікторович</li>
      <li>Дубина Віталій Сергійович</li>
      <li>Кормило Ігор Васильович</li>
      <li>Костишин Орест Вікторович</li>
      <li>Кульпак Назар Володимирович</li>
      <li>Куровський Руслан Володимирович</li>
      <li>Кухар Сергій Вікторович</li>
      <li>Марчук Богдан Сергійович</li>
      <li>Палагута Олександр Сергійович</li>
      <li>Перешлюга Степан Васильович</li>
      <li>Побережний Микола Петрович</li>
      <li>Побережний Михайло Анатолійович</li>
      <li>Процик Ігор Миколайович</li>
      <li>Рембоха Ігор Павлович</li>
      <li>Слабіцький Ігор Олегович</li>
      <li>Слободян Олег Васильович</li>
      <li>Холод Дмитро Михайлович</li>
      <li>Цинцар Сергій Олегович</li>
      <li>Чорний Ігор Олександрович</li>
      <li>Шарко Олександр Сергійович</li>
      <li>Юркевич Сергій Юрійович</li>
      <li>Якимович Максим Вікторови</li>
    </ol>
    
  </div>
 </div>
</div>  
    </div>
  </div></section>
   <section>
          <h2>2013</h2>
          <div style=" width: 100%; height: 100%; text-align: center; border-bottom: solid; border-bottom-color:  #072C53; padding-bottom:  30px;">
              <div><img src="img/Випуски/2013.jpg" class="minimized" id="im121" alt="" style=""></div>
    <div class="vypusk1" style="">
     
       <div>
          <div><div style="display: flex;justify-content: center;">
  <h3  style="width: 500px;font-size: 16px; height: auto; padding-bottom: 15px; padding-top: 15px;background-color: #ececec; "><b>Куратор групи:</b>Оляніна Надія Володимирівна</h3>
  </div>
  <div>
    <ol class="pills" style="">
   <li>Бойчишин Дмитро</li>
      <li>Болібрух Михайло</li>
      <li>Борсук Олександр</li>
      <li>Вівчурко Олександр</li>
      <li>Галябарда Олександр</li>
      <li>Ганущак Ярослав</li>
      <li>Деренівська Ірина</li>
      <li>Деркач Павло</li>
      <li>Жеребецький Орест</li>
      <li>Желіховська Марія</li>
      <li>Завідія Василь</li>
      <li>Ковальчук Галина</li>
      <li>Кордиш Віталій</li>
      <li>Кухаришен Андрій</li>
      <li>Липка Володимир</li>
      <li>Невінський Андрій</li>
      <li>Олійник Віталій</li>
      <li>Паламар Андрій</li>
      <li>ПоворозникВасиль</li>
      <li>Роздеба Михайло</li>
      <li>Руснак Наталія</li>
      <li>Саган Василь</li>
      <li>Салашник Степан</li>
      <li>Тоскалюк Сергій</li>
      <li>Фанда Іван</li>
      <li>Цікра Андрій</li>
      <li>Шварновський Олег</li>
      <li>Чаплінський Роман</li>
      <li>Шустак Михайло</li>
    </ol>
    
  </div>
    </div>
</div>  
    </div>
  </div></section>
   <section>
          <h2>2012</h2>
          <div style=" width: 100%; height: 100%; text-align: center; border-bottom: solid; border-bottom-color:  #072C53; padding-bottom:  30px;">
             <div><img src="img/Випуски/2012.jpg" class="minimized" id="im121" alt="" style=""></div>
    <div class="vypusk1" style="">
     
       <div>
          <div><div style="display: flex;justify-content: center;">
  <h3  style="width: 500px;font-size: 16px; height: auto; padding-bottom: 15px; padding-top: 15px;background-color: #ececec; "><b>Куратор групи:</b></h3>
  </div>
  <div>
    <ol class="pills" style="">
      <li>Бандрівчак Ігор Ігорович</li>
      <li>Боднар СЕргій Сергійович</li>
      <li>Бойчишин Степан Михайлович</li>
      <li>Вайда Оксана Степанівна</li>
      <li>Вівчар Михайло Васильович</li>
      <li>Волох Оксана Тимофіївна</li>
      <li>Герасимович Роман Михайлович</li>
      <li>Герман Михайло Миколайович</li>
      <li>Глебенков Роман Володимирович</li>
      <li>Горішний Вадим Володимирович</li>
      <li>Гриців Руслан Михайлович</li>
      <li>Гураль Іван Олегович</li>
      <li>Козира Тарас Петрович</li>
      <li>Лисий Віталій Ярославович</li>
      <li>Матвійчук Тарас Володимирович</li>
      <li>Мельник Андрій Васильович</li>
      <li>Назарчук Андрій Миколайович</li>
      <li>Пенюта Тарас Ярославович</li>
      <li>Подолян Микола Миколайович</li>
      <li>Савицький Павло Володимирович</li>
      <li>Сєрий Олександр Юрійович</li>
      <li>Стельмах Андрій Сергійович</li>
      <li>Філатов Еміль Юрійович</li>
      <li>Холкін Дмитро Євгенійович</li>
      <li>Шургот Уляна Петрівна</li>
       <li>Гойда Артем Олегович</li>
       <li>Горголь Михайло Русланович</li>
      <li>Затильний Василь Ростиславович</li>
      <li>Іванків Павло Володимирович</li>
      <li>Котик Михайло Богданович</li>
      <li>Коцюбинський Ярослав Васильович</li>
      <li>Кульчицький Назарій Ігорович</li>
      <li>Пашківський Михайло Зіновійович</li>
      <li>Пирожик Андрій Іванович</li>
      <li>Турман Олег Богданович</li>
      <li>Фандера Ігор Ігорович</li>
    </ol>
    
  </div>
</div>
</div>  
    </div>
  </div></section>
   <section>
          <h2>2011</h2>
          <div style=" width: 100%; height: 100%; text-align: center; border-bottom: solid; border-bottom-color: #072C53;  padding-bottom:  30px;">
            <div><img src="img/Випуски/2011.jpg" class="minimized" id="im121" alt="" style=""></div>
    <div class="vypusk1" style="">
     
       <div>
          <div><div style="display: flex;justify-content: center;">
  <h3  style="width: 500px;font-size: 16px; height: auto; padding-bottom: 15px; padding-top: 15px;background-color: #ececec; "><b>Куратор групи:</b>Стельмащук Людмила Володимирівна</h3>
  </div>
  <div>
    <ol class="pills" style="">
   <li>Бойко Ольга Ігорівна</li>
      <li>Бурак Віталій Васильович</li>
      <li>Венгер Віктор Іванович</li>
      <li>Вівчарик Юрій Олегович</li>
      <li>Гладкий Віктор Васильович</li>
      <li>Гонтюк Іван Миколайович</li>
      <li>Грабар Ірина Андріївна</li>
      <li>Гринчук Сергій Олександрович</li>
      <li>Данилюк Віталій Іванович</li>
      <li>Деренівський Олександр Петрович</li>
      <li>Дідур Олеся Василівна</li>
      <li>Донцова Ольга Вікторівна</li>
      <li>Дячук Олександр Святославович</li>
      <li>Зелінський Денис Сергійович</li>
      <li>Зелінський Руслан Миколайович</li>
      <li>Ковальчук Андрій Михайлович</li>
      <li>Копичинський Віктор Анатолійович</li>
      <li>Котляр Іван Іванович</li>
      <li>Кривий Андрій Ярославович</li>
      <li>Курдило Олександр Вікторович</li>
      <li>Лупійчук Андрій Петрович</li>
      <li>Ляхта Денис Володимирович</li>
      <li>Махно Володимир Ярославович</li>
      <li>Озимок Андрій Степанович</li>
      <li>Побережний Павло Петрович</li>
      <li>Пятковський Олексій Миколайович</li>
      <li>Пасічник Олександр Анатолійович</li>
      <li>Скиба Віталій Анатолійович</li>
      <li>Солтис Іван Ігорович</li>
      <li>Тіхомиров Олександр Олександрович</li>
      <li>Фостик Микола Васильович</li>
      <li>Хаба Ганна Михайлівна</li>
      <li>Шпак Андрій Степанович</li>
    </ol>
    
  </div>
</div>
</div>  
    </div>
  </div></section>
  <section>
          <h2>2010</h2>
          <div style=" width: 100%; height: 100%; text-align: center; border-bottom: solid; border-bottom-color: #072C53; padding-bottom:  30px;">
             <div><img src="img/Випуски/2010.jpg" class="minimized" id="im121" alt="" style=""></div>
    <div class="vypusk1" style="">
     
       <div>
          <div><div style="display: flex;justify-content: center;">
  <h3  style="width: 500px;font-size: 16px; height: auto; padding-bottom: 15px; padding-top: 15px;background-color: #ececec; "><b>Куратор групи:</b>Синишина Світлана Гаврилівна</h3>
  </div>
  <div>
    <ol class="pills" style="">
 <li>Биков Андрій Миколайович</li>
      <li>Волошин Михайло Анатолійович</li>
      <li>Герчак Володимир Васильович</li>
      <li>Гнатишин Микола Анатолійович</li>
      <li>Грохольський Анатолій Михайлович</li>
      <li>Деренівський Павло Михайлович</li>
      <li>Джупіна Ігор Романович</li>
      <li>Духлій Олександр Володимирович</li>
      <li>Загородна Марія Василівна</li>
      <li>Засідко Петро Петрович</li>
      <li>Заяць Василь Ігорович</li>
      <li>Когунь Вадим Валерійович</li>
      <li>Козак Богдан Романович</li>
      <li>Кондратюк Марія Олегівна</li>
      <li>Кораль Василь Богданович</li>
      <li>Кухаришин Микола Миколайович</li>
      <li>Лесик Андрій Лук’янович</li>
      <li>Македон Микола Васильович</li>
      <li>Марков В’ячеслав Володимирович</li>
      <li>Новак Петро Володимирович</li>
      <li>Потурняк Ольга Павлівна</li>
      <li>Пиріжок Михайло Петрович</li>
      <li>Сеньків Галина Михайлівна</li>
      <li>Скарбик Павло Ярославович</li>
      <li>Соловій Тарас Іванович</li>
      <li>Трохимчук Віталій Володимирович</li>
      <li>Хома Володимир Андрійович</li>
      <li>Швець Дем’ян Володимирович</li>
      <li>Шемлей Василь Сергійович</li>
      <li>Шостак Андрій Володимирович</li>
 
    </ol>
    
  </div>
</div>
</div>  
    </div>
  </div></section>

  <section>
          <h2>2009</h2>
          <div style=" width: 100%; height: 100%; text-align: center; border-bottom: solid; border-bottom-color: #072C53; padding-bottom:  30px;">
             <div><img src="img/Випуски/2009.jpg" class="minimized" id="im121" alt="" style=""></div>
    <div class="vypusk1" style="">
     
       <div>
          <div><div style="display: flex;justify-content: center;">
  <h3  style="width: 500px;font-size: 16px; height: auto; padding-bottom: 15px; padding-top: 15px;background-color: #ececec; "><b>Куратор групи:</b>Барціховська Катерина Іванівна</h3>
  </div>
  <div>
    <ol class="pills" style="">
<li>Біленький Володимир Леонідович</li>
<li>Бобровський Андрій Валентинович</li>
<li>Велебніцький Олександр Володимирович</li>
<li>Велещук Наталія Григорівна</li>
<li>Вилущак Павло Володимирович</li>
<li>Винник Михайло Володимирович</li>
<li>Водиляк Анатолій Ігорович</li>
<li>Гавришко Володимир Вікторович</li>
<li>Галайко Андрій Ярославович</li>
<li>Гевал Людмила Русланівна</li>
<li>Головецька Ольга Володимирівна</li>
<li>Дудик Іван Андрійович</li>
<li>Жеребчук Вадим Вікторович</li>
<li>Жиловський Андрій Валентинович</li>
<li>Захарчук Андрій Дмитрович</li>
<li>Зеленко Максим Леонідович</li>
<li>Корніцький Микола Васильович</li>
<li>Котлінський Вадим Миколайович</li>
<li>Лаврушко Ольга Володимирівна</li>
<li>Лучка Тарас Павлович</li>
<li>Малькевич Уляна Вікторівна</li>
<li>Мельник Олександр Володимирович</li>
<li>Мельничук Олег Володимирович</li>
<li>Михальчук Микола Богданович</li>
<li>Мотрук Андрій Васильович</li>
<li>Пащин Володимир Васильович</li>
<li>Пристач Анатолій Оленсандрович</li>
<li>Пріян Наталія Миколаївна</li>
<li>Прокопишин Ігор Григоворич</li>
<li>Римар Тарас Григорович</li>
<li>Романюк Ігор Михайлович</li>
<li>Сабадаш Людмила Олегівна</li>
<li>Сень Володимир Степанович</li>
<li>Сідляк Тарас Миколайович</li>
<li>Слободян Андрій Дмитрович</li>
<li>Шаповалов Андрій Сергійович</li>
<li>Ярема Володимир Васильович</li>
<li>Воробець Михайло Ігорович</li>
<li>Денис Василь Васильович</li>
<li>Дутчак Володимир Ярославович</li>
<li>Качур Тетяна Дмитрівна</li>
<li>Ковдра Михайло Романович</li>
<li>Кучма Роман Романович</li>
<li>Літвінчук Іван Сергійович</li>
<li>Мороз Павло Йосипович</li>
<li>Поворозник Оксана Анатоліївна</li>
<li>Савчук Іван Миколайович</li>
<li>Фаберська Руслана Володимирівна</li>
<li>Фік Павло Миколайович</li>
<li>Тарануха Іванна Володимирівна</li>
<li>Заблоцький Віктор Михайлович</li>
<li>Солостов Василь Володимирович</li>
<li>Тур Михайло Васильович</li>
<li></li>
     </ol>
    
  </div>
 </div>
</div>  
    </div>
  </div></section>
  <section>
          <h2>2008</h2>
          <div style=" width: 100%; height: 100%; text-align: center; border-bottom: solid; border-bottom-color: #072C53; padding-bottom:  30px;">
             <div><img src="img/Випуски/2008.jpg" class="minimized" id="im121" alt="" style=""></div>
    <div class="vypusk1" style="">
     
       <div>
          <div><div style="display: flex;justify-content: center;">
  <h3  style="width: 500px;font-size: 16px; height: auto; padding-bottom: 15px; padding-top: 15px;background-color: #ececec; "><b>Куратор групи:</b>Стельмашук Людмила Володимирівна</h3>
  </div>
  <div>
    <ol class="pills" style="">
     <li>Атаманчук Іван Михайлович</li>
      <li>Бойко Володимир Ігорович</li>
      <li>Болотянський Володимир Андрійович</li>
      <li>Боцян Андрій Степанович</li>
      <li>Вальчук Віталій Анатолійович</li>
      <li>Вікторук Володимир Євгенович</li>
      <li>Воробець Микола Петрович</li>
      <li>Гонта Віталій Михайлович</li>
      <li>Дробенко Микола Петрович</li>
      <li>Думанський Юрій Валерійович</li>
      <li>Квасніцький Віталій Петрович</li>
      <li>Козел Андрій Зіновійович</li>
      <li>Кравчук Ігор Станіславович</li>
      <li>Кухта Олег Юрійович</li>
      <li>Кушнір Артем Ігорович</li>
      <li>Кушнір Віктор Володимирович</li>
      <li>Марак Сергій Зіновійович</li>
      <li>Мержвінський Роман Володимирович</li>
      <li>Микичак Володимир Миколайович</li>
      <li>Миськів Антон Михайлович</li>
       <li>Міщук Тетяна Вікторівна</li>
      <li>Новіцький Тарас Іванович</li>
      <li>Осадчук Сергій Володимирович</li>
      <li>Павловський Андрій Васильович</li>
      <li>Пасічник Андрій Тарасович</li>
      <li>Пенюта Ольга Іванівна</li>
      <li>Попович Олена Михайлівна</li>
      <li>Русаков Олександр Миколайович</li>
      <li>Слободян Іван Іванович</li>
      <li>Стецюк Руслана Петрівна</li>
      <li>Шинкар Павло Ярославович</li>
      <li>Шостак Максим Володимирович</li>
      <li>Шустак Василь Ярославович</li>
     </ol>
    
  </div>
</div>
</div>  
    </div>
  </div></section>

   <section>
          <h2>2007</h2>
          <div style=" width: 100%; height: 100%; text-align: center; border-bottom: solid; border-bottom-color: #072C53; padding-bottom:  30px;">
            <div><img src="img/Випуски/2007.jpg" class="minimized" id="im121" alt="" style=""></div>
    <div class="vypusk1" style="">
     
       <div>
          <div><div style="display: flex;justify-content: center;">
  <h3  style="width: 500px;font-size: 16px; height: auto; padding-bottom: 15px; padding-top: 15px;background-color: #ececec; "><b>Куратор групи:</b>Оляніна Надія Володимирівна</h3>
  </div>
  <div>
    <ol class="pills" style="">
  <li>Варениця Дмитро Євгенович</li>
      <li>Гайда Тетяна Степанівна</li>
      <li>Галябарда Ярослав Володимирович</li>
      <li>Гонта Віталій Михайлович</li>
      <li>Дутченко Павло Олексійович</li>
      <li>Зелінський Володимир Ориславович</li>
      <li>Івасюк Василь Павлович</li>
      <li>Качурівський Віктор Олександрович</li>
      <li>Кіналь Іван Васильович</li>
      <li>Клим Юрій Святославович</li>
      <li>Ковальчук Зіновій Тарасович</li>
      <li>Колодій Богдан Ярославович</li>
      <li>Крашівський Михайло Степанович</li>
      <li>Кришталович Роман Миколайович</li>
      <li>Кузик Павло Антонович</li>
      <li>Кузняк Сергій Михайлович</li>
      <li>Мураха Сергій Вікторович</li>
      <li>Осьмак Ігор Богданович</li>
      <li>Парубій Петро Михайлович</li>
      <li>Почекайло Ярослав Миколайович</li>
      <li>Принада Вікторія Віталіївна</li>
      <li>Свідер Артем Васильович</li>
      <li>Стасюк Неля Василівна</li>
      <li>Тлустий Іван Іванович</li>
      <li>Яковець Олег Васильович</li>
 
    </ol>
    
  </div>
</div>
</div>  
    </div>
  </div></section>

   <section>
          <h2>2006</h2>
          <div style=" width: 100%; height: 100%; text-align: center; border-bottom: solid; border-bottom-color: #072C53; padding-bottom:  30px;">
             <div><img src="img/Випуски/2006.jpg" class="minimized" id="im121" alt="" style=""></div>
    <div class="vypusk1" style="">
     
       <div>
          <div><div style="display: flex;justify-content: center;">
  <h3  style="width: 500px;font-size: 16px; height: auto; padding-bottom: 15px; padding-top: 15px;background-color: #ececec; "><b>Куратор групи:</b>Синишина Світлана Гаврилівна</h3>
  </div>
  <div>
    <ol class="pills" style="">
  <li>Антонюк Антоніна Ігорівна</li>
      <li>Бабала Любов Іванівна</li>
      <li>Бабич Михайло Петрович</li>
      <li>Боднар Анатолій Іванович</li>
      <li>Бойченюк Іван Михайлович</li>
      <li>Будник Наталія Іванівна</li>
      <li>Бураковецька Надія Омелянівна</li>
      <li>Бучинський Микола Михайлович</li>
      <li>Возьна Наталія Василівна</li>
      <li>Гудзь Оксана Іванівна</li>
      <li>Денисова Наталія Юріївна</li>
      <li>Дідур Віталій Васильович</li>
      <li>Доброгорський Артем Павлович</li>
      <li>Димчинов Сергій Миколайович</li>
      <li>Загородна Марія Дмитрівна</li>
      <li>Зарівний Ігор Володимирович</li>
      <li>Західняк Аркадій Васильович</li>
      <li>Ключник Іван Володимирович</li>
      <li>Ковальчук Михайло Степанович</li>
      <li>Когут Марія Іванівна</li>
      <li>Коліщинський Ігор Володимирович</li>
      <li>Копій Микола Іванович</li>
      <li>Котлінська Ольга Миколаївна</li>
      <li>Крицула Сергій Володимирович</li>
      <li>Кулій Ольга Борисівна</li>
      <li>Ласюта Олег Петрович</li>
      <li>Лучка Олег Петрович</li>
      <li>Наліжитий Сергій Валерійович</li>
      <li>Небісь Сергій Миколайович</li>
      <li>Новінчук Ігор Михайлович</li>
      <li>Пелехатий Віталій Валерійович</li>
      <li>Пономар Петро Вікторович</li>
      <li>Поплавська Світлана Броніславівна</li>
      <li>Присяжний Сергій Михайлович</li>
      <li>Пшива Марія Миколаївна</li>
      <li>Савчук Анатолій Миколайович</li>
      <li>Сакалюк Лілія Василівна</li>
      <li>Самець Ігор Володтмирович</li>
      <li>Свинар Олександр Володимирович</li>
      <li>Скрипник Марія Іванівна</li>
      <li>Слободян Василь Миколайович</li>
      <li>Стець Андрій Вікторович</li>
      <li>Сторожук Оксана Мирославівна</li>
      <li>Теньга Руслан Вікторович</li>
      <li>Тимків Володимир Володимирович</li>
      <li>Тимунь Ірина Василівна</li>
      <li>Устінов Володимир Олександрович</li>
      <li>Фаберський Степан Михайлович</li>
      <li>Федорович Олексій Миколайович</li>
      <li>Федорців Олександра Петрівна</li>
      <li>Хамчук Олег Володимирович</li>
      <li>Шепель Володимир Миколайович</li>
      <li>Яскіма Тетяна Володимирівна</li>
 
    </ol>
    
  </div>
</div>
</div>  
    </div>
  </div></section>
   <section>
          <h2>2005</h2>
          <div style=" width: 100%; height: 100%; text-align: center; border-bottom: solid; border-bottom-color: #072C53; padding-bottom:  30px;">
             <div><img src="img/Випуски/2005.jpg" class="minimized" id="im121" alt="" style=""></div>
    <div class="vypusk1" style="">
     
       <div>
          <div><div style="display: flex;justify-content: center;">
  <h3  style="width: 500px;font-size: 16px; height: auto; padding-bottom: 15px; padding-top: 15px;background-color: #ececec; "><b>Куратор групи:</b>Стельмащук Людмила Володимирівна</h3>
  </div>
  <div>
    <ol class="pills" style="">
 <li>Галабіцький Іван Володимирович</li>
      <li>Гладиш Сергій Віталійович</li>
       <li>Гнатюк Роман Володимировичч</li>
            <li>Грибков Володимир Анатолійович</li>
      <li>Гриськов Віталій Дмитрович</li>
      <li>Джус Вадим Іванович</li>
      <li>Довгошлюбна Віта Валентинівна</li>
      <li>Дребіт Ігор Михайлович</li>
      <li>Засмуцька Ольга Павлівна</li>
      <li>Іванків Людмила Олегівна</li>
      <li>Каліновський Володимир Васильович</li>
      <li>Козак Павло Васильович</li>
      <li>Корнят Сергій Михайлович</li>
      <li>Кулій Ігор Андрійович</li>
      <li>Москович Галина Михайлівна</li>
      <li>Осухівський Руслан Ярославович</li>
      <li>Павлина Денис Володимирович</li>
      <li>Сабадах Мирослав Васильович</li>
      <li>Сабадах Ярослав Васильович</li>
      <li>Сегеда Андрій Михайлович</li>
      <li>Трачук Роман Володимирович</li>
      <li>Філіпович Дмитро Іванович</li>
      <li>Фук Віталій Ярославович</li>
      <li>Харкава Оксана Анатоліївна</li>
      <li>Храпливий Петро Едмундович</li>
      <li>Цвігун Тетяна Володимирівна</li> 
      <li>Цірка Галина Ярославівна</li>
      <li>Чміль Василь Володимирович</li>
      <li>Ярема Олег Степанович</li>
 
    </ol>
    
  </div>
 </div>
</div>  
    </div>
  </div>
<div style=" width: 100%; height: 100%; text-align: center; border-bottom: solid; border-bottom-color:#072C53; padding-bottom:  30px; margin-top: 30px;">
             <div><img src="img/Випуски/2005_1.jpg" class="minimized" id="im121" alt="" style=""></div>
    <div class="vypusk1" style="">
     
       <div>
          <div><div style="display: flex;justify-content: center;">
  <h3  style="width: 500px;font-size: 16px; height: auto; padding-bottom: 15px; padding-top: 15px;background-color: #ececec; "><b>Куратор групи:</b>Бойчук Віра Олексіївна</h3>
  </div>
  <div>
    <ol class="pills" style="">
     <li>Басюр Леся Василівна</li>
      <li>Бегедза Світлана Василівна</li>
      <li>Горват Наталія Валентинівна</li>
      <li>Дармороз Леся Василівна</li>
      <li>Здоровцов Юрій Вікторович</li>
      <li>Кебало Тарас Петрович</li>
      <li>Козак Володимир Васильович</li>
      <li>Костів Марія Василівна</li>
      <li>Леськів Оксана Стефанівна</li>
      <li>Мережко Едуард Олегович</li>
      <li>Москалюк Олександр Антонович</li>
      <li>Невінський Володимир Мирославович</li>
      <li>Ніколайченко Михайло Юрійович</li>
      <li>Ойойко Сергій Олександрович</li>
      <li>Оленюк Анатолій Васильович</li>
      <li>Ольховий Володимир Васильович</li>
      <li>Пастушок Руслан Леонідович</li>
      <li>Поворозник Віталій Валерійович</li>
      <li>Скакун Павло Михайлович</li>
      <li>Терлова Галина В’ячеславівна</li>
      <li>Томик Ігор Васильович</li>
      <li>Фафруник Володимир Богданович</li>
      <li>Хомів Марія Ярославівна</li>
      <li>Човник Сергій Ярославович</li>
      <li>Чорномиз Ірина Василівна</li>
      <li>Чубак Ігор Ігорович</li>
      <li>Шмигельський Володимир Олександр</li>
      <li>Щербань Юрій Миколайович</li>
    </ol>
    
  </div>
 </div>
</div>  
    </div>
  </div></section>
  <section>
          <h2>2004</h2>
          <div style=" width: 100%; height: 100%; text-align: center; border-bottom: solid; border-bottom-color: #072C53; padding-bottom:  30px;">
             <div><img src="img/Випуски/2004.jpg" class="minimized" id="im121" alt="" style=""></div>
    <div class="vypusk1" style="">
     
       <div>
          <div><div style="display: flex;justify-content: center;">
  <h3  style="width: 500px;font-size: 16px; height: auto; padding-bottom: 15px; padding-top: 15px;background-color: #ececec; "><b>Куратор групи:</b>Ойойко Ніна Миколаївна</h3>
  </div>
  <div>
    <ol class="pills" style="">
   <li>Атаманчук Ірина Валеріївна</li>
   <li>Верста Володимир Васильович</li>
   <li>Вільшанський Михайло Ярославович</li>
   <li>Гайдук Володимир Михайлович</li>
   <li>Гринчук Віталій Іванович</li>
   <li>Дідюк Любов Богданівна</li>
   <li>Дудяк Віктор Богданович</li>
   <li>Загурський В’ячеслав В’ячеславович</li>
   <li>Каплій Юрій Андрійович</li>
   <li>Карвацька Наталія Володимирівна</li>
   <li>Квасніцька Марія Андріївна</li>
   <li>Коробейнікова Альона Валеріївна</li>
   <li>Маргаль Олег Петрович</li>
   <li>Мацідонський Сергій Павлович</li>
   <li>Маскалик Ірина ҐВасилівна</li>
   <li>Наліжита Інна Леонідівна</li>
   <li>Оліяр Володимир Михайлович</li>
   <li>Пилипів Іван Зіновійович</li>
   <li>Присяжнюк Ольга Едуардівна</li>
   <li>Ситник Ольга Михайлівна</li>
   <li>Соболь Віктор Михайлович</li>
   <li>Фута Руслан Євгенович</li>
   <li>Хомів Богдан Павлович</li>
   <li>Шкарупа Олександр Васильович</li>
    </ol>
    
  </div>
</div>
</div>  
    </div>
  </div>
<div style=" width: 100%; height: 100%; text-align: center; border-bottom: solid; border-bottom-color: #072C53; padding-bottom:  30px; margin-top: 30px;">
              <div><img src="img/Випуски/2004_1.jpg" class="minimized" id="im121" alt="" style=""></div>
    <div class="vypusk1" style="">
     
       <div>
          <div><div style="display: flex;justify-content: center;">
  <h3  style="width: 500px;font-size: 16px; height: auto; padding-bottom: 15px; padding-top: 15px;background-color: #ececec; "><b>Куратор групи:</b>Дудар Ігор Антонович</h3>
  </div>
  <div>
    <ol class="pills" style="">
    <li>Балагур ПАвло Михайлович</li>
    <li>Бевська Ольга Романівна</li>
    <li>Безотосний Віталій Володимирович</li>
    <li>Боднар Анатолій Іванович</li>
    <li>Вакуленко Марина Вікторівна</li>
    <li>Валькова Олена Миколаївна</li>
    <li>Волощук Володимир Васильович</li>
    <li>Гончарик Іванна Богданівна</li>
    <li>Древняк Михайло Іванович</li>
    <li>Забавський Павло Михайлович</li>
    <li>Кандиловський Віталій Миколайович</li>
    <li>Каритун Людмила Вікторівна</li>
    <li>Кільчицька Галина Михайлівна </li>
    <li>Клюх Надія Михайлівна</li>
    <li>Кожухар Олена Миколаївна</li>
    <li>Корначевська Людмила Анатоліївна</li>
    <li>Крисак Ірина Іванівна</li>
    <li>Мацідон Любов Віталіївна</li>
    <li>Мельник Ольга Володимирівна</li>
    <li>Міщанчук Сергій Романович</li>
    <li>Осіпов Олександр Вікторович</li>
    <li>Папінко Віталій Орестович</li>
    <li>Посвистак Антон Бориславович</li>
    <li>Семенюк Дмитро Володимирович</li>
    <li>Солодка Галина Євгенівна</li>
    <li>Хоптинський Андрій Леонідович</li>
    </ol>
    
  </div>
</div>
</div>  
    </div>
  </div></section>

 <section>
          <h2>2003</h2>
          <div style=" width: 100%; height: 100%; text-align: center; border-bottom: solid; border-bottom-color: #072C53;padding-bottom:  30px;">
             <div><img src="img/Випуски/2003.jpg" class="minimized" id="im121" alt="" style=""></div>
    <div class="vypusk1" style="">
     
       <div>
          <div><div style="display: flex;justify-content: center;">
  <h3  style="width: 500px;font-size: 16px; height: auto; padding-bottom: 15px; padding-top: 15px;background-color: #ececec; "><b>Куратор групи:</b>Анісімов В. В.</h3>
  </div>
  <div>
    <ol class="pills" style="">
      <li>Баранчук Ігор Васильович</li>
      <li>Бортнік Наталія Михайлівна</li>
      <li>Ваверчак Оксана Володимирівна</li>
      <li>Венгер Володимир Ігорович</li>
      <li>Гайда Олеся Богданівна</li>
      <li>Галевська Лариса Петрівна</li>
      <li>Гниленький Віктор Васильович</li>
      <li>Горяк Андрій Миколайович</li>
      <li>Дарзулі Олександр Луареабович</li>
      <li>Іродюк Юлія Григорівна</li>
      <li>Коваленко Юлія Ігорівна</li>
      <li>Кривий Ігор Миколайович</li>
      <li>Крохмаль Тетяна Богданівна</li>
      <li>Ластовецький Анатолій Миколайович</li>
      <li>Липка Василь Богданович</li>
      <li>Яцик Галина Михайлівна</li>
      <li>Любас Людмила Миколаївна</li>
      <li>Мажуга Юрій Юрійович</li>
      <li>Паламарчук Олег Павлович</li>
      <li>Пипа Тетяна Володимирівна</li>
      <li>Пшик Світлана Володимирівна</li>
      <li>Хоптяр Тетяна Миколаївна </li>
      <li>Шевців Надія Степанівна</li>
      <li>Шевчук Вячеслав Петрович</li>
 
    </ol>
    
  </div>
</div>
</div>  
    </div>
  </div>
<div style=" width: 100%; height: 100%; text-align: center; border-bottom: solid; border-bottom-color: #072C53; padding-bottom:  30px; margin-top: 30px;">
           <div><img src="img/Випуски/2003_1.jpg" class="minimized" id="im121" alt="" style=""></div>
    <div class="vypusk1" style="">
     
       <div>
          <div><div style="display: flex;justify-content: center;">
  <h3  style="width: 500px;font-size: 16px; height: auto; padding-bottom: 15px; padding-top: 15px;background-color: #ececec; "><b>Куратор групи:</b>Барціховська Катерина Іванівна</h3>
  </div>
  <div>
    <ol class="pills" style="">
      <li>Анісімова Наталія Володимирівна Дмитрів Василь Романович</li>
      <li>Бородій Ілона Ігорівна</li>
      <li>Велиток Михайло Зорянович</li>
      <li>Волох Галина Тимофіївна</li>
      <li>Гнатишин Світлана Романівна</li>
      <li>Гнатюк Лілія Анатоліївна</li>
      <li>Дмитрів Василь Романович</li>
      <li>Дудченко Віта Олексіївна</li>
      <li>Журавель Роман Васильович</li>
      <li>Журавель Андрій Васильович</li>
      <li>Клизуб Юрій Яремович</li>
      <li>Кочерга Павло Олексійович</li>
      <li>Кочмар Павло Миколайович</li>
      <li>Кучер Максим Зіновійович</li>
      <li>Онищук Ірина Михайлівна</li>
      <li>Павлишин Ольга Миколаївна</li>
      <li>Повзанюк Сергій Орестович</li>
      <li>Принада Олександр Генадійович</li>
      <li>Саска Уляна Ярославівна</li>
      <li>Северин Олександр Олексійович</li>
      <li>Стиранка Галина Михайлівна</li>
      <li>Тофан Тетяна Ярославівна </li>
      <li>Шафранська Наталія Петрівна</li>
      <li>Двоян Вікторія Анатоліївна</li>
    </ol>
    
  </div>
 </div>
</div>  
    </div>
  </div></section>


 <section>
          <h2>2002</h2>
          <div style=" width: 100%; height: 100%; text-align: center; border-bottom: solid; border-bottom-color: #072C53; padding-bottom:  30px;">
              <div><img src="img/Випуски/2002.jpg" class="minimized" id="im121" alt="" style=""></div>
    <div class="vypusk1" style="">
     
       <div>
          <div><div style="display: flex;justify-content: center;">
  <h3  style="width: 500px;font-size: 16px; height: auto; padding-bottom: 15px; padding-top: 15px;background-color: #ececec; "><b>Куратор групи:</b>Оляніна Надія Володимирівна </h3>
  </div>
  <div>
    <ol class="pills" style="">
        <li>Басевич Тетяна Богданівна</li>
      <li >Білоус Наталія Євгенівна</li>
      <li>Болібрух Леся Анатоліївна</li>
      <li>Варшавський Олег Михайлович</li>
      <li>Войтюк Леонід Леонідович</li>
      <li>Туркот Ігор Михайлович</li>
      <li>Мацькова Тетяна Іванівна</li>
      <li>Миськів Володимир Зіновійсвич</li>
      <li>Мошенська Віра Іванівна</li>
      <li>Проказюк Леся Іванівна</li>
      <li>Решетнік Максим Сергійович</li>
      <li>Рибак Ігор Ярославович</li>
      <li>Скора Інна Михайлівна</li>
      <li>Сокальский Дмитро Юрійович</li>
      <li>Стаднік Наталія Анатоліївна</li>
      <li>Хрик Наталія Василівна</li>
      <li>Черкас Наталя Олександрівна</li>
      <li>Юрчук Сергій Олександрович</li>
      <li>Янюк Віталій Івановим</li>
 
    </ol>
    
  </div>
 </div>
</div>  
    </div>
  </div>
<div style=" width: 100%; height: 100%; text-align: center; border-bottom: solid; border-bottom-color: #072C53; padding-bottom:  30px; margin-top: 30px;">
            <div><img src="img/Випуски/2002_1.jpg" class="minimized" id="im121" alt="" style=""></div>
    <div class="vypusk1" style="">
     
       <div>
          <div><div style="display: flex;justify-content: center;">
  <h3  style="width: 500px;font-size: 16px; height: auto; padding-bottom: 15px; padding-top: 15px;background-color: #ececec; "><b>Куратор групи:</b>Пиріг О. О.</h3>
  </div>
  <div>
    <ol class="pills" style="">
<li>Бабій Михайло Іванович</li>
<li>Безкоровайний Володимир Іванович</li>
<li>Біленький Андрій Леонідович</li>
<li>Вальчишин Людмила Михайлівна</li>
<li>Вахрів Оксана Євгенівна</li>
<li>Войтюк Михайло Вікторович</li>
<li>Грицак Назар Васильович</li>
<li>Демчук Віктор Ігорович</li>
<li>Дутка Сергій Петрович</li>
<li>Заєць Роман Володимирович</li>
<li>Іванків Михайло Васильович</li>
<li>Контратева Олена Василівна</li>
<li>Крутельов Микола Олександрович</li>
<li>Марков Сергій Володимирович</li>
<li>Наконечний Андрій Теодорович</li>
<li>Пиріг Іван Іванович</li>
<li>Прок Василь Степанович</li>
<li>Пухальська Альона Вікентіївна</li>
<li>Решетило Олександр Володимирович</li>
<li>Фер’єв Андрій Володимирович</li>
<li>Хаурдінов Микола Володимирович</li>
<li>Шевченко Віта Станіславівна</li>
    </ol>
    
  </div>
 </div>
</div>  
    </div>
  </div></section>
 <section>
          <h2>2001</h2>
          <div style=" width: 100%; height: 100%; text-align: center; border-bottom: solid; border-bottom-color: #072C53; padding-bottom:  30px;">
             <div><img src="img/Випуски/2001.jpg" class="minimized" id="im121" alt="" style=""></div>
    <div class="vypusk1" style="">
     
       <div>
          <div><div style="display: flex;justify-content: center;">
  <h3  style="width: 500px;font-size: 16px; height: auto; padding-bottom: 15px; padding-top: 15px;background-color: #ececec; "><b>Куратор групи:</b>Москович Людмила Федорівна</h3>
  </div>
  <div>
    <ol class="pills" style="">
     <li>Балюк Ольга Михайлівна</li>
      <li>Деркач Тетяна Володимирівна</li>
      <li>Джума Андрій Григорович</li>
      <li>Дикунець Надія Олександрівна </li>
      <li>Казновецький Володимир Ярославович</li>
      <li>Конорська Іванна Степанівна</li>
      <li>Мазуркевич Володимир Володимирович</li>
      <li>Миц Оксана Олексіївна</li>
      <li>Найко Роман Васильович</li>
      <li>Тисничников Олександр Миколайович</li>
      <li>П’яток Любов  Петрівна</li>
      <li>Рибак Ольга Василівна</li>
      <li>Ступак Оксана Ігорівна</li>
      <li>Хілецька Руслана Володимирівна</li>
      <li>Ярема Наталія Володимирівна</li>
      <li>Єгорова Надія Олександрівна</li>
      <li>Павлюк Ольга Василівна </li>
    </ol>
  </div>
</div>
  </div>  
    </div>
    </div>
  </section>
</div>
</div>
</div>
  <div class="main1">
      
  </div>
</div>

</main>
<script>// Acc
$(document).on("click", ".naccs .menu div", function() {
  var numberIndex = $(this).index();

  if (!$(this).is("active")) {
    $(".naccs .menu div").removeClass("active");
    $(".naccs ul li").removeClass("active");

    $(this).addClass("active");
    $(".naccs ul").find("li:eq(" + numberIndex + ")").addClass("active");

    var listItemHeight = $(".naccs ul")
      .find("li:eq(" + numberIndex + ")")
      .innerHeight();
    $(".naccs ul").height(listItemHeight + "px");
  }
});</script>
</body>

  <?php include "footer.php"  ?>
</html>

