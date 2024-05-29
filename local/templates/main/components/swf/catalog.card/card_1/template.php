<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php 
  use Bitrix\Main\Localization\Loc;

  $tmpArPodob_1=$arParams["tmpArPodob_1"];
  $val=$arParams["val"];
  $val_general=$arParams["val_general"];
  if (!is_array($val_general)) {
    $val_general=[];
  }
  
  //Скрываем карточки подобных
  if ($arParams["HIDE_PODOB_CLASS"]!="") {
    $class_gen="product-slide ".$arParams["HIDE_PODOB_CLASS"];
  } else {
    $class_gen="product-slide";
  }
  
  //Проверяем наличие в избранных
  $fav_yes="";
  if (in_array($val["arFields"]["ID"], $arParams["arResult"]["FAVORITES"])) {
    $fav_yes="checked";
  }
  
?>
<div class="cast_card_<?php echo $val["arFields"]["ID"];?> <?php echo $class_gen;?>">
  <?php //echo $val["arProps"]["CML2_ARTICLE"]["VALUE"];?>
    <div class="product-slide__pic">
      <div class="product-favorite" id-prod="<?php echo $val["arFields"]["ID"];?>">
        <input class="product-favorite-checkbox <?php echo $fav_yes;?>" type="checkbox" <?php echo $fav_yes;?>>
        <svg class="product-favorite-svg" xmlns="http://www.w3.org/2000/svg" width="20" height="18"
           viewBox="0 0 20 18" fill="none">
          <path fill="transparent"
            d="M10.0002 17C10.0002 17 2.73044 11.2623 1.46561 8.69266C0.95956 7.77752 0.730235 6.73509 0.805508 5.69207C0.880781 4.64905 1.25742 3.65035 1.88963 2.81736V2.81736C2.25166 2.3275 2.70977 1.91661 3.23598 1.6098C3.76219 1.30299 4.34545 1.10671 4.95008 1.03296C5.55472 0.959204 6.16805 1.00954 6.75258 1.18086C7.33711 1.35218 7.88057 1.64089 8.34974 2.02936L10.0002 3.39577L11.6506 2.02936C12.1198 1.64089 12.6632 1.35218 13.2477 1.18086C13.8323 1.00954 14.4456 0.959204 15.0502 1.03296C15.6549 1.10671 16.2381 1.30299 16.7643 1.6098C17.2906 1.91661 17.7487 2.3275 18.1107 2.81736V2.81736C18.7429 3.65035 19.1195 4.64905 19.1948 5.69207C19.2701 6.73509 19.0408 7.77752 18.5347 8.69266C17.2691 11.2623 10.0002 17 10.0002 17Z"
            stroke="#263740" stroke-miterlimit="10"/>
        </svg>
      </div>
      <div class="product-slide__tags">
        <?php if($val["arProps"]["NOVINKA"]["VALUE"]=="true"):?>
          <div class="product-slide__tag product-slide__new">
            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
               xmlns="http://www.w3.org/2000/svg">
              <path d="M25.0011 1H49.0011V25C49.0011 38.2548 38.2559 49 25.0011 49C11.7463 49 1.0011 38.2548 1.0011 25C1.0011 11.7452 11.7463 1 25.0011 1Z"
                stroke-width="2"/>
            </svg>
            <span>new</span>
          </div>
        <?php endif;?>
        <?php if($val["arProps"]["KHIT"]["VALUE"]=="true"):?>
          <div class="product-slide__tag product-slide__hit">
            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
               xmlns="http://www.w3.org/2000/svg">
              <path d="M25.0011 1H49.0011V25C49.0011 38.2548 38.2559 49 25.0011 49C11.7463 49 1.0011 38.2548 1.0011 25C1.0011 11.7452 11.7463 1 25.0011 1Z"
                stroke-width="2"/>
            </svg>
            <span>Hit</span>
          </div>
        <?php endif;?>
        <?php if((int)$val["arProps"]["SKIDKA"]["VALUE"]>0):?>
          <div class="product-slide__tag product-slide__sale">
            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
               xmlns="http://www.w3.org/2000/svg">
              <path d="M25.0011 1H49.0011V25C49.0011 38.2548 38.2559 49 25.0011 49C11.7463 49 1.0011 38.2548 1.0011 25C1.0011 11.7452 11.7463 1 25.0011 1Z"
                stroke-width="2"/>
            </svg>
            <span>-<?php echo $val["arProps"]["SKIDKA"]["VALUE"];?>%</span>
          </div>
        <?php endif;?>
      </div>
      <div touch-event="<?php echo $arParams["arParamsDef"]["TOUCH_EVENT"];?>" class="product-slide__swiper swiper link_detail_on_click_photo_section_action" link-detail="<?php echo $val["arFields"]["DETAIL_PAGE_URL"];?>">
        <div class="swiper-wrapper">
          <?php if(count($val["arPhotos"])>0):?>
            <?php foreach($val["arPhotos"] AS $key_ph=>$val_ph):?>
              <div class="swiper-slide">
                <img src="<?php echo $val_ph;?>" alt="">
              </div>
            <?php endforeach;?>
          <?php else:?>
            <div class="swiper-slide">
              <img src="<?php echo SITE_TEMPLATE_PATH."/img/no-photo.jpg";?>" alt="">
            </div>
          <?php endif;?>
        </div>
        <!-- <div class="swiper-arrow swiper-arrow__left">
          <svg xmlns="http://www.w3.org/2000/svg" width="9" height="14"
             viewBox="0 0 9 14" fill="none">
            <path d="M0.897903 13.0747L7.00006 6.99994L0.899482 0.923639"
              stroke="#263740" stroke-width="2"></path>
          </svg>
        </div> -->
        <!-- <div class="swiper-arrow swiper-arrow__right">
          <svg xmlns="http://www.w3.org/2000/svg" width="9" height="14"
             viewBox="0 0 9 14" fill="none">
            <path d="M0.897903 13.0747L7.00006 6.99994L0.899482 0.923639"
              stroke="#263740" stroke-width="2"></path>
          </svg>
        </div> -->
        <!-- <div class="swiper-pagination"></div> -->
      </div>
    </div>

  <div class="product-slide__info">
    <div class="product-slide__content">
      <a href="<?php echo $val["arFields"]["DETAIL_PAGE_URL"];?>" class="product-slide__title"><?php echo $val["arFields"]["NAME"];?></a>
      <div class="product-slide__price">
        <span><?php echo swf_util::get_num_form_2($val["OFFERS"][0]["arPrice"][$arParams["arParamsDef"]["SETT_SHOP_1"]["BASE_PRICE_CODE"]]["PRICE"]);?></span>&nbsp;<?php echo Loc::getMessage("CURR_RUB");?>
      </div>
    </div>
  </div>
</div>