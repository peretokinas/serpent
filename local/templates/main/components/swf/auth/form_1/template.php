<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php
  use Bitrix\Main\Localization\Loc;
?>
<div class="auth-modal">
  <div class="auth-modal__close">
    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
      <path d="M1 1L9 9" stroke="#263740" stroke-linecap="round"/>
      <path d="M9 1L1 9" stroke="#263740" stroke-linecap="round"/>
    </svg>
  </div>
  <div class="auth-modal__entry">
    <div class="auth-modal__title"><?php echo Loc::getMessage("SHOP_AUTH_FORM_TITLE");?></div>
    <div class="auth-modal__tabs">
      <div class="auth-modal__tab active select_type_event_auth_action" data-id="modal-entry" type-event="enter"><?php echo Loc::getMessage("SHOP_AUTH_FORM_ENTER");?></div>
      <div class="auth-modal__tab select_type_event_auth_action" data-id="modal-registry" type-event="register"><?php echo Loc::getMessage("SHOP_AUTH_FORM_REGISTER");?></div>
      <div class="auth-modal__slider"></div>
    </div>
    <form method="POST">
      <input name="f_type_event" type="hidden" value="enter" />
      <input name="f_phone" type="tel" class="auth-input" placeholder="<?php echo Loc::getMessage("SHOP_AUTH_FORM_PHONE");?>">
      <button class="btn btn-entry auth_btn_send_auth_form_action"><?php echo Loc::getMessage("SHOP_AUTH_FORM_NEXT");?></button>
    </form>
  </div>
  <div class="auth-modal__two auth-modal__reg-code">
    <div class="auth-back">
      <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12" fill="none">
        <path d="M5.96037 10.9386L0.999471 5.99996L5.95909 1.06008" stroke="#263740"/>
      </svg>
      <?php echo Loc::getMessage("SHOP_AUTH_FORM_BACK");?>
    </div>
    <div class="auth-modal__title"><?php echo Loc::getMessage("SHOP_AUTH_FORM_ENTER");?></div>
    <div class="entry-mask">
      <div class="entry-mask__label">Входящий звонок</div>
      <div class="entry-mask__pic">
        <svg xmlns="http://www.w3.org/2000/svg" width="254" height="40" viewBox="0 0 254 40" fill="none">
          <path d="M8.31656 19.776V21.04H5.40456V23.904H4.06056V21.04H1.14856V19.776H4.06056V16.896H5.40456V19.776H8.31656ZM10.5128 14.8H18.9608V15.888L14.4328 26H12.7368L17.1688 16.192H12.0488V18.192H10.5128V14.8ZM28.9162 29.104C27.7002 27.168 27.0122 24.56 27.0122 21.616C27.0122 18.672 27.7002 16.032 28.9162 14.128H30.3722C29.0762 16.4 28.5162 18.816 28.5162 21.616C28.5162 24.416 29.0762 26.832 30.3722 29.104H28.9162ZM32.2268 14.8H34.0668L36.9948 18.896L39.9228 14.8H41.7948L38.0028 20.176L42.0988 26H40.2108L36.9948 21.536L33.7948 26H31.9548L36.0348 20.24L32.2268 14.8ZM43.4174 14.8H45.2574L48.1854 18.896L51.1134 14.8H52.9854L49.1934 20.176L53.2894 26H51.4014L48.1854 21.536L44.9854 26H43.1454L47.2254 20.24L43.4174 14.8ZM54.6081 14.8H56.4481L59.3761 18.896L62.3041 14.8H64.1761L60.3841 20.176L64.4801 26H62.5921L59.3761 21.536L56.1761 26H54.3361L58.4161 20.24L54.6081 14.8ZM67.5196 29.104H66.0636C67.3596 26.832 67.9356 24.416 67.9356 21.616C67.9356 18.816 67.3596 16.4 66.0636 14.128H67.5196C68.7516 16.032 69.4396 18.672 69.4396 21.616C69.4396 24.56 68.7516 27.168 67.5196 29.104ZM77.3987 14.8H79.2387L82.1667 18.896L85.0947 14.8H86.9667L83.1747 20.176L87.2707 26H85.3827L82.1667 21.536L78.9667 26H77.1267L81.2067 20.24L77.3987 14.8ZM88.5893 14.8H90.4293L93.3573 18.896L96.2853 14.8H98.1573L94.3653 20.176L98.4613 26H96.5733L93.3573 21.536L90.1573 26H88.3173L92.3973 20.24L88.5893 14.8ZM99.7799 14.8H101.62L104.548 18.896L107.476 14.8H109.348L105.556 20.176L109.652 26H107.764L104.548 21.536L101.348 26H99.5079L103.588 20.24L99.7799 14.8Z" fill="#263740" fill-opacity="0.5"/>
          <line x1="116" y1="19.5" x2="122" y2="19.5" stroke="#263740" stroke-opacity="0.3"/>
          <path d="M128 12C128 5.37258 133.373 0 140 0C146.627 0 152 5.37258 152 12V28C152 34.6274 146.627 40 140 40C133.373 40 128 34.6274 128 28V12Z" fill="white"/>
          <path d="M135.2 14.8H137.04L139.968 18.896L142.896 14.8H144.768L140.976 20.176L145.072 26H143.184L139.968 21.536L136.768 26H134.928L139.008 20.24L135.2 14.8Z" fill="#263740"/>
          <path d="M158 12C158 5.37258 163.373 0 170 0C176.627 0 182 5.37258 182 12V28C182 34.6274 176.627 40 170 40C163.373 40 158 34.6274 158 28V12Z" fill="white"/>
          <path d="M165.2 14.8H167.04L169.968 18.896L172.896 14.8H174.768L170.976 20.176L175.072 26H173.184L169.968 21.536L166.768 26H164.928L169.008 20.24L165.2 14.8Z" fill="#263740"/>
          <line x1="188" y1="19.5" x2="194" y2="19.5" stroke="#263740" stroke-opacity="0.3"/>
          <path d="M200 12C200 5.37258 205.373 0 212 0C218.627 0 224 5.37258 224 12V28C224 34.6274 218.627 40 212 40C205.373 40 200 34.6274 200 28V12Z" fill="white"/>
          <path d="M207.2 14.8H209.04L211.968 18.896L214.896 14.8H216.768L212.976 20.176L217.072 26H215.184L211.968 21.536L208.768 26H206.928L211.008 20.24L207.2 14.8Z" fill="#263740"/>
          <path d="M230 12C230 5.37258 235.373 0 242 0C248.627 0 254 5.37258 254 12V28C254 34.6274 248.627 40 242 40C235.373 40 230 34.6274 230 28V12Z" fill="white"/>
          <path d="M237.2 14.8H239.04L241.968 18.896L244.896 14.8H246.768L242.976 20.176L247.072 26H245.184L241.968 21.536L238.768 26H236.928L241.008 20.24L237.2 14.8Z" fill="#263740"/>
        </svg>
      </div>
    </div>
    <div class="condition-text">
      Введите последние 4 цифры
      номера телефона:
    </div>
    <form method="POST">
      <div class="code-input">
        <input name="f_code_1" type="text" placeholder="0">
        <input name="f_code_2" type="text" placeholder="0">
        <div class="code-input__delimiter">-</div>
        <input name="f_code_3" type="text" placeholder="0">
        <input name="f_code_4" type="text" placeholder="0">
      </div>
      <button class="btn btn-entry auth_btn_send_auth_code_action">Продолжить</button>
      <div class="code-timer">
        Повторно запросить код можно через: <span>1:30</span>
      </div>
    </form>
  </div>
  <!--<div class="auth-modal__two auth-modal__entry-code">
    <div class="auth-back">
      <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12" fill="none">
        <path d="M5.96037 10.9386L0.999471 5.99996L5.95909 1.06008" stroke="#263740"/>
      </svg>
      НАЗАД
    </div>
    <div class="auth-modal__title">Регистрация</div>
    <div class="entry-mask">
      <div class="entry-mask__label">Входящий звонок</div>
      <div class="entry-mask__pic">
        <svg xmlns="http://www.w3.org/2000/svg" width="254" height="40" viewBox="0 0 254 40" fill="none">
          <path d="M8.31656 19.776V21.04H5.40456V23.904H4.06056V21.04H1.14856V19.776H4.06056V16.896H5.40456V19.776H8.31656ZM10.5128 14.8H18.9608V15.888L14.4328 26H12.7368L17.1688 16.192H12.0488V18.192H10.5128V14.8ZM28.9162 29.104C27.7002 27.168 27.0122 24.56 27.0122 21.616C27.0122 18.672 27.7002 16.032 28.9162 14.128H30.3722C29.0762 16.4 28.5162 18.816 28.5162 21.616C28.5162 24.416 29.0762 26.832 30.3722 29.104H28.9162ZM32.2268 14.8H34.0668L36.9948 18.896L39.9228 14.8H41.7948L38.0028 20.176L42.0988 26H40.2108L36.9948 21.536L33.7948 26H31.9548L36.0348 20.24L32.2268 14.8ZM43.4174 14.8H45.2574L48.1854 18.896L51.1134 14.8H52.9854L49.1934 20.176L53.2894 26H51.4014L48.1854 21.536L44.9854 26H43.1454L47.2254 20.24L43.4174 14.8ZM54.6081 14.8H56.4481L59.3761 18.896L62.3041 14.8H64.1761L60.3841 20.176L64.4801 26H62.5921L59.3761 21.536L56.1761 26H54.3361L58.4161 20.24L54.6081 14.8ZM67.5196 29.104H66.0636C67.3596 26.832 67.9356 24.416 67.9356 21.616C67.9356 18.816 67.3596 16.4 66.0636 14.128H67.5196C68.7516 16.032 69.4396 18.672 69.4396 21.616C69.4396 24.56 68.7516 27.168 67.5196 29.104ZM77.3987 14.8H79.2387L82.1667 18.896L85.0947 14.8H86.9667L83.1747 20.176L87.2707 26H85.3827L82.1667 21.536L78.9667 26H77.1267L81.2067 20.24L77.3987 14.8ZM88.5893 14.8H90.4293L93.3573 18.896L96.2853 14.8H98.1573L94.3653 20.176L98.4613 26H96.5733L93.3573 21.536L90.1573 26H88.3173L92.3973 20.24L88.5893 14.8ZM99.7799 14.8H101.62L104.548 18.896L107.476 14.8H109.348L105.556 20.176L109.652 26H107.764L104.548 21.536L101.348 26H99.5079L103.588 20.24L99.7799 14.8Z" fill="#263740" fill-opacity="0.5"/>
          <line x1="116" y1="19.5" x2="122" y2="19.5" stroke="#263740" stroke-opacity="0.3"/>
          <path d="M128 12C128 5.37258 133.373 0 140 0C146.627 0 152 5.37258 152 12V28C152 34.6274 146.627 40 140 40C133.373 40 128 34.6274 128 28V12Z" fill="white"/>
          <path d="M135.2 14.8H137.04L139.968 18.896L142.896 14.8H144.768L140.976 20.176L145.072 26H143.184L139.968 21.536L136.768 26H134.928L139.008 20.24L135.2 14.8Z" fill="#263740"/>
          <path d="M158 12C158 5.37258 163.373 0 170 0C176.627 0 182 5.37258 182 12V28C182 34.6274 176.627 40 170 40C163.373 40 158 34.6274 158 28V12Z" fill="white"/>
          <path d="M165.2 14.8H167.04L169.968 18.896L172.896 14.8H174.768L170.976 20.176L175.072 26H173.184L169.968 21.536L166.768 26H164.928L169.008 20.24L165.2 14.8Z" fill="#263740"/>
          <line x1="188" y1="19.5" x2="194" y2="19.5" stroke="#263740" stroke-opacity="0.3"/>
          <path d="M200 12C200 5.37258 205.373 0 212 0C218.627 0 224 5.37258 224 12V28C224 34.6274 218.627 40 212 40C205.373 40 200 34.6274 200 28V12Z" fill="white"/>
          <path d="M207.2 14.8H209.04L211.968 18.896L214.896 14.8H216.768L212.976 20.176L217.072 26H215.184L211.968 21.536L208.768 26H206.928L211.008 20.24L207.2 14.8Z" fill="#263740"/>
          <path d="M230 12C230 5.37258 235.373 0 242 0C248.627 0 254 5.37258 254 12V28C254 34.6274 248.627 40 242 40C235.373 40 230 34.6274 230 28V12Z" fill="white"/>
          <path d="M237.2 14.8H239.04L241.968 18.896L244.896 14.8H246.768L242.976 20.176L247.072 26H245.184L241.968 21.536L238.768 26H236.928L241.008 20.24L237.2 14.8Z" fill="#263740"/>
        </svg>
      </div>
    </div>
    <div class="condition-text">
      Введите последние 4 цифры <br>
      номера телефона:
    </div>
    <form action="#">
      <div class="code-input">
        <input type="text" placeholder="0">
        <input type="text" placeholder="0">
        <div class="code-input__delimiter">-</div>
        <input type="text" placeholder="0">
        <input type="text" placeholder="0">
      </div>
      <button class="btn btn-entry">Продолжить</button>
      <div class="code-timer">
        Повторно запросить код можно через: <span>1:30</span>
      </div>
    </form>
  </div>-->
</div>