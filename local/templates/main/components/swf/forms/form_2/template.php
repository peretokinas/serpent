<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php
use Bitrix\Main\Localization\Loc;
?>
<div class="modal" data-modal-name="modal-callback" data-modal-dismiss>
    <div class="modal-dialog">
        <div class="modal-close" data-modal-dismiss>
            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none"
                 data-modal-dismiss>
                <path d="M1 1L9 9" stroke="#263740" data-modal-dismiss stroke-linecap="round"/>
                <path d="M9 1L1 9" stroke="#263740" data-modal-dismiss stroke-linecap="round"/>
            </svg>
        </div>
        <h2>Остались вопросы?</h2>
        <form id="callback-form" class="form-reviews">
            <input name="name" type="text" placeholder="<?php echo Loc::getMessage("FORM_NAME"); ?>">
            <input name="phone"  type="tel" placeholder="<?php echo Loc::getMessage("FORM_PHONE"); ?>">
            <button form-id="callback-form" class="btn question_btn_send_form_action"><?php echo Loc::getMessage("FORM_SUBMIT"); ?></button>
        </form>
    </div>
</div>