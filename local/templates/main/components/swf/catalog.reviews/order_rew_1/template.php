<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php
  use Bitrix\Main\Localization\Loc;
?>
<div class="modal" data-modal-name="modal-reviews-order-<?php echo $arParams["ORDER_ID"];?>" data-modal-dismiss>
  <div class="modal-dialog">
    <div class="modal-close modal-close-reviews" data-modal-dismiss>
      <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none"
         data-modal-dismiss>
        <path d="M1 1L9 9" stroke="#263740" data-modal-dismiss stroke-linecap="round"/>
        <path d="M9 1L1 9" stroke="#263740" data-modal-dismiss stroke-linecap="round"/>
      </svg>
    </div>
    <h2><?php echo Loc::getMessage("SHOP_DETAIL_REVIEWS_OSTAVIT");?></h2>
    <?php 
      $form_id="otziv_order_form_".swf_util::rand_hash_1();
    ?>
    <form id="<?php echo $form_id;?>" class="form-reviews">
      <input name="ORDER_ID" type="hidden" value="<?php echo $arParams["ORDER_ID"];?>" />
      <input name="f_name" type="text" placeholder="<?php echo Loc::getMessage("SHOP_DETAIL_REVIEWS_FORM_NAME");?>" />
      <textarea name="f_otziv" placeholder="<?php echo Loc::getMessage("SHOP_DETAIL_REVIEWS_FORM_OTZIV");?>"></textarea>
      <div class="product-label__modal"><?php echo Loc::getMessage("SHOP_DETAIL_REVIEWS_FORM_POSTAVIT_OCENKU");?></div>
      <div class="rating-area">
        <input type="radio" id="star-5" name="rating" value="5">
        <label for="star-5" title="Оценка «5»"></label>
        <input type="radio" id="star-4" name="rating" value="4">
        <label for="star-4" title="Оценка «4»"></label>
        <input type="radio" id="star-3" name="rating" value="3">
        <label for="star-3" title="Оценка «3»"></label>
        <input type="radio" id="star-2" name="rating" value="2">
        <label for="star-2" title="Оценка «2»"></label>
        <input type="radio" id="star-1" name="rating" value="1">
        <label for="star-1" title="Оценка «1»"></label>
      </div>
      <button form-id="<?php echo $form_id;?>" class="btn but_otziv_order_send_action"><?php echo Loc::getMessage("SHOP_DETAIL_REVIEWS_FORM_SUBMIT");?></button>
    </form>
  </div>
</div>