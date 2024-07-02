<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php
use Bitrix\Main\Localization\Loc;
?>
<div class="callback">
    <h2>Не нашли то, что искали?</h2>
    <div class="block-text">
        Не нашли то, что искали? Оставьте свои данные и наши консультанты свяжутся с Вами!
    </div>
    <form action="#" class="callback-form">
        <input name="name" type="text" placeholder="<?php echo Loc::getMessage("FORM_NAME"); ?>">
        <input name="phone"  type="tel" placeholder="<?php echo Loc::getMessage("FORM_PHONE"); ?>">
        <button form-id="callback-form"  class="btn btn_white  question_btn_send_form_action">Отправить</button>
    </form>
</div>
