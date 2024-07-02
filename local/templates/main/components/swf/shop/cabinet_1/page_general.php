<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php
  global $USER;
?>
<div class="lk-content lk-content__flex">
  <div class="lk-user">
    <div class="lk-user__name">Тестов Тест Тестович</div>
    <div class="lk-user__line">
      <div class="lk-user__info">
        <div class="lk-user__label">e-mail</div>
        <div class="lk-user__text"></div>
      </div>
      <a href="/" class="lk-user__link cast_js_in_progress">редактировать</a>
    </div>
    <div class="lk-user__line">
      <div class="lk-user__info">
        <div class="lk-user__label">телефон</div>
        <div class="lk-user__text"><?php echo $USER->getLogin();?></div>
      </div>
      <a href="/" class="lk-user__link cast_js_in_progress">редактировать</a>
    </div>
  </div>
  <div class="lk-balls">
    <div class="lk-balls__label">Накопленные баллы</div>
    <div class="lk-balls__count">500 ₽</div>
    <div class="lk-balls__modal" data-modal-trigger="modal-how_work">
      Как это работает?
      <svg xmlns="http://www.w3.org/2000/svg" width="7" height="11" viewBox="0 0 7 11" fill="none">
        <path d="M1.03768 0.511153L5.99858 5.44975L1.03896 10.3896" stroke="white"/>
      </svg>
    </div>
  </div>
</div>