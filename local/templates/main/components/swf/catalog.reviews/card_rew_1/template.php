<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php
  use Bitrix\Main\Localization\Loc;
?>
<div class="reviews-container">
  <div class="reviews-head">
    <div class="title-34">
      <?php echo Loc::getMessage("SHOP_DETAIL_REVIEWS");?>
    </div>
    <div class="reviews-event">
      <div class="reviews-rating">
        <?php
        if(count($arResult["ITEMS"])>0)
        {
          echo $arResult["SROC"];
          $tag = "a";
        }
        else
        {
          $tag = "div";
        }

        ?>
      </div>
      <div class="reviews-stars">
        <?php
          $tmp_ex=explode(".",$arResult["SROC"]);
        ?>
        <?php for($i=1;$i<=(int)$tmp_ex[0];$i++):?>
          <img src="<?php echo SITE_TEMPLATE_PATH;?>/img/rating.png" alt="">
        <?php endfor;?>
      </div>
      <<?php echo $tag;?> href="" class="reviews-link">
        <?php
          $arNames=[
            Loc::getMessage("SHOP_DETAIL_REVIEWS_SKLON_1"),
            Loc::getMessage("SHOP_DETAIL_REVIEWS_SKLON_2"),
            Loc::getMessage("SHOP_DETAIL_REVIEWS_SKLON_3"),
          ];
        ?>
        <?php echo swf_util::num_word(count($arResult["ITEMS"]),$arNames);?>
      </<?php echo $tag;?>>
      <a href="#" class="btn" data-modal-trigger="modal-reviews">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 18 16"
           fill="none">
          <path d="M11.2637 1.01904H4.69796C2.4339 1.01904 1 2.60388 1 4.86794V11.0564C1 13.3204 2.4339 14.9807 4.69796 14.9807H16.2446C18.5087 14.9807 14.9617 13.3959 14.9617 11.0564V4.86794C14.9617 2.60388 13.5278 1.01904 11.2637 1.01904Z"
              stroke="white" stroke-miterlimit="10" stroke-linecap="round"
              stroke-linejoin="round"/>
          <path d="M4.62242 8.36789C4.37028 8.36789 4.2168 8.2144 4.2168 7.96226C4.2168 7.71013 4.37028 7.55664 4.62242 7.55664C4.87456 7.55664 5.02804 7.71013 5.02804 7.96226C5.02804 8.18786 4.8264 8.36789 4.62242 8.36789Z"
              fill="white" stroke="white"/>
          <path d="M8.01793 8.36789C7.76579 8.36789 7.6123 8.2144 7.6123 7.96226C7.6123 7.71013 7.76579 7.55664 8.01793 7.55664C8.27007 7.55664 8.42355 7.71013 8.42355 7.96226C8.42355 8.18786 8.22191 8.36789 8.01793 8.36789Z"
              fill="white" stroke="white"/>
          <path d="M11.3392 8.36789C11.0871 8.36789 10.9336 8.2144 10.9336 7.96226C10.9336 7.71013 11.0871 7.55664 11.3392 7.55664C11.5914 7.55664 11.7448 7.71013 11.7448 7.96226C11.7448 8.2144 11.5914 8.36789 11.3392 8.36789Z"
              fill="white" stroke="white"/>
        </svg>
        <?php echo Loc::getMessage("SHOP_DETAIL_REVIEWS_OSTAVIT");?>
      </a>
    </div>
  </div>
  <a href="#" class="btn btn-mobile-block" data-modal-trigger="modal-reviews">
    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 18 16" fill="none">
      <path d="M11.2637 1.01904H4.69796C2.4339 1.01904 1 2.60388 1 4.86794V11.0564C1 13.3204 2.4339 14.9807 4.69796 14.9807H16.2446C18.5087 14.9807 14.9617 13.3959 14.9617 11.0564V4.86794C14.9617 2.60388 13.5278 1.01904 11.2637 1.01904Z"
          stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M4.62242 8.36789C4.37028 8.36789 4.2168 8.2144 4.2168 7.96226C4.2168 7.71013 4.37028 7.55664 4.62242 7.55664C4.87456 7.55664 5.02804 7.71013 5.02804 7.96226C5.02804 8.18786 4.8264 8.36789 4.62242 8.36789Z"
          fill="white" stroke="white"/>
      <path d="M8.01793 8.36789C7.76579 8.36789 7.6123 8.2144 7.6123 7.96226C7.6123 7.71013 7.76579 7.55664 8.01793 7.55664C8.27007 7.55664 8.42355 7.71013 8.42355 7.96226C8.42355 8.18786 8.22191 8.36789 8.01793 8.36789Z"
          fill="white" stroke="white"/>
      <path d="M11.3392 8.36789C11.0871 8.36789 10.9336 8.2144 10.9336 7.96226C10.9336 7.71013 11.0871 7.55664 11.3392 7.55664C11.5914 7.55664 11.7448 7.71013 11.7448 7.96226C11.7448 8.2144 11.5914 8.36789 11.3392 8.36789Z"
          fill="white" stroke="white"/>
    </svg>
    <?php echo Loc::getMessage("SHOP_DETAIL_REVIEWS_OSTAVIT");?>
  </a>
  <?php foreach($arResult["ITEMS"] AS $key=>$val):?>
    <div class="reviews-item">
      <div class="reviews-item__head">
        <div class="reviews-item__name"><?php echo $val["arProps"]["USER_NAME"]["VALUE"];?></div>
        <div class="reviews-item__right">
          <?php
            $tmp_ex=explode(" ",$val["arFields"]["DATE_CREATE"]);
            $date_print=$tmp_ex[0];
            
            $oc_ex=explode(".",$val["arProps"]["USER_OCENKA"]["VALUE"]);
          ?>
          <div class="reviews-item__date"><?php echo $date_print;?></div>
          <div class="reviews-stars">
            <?php for($i=1;$i<=(int)$oc_ex[0];$i++):?>
              <img src="<?php echo SITE_TEMPLATE_PATH;?>/img/rating.png" alt="">
            <?php endfor;?>
          </div>
        </div>
      </div>
      <div class="reviews-item__description">
        <?php echo $val["arProps"]["USER_OTZIV"]["VALUE"]["TEXT"];?>
      </div>
    </div>
  <?php endforeach;?>
</div>
<div class="modal" data-modal-name="modal-reviews" data-modal-dismiss>
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
      $form_id="otziv_prod_form_".swf_util::rand_hash_1();
    ?>
    <form id="<?php echo $form_id;?>" class="form-reviews">
      <input name="PROD_ID" type="hidden" value="<?php echo $arParams["PROD_ID"];?>" />
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
      <button form-id="<?php echo $form_id;?>" class="btn but_otziv_prod_send_action"><?php echo Loc::getMessage("SHOP_DETAIL_REVIEWS_FORM_SUBMIT");?></button>
    </form>
  </div>
</div>