<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php
use Bitrix\Main\Localization\Loc;
?>
<div class="contact-block__form">
    <div class="container">
        <div class="title-big">Остались вопросы?</div>
        <p>Не нашли то, что искали? Оставьте свои данные и наши консультанты свяжутся с Вами!</p>
        <form action="#" class="callback-form">
            <input type="text" placeholder="<?php echo Loc::getMessage("FORM_NAME"); ?>">
            <input type="tel" placeholder="<?php echo Loc::getMessage("FORM_PHONE"); ?>">
            <button class="btn btn_white-b"><?php echo Loc::getMessage("FORM_SUBMIT"); ?></button>
        </form>
    </div>
</div>
