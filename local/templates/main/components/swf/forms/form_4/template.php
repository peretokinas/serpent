<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php
use Bitrix\Main\Localization\Loc;
?>
<div class="contact-block__form">
    <div class="container">

        <form id="callback-form" class="callback-form">
            <div>
                <p>Подпишись</p>
                <div class="title-big">Не пропускай новинки, акции и распродажи</div>
            </div>

            <input name="phone"  type="tel" placeholder="<?php echo Loc::getMessage("FORM_PHONE"); ?>">
            <button form-id="callback-form" class="btn btn_white-b question_btn_send_form_action"><?php echo Loc::getMessage("FORM_SUBMIT"); ?></button>
        </form>
    </div>
</div>
