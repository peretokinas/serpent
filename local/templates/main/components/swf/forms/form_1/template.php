<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php
use Bitrix\Main\Localization\Loc;
?>
<div class="contact-block__form">
    <div class="container">
        <div class="title-big">Остались вопросы?</div>
        <p>Не нашли то, что искали? Оставьте свои данные и наши консультанты свяжутся с Вами!</p>
        <form id="callback-form" class="callback-form">
            <input name="name" type="text" placeholder="<?php echo Loc::getMessage("FORM_NAME"); ?>">
            <input name="phone"  type="tel" placeholder="<?php echo Loc::getMessage("FORM_PHONE"); ?>">
            <button form-id="callback-form" class="btn btn_white-b question_btn_send_form_action"><?php echo Loc::getMessage("FORM_SUBMIT"); ?></button>
        </form>
    </div>
</div>
