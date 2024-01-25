<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php
  use Bitrix\Main\Localization\Loc;
?>
<div class="search-modal__column">
  <div class="search-modal__title">Популярные товары</div>
  <div class="search-modal__product">
    <?php foreach($arResult["ITEMS"] AS $key=>$val):?>
      <div class="search-modal__product-item">
        <a href="<?php echo $val["arFields"]["DETAIL_PAGE_URL"];?>" class="search-modal__product-item__pic">
          <?php if(isset($val["arPhotos"][0])):?>
            <img src="<?php echo $val["arPhotos"][0];?>" alt="">
          <?php else:?>
            <img src="<?php echo SITE_TEMPLATE_PATH."/img/no-photo.jpg";?>" alt="">
          <?php endif;?>
        </a>
        <div class="search-modal__product-item__content">
          <a href="<?php echo $val["arFields"]["DETAIL_PAGE_URL"];?>" class="search-modal__product-item__title"><?php echo $val["arFields"]["NAME"];?></a>
          <div class="search-modal__product-item__flex">
            <div class="search-modal__product-item__size">
              Размер: <span>XS - L</span>
            </div>
            <div class="search-modal__product-item__color">
              Цвет:
              <div class="product-slide__color">
                <?php 
                  $tmpArPodob_1=[];
                  $ex_name=explode($arParams["GROUP_PODOB_1_RAZD"],$val["arFields"]["NAME"]);
                  $tmpArPodob_1=$arResult["ITEMS_PODOB_1"][$ex_name[0]];
                  
                  $price=$val["arPrice"][$arParams["SETT_SHOP_1"]["BASE_PRICE_CODE"]]["PRICE"];
                  $price=swf_util::get_num_form_2($price);
                ?>
                <a class="cast_goto_link_podob_in_slider_2_action" href="<?php echo $val["arFields"]["DETAIL_PAGE_URL"];?>">
                  <div class="product-slide__color-item">
                    <input type="radio" name="color-9">
                    <span class="product-slide__color-circle active">
                      <span style="background: <?php echo $arParams["SETT_COLOR_1"][$val["arProps"][$arParams["GROUP_PODOB_1_PROP"]]["VALUE"]];?>"></span>
                    </span>
                  </div>
                </a>
                <?php foreach($tmpArPodob_1 AS $key_p1=>$val_p1):?>
                  <a class="cast_goto_link_podob_in_slider_2_action" href="<?php echo $val_p1["arFields"]["DETAIL_PAGE_URL"];?>">
                    <div class="product-slide__color-item">
                      <input type="radio" name="color-9">
                      <span class="product-slide__color-circle">
                        <span style="background: <?php echo $arParams["SETT_COLOR_1"][$val_p1["arProps"][$arParams["GROUP_PODOB_1_PROP"]]["VALUE"]];?>"></span>
                      </span>
                    </div>
                  </a>
                <?php endforeach;?>
              </div>
            </div>
          </div>
          <div class="search-modal__product-item__price">
            <span><?php echo $price;?></span> ₽
          </div>
        </div>
      </div>
    <?php endforeach;?>
  </div>
</div>