<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php
  use Bitrix\Main\Localization\Loc;
  
  $view=true;
  
  if (isset($arParams["SLIDER_MIN_PROD"])) {
    if ($arParams["SLIDER_MIN_PROD"]!="") {
      if (count($arResult["ITEMS"])<$arParams["SLIDER_MIN_PROD"]) {
        $view=false;
      }
    }
  }
?>
<?php if($view):?>
  <div class="section section-slider">
    <div class="section-top mb-30">
      <div class="section-top__flex">
        <div class="title"><?php echo $arParams["SLIDER_TITLE"];?></div>
      </div>
      <div class="section-top__event">
        <?php if($arParams["NO_LINK_CATALOG_TITLE"]!="Y"):?>
          <a href="<?php echo $arParams["LINK_CATALOG"]?><?php echo $arParams["SECTION_CODE_PRINT"]?>/<?php echo $arParams["SECTION_CODE_PRINT_PARAM"]?>" class="link-all">
            <?php
              $tmp_title_var="SHOP_SLIDER_1_ALL_CATALOG";
              if (isset($arParams["ALL_CATALOG_CAST_TITLE"])) {
                if ($arParams["ALL_CATALOG_CAST_TITLE"]!="") {
                  $tmp_title_var=$arParams["ALL_CATALOG_CAST_TITLE"];
                }
              }
            ?>
            <?php echo Loc::getMessage($tmp_title_var);?>
            <!-- <span class="link-all__icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="9" height="14" viewBox="0 0 9 14"
                 fill="none">
                <path d="M0.897903 13.0747L7.00006 6.99994L0.899482 0.923639" stroke="#263740"
                    stroke-width="2"/>
              </svg>
            </span> -->
          </a>
        <?php endif;?>
       
      </div>
    </div>
    <div class="slider-container">
      <div class="slider-product swiper">
        <div class="swiper-wrapper">
          <?php foreach($arResult["ITEMS"] AS $key=>$val):?>
            <div class="swiper-slide">
              <?php
                //Обнуляем подобные 1
                $tmpArPodob_1=[];
                $ex_name=explode($arParams["GROUP_PODOB_1_RAZD"],$val["arFields"]["NAME"]);
                $tmpArPodob_1=$arResult["ITEMS_PODOB_1"][$ex_name[0]];
                
                //Грузим карточку
                $APPLICATION->IncludeComponent(
                  "swf:catalog.card",
                  "card_1",
                  [
                    "BASKET"=>$arResult["BASKET"],
                    "arParamsDef"=>$arParams,
                    "tmpArPodob_1"=>$tmpArPodob_1,
                    "val"=>$val,
                    "HIDE_PODOB_CLASS"=>"",
                    "arResult"=>$arResult,
                  ],
                );
                
                //Грузим карточки подобных
                foreach ($tmpArPodob_1 AS $key_p1=>$val_p1) {
                  $APPLICATION->IncludeComponent(
                    "swf:catalog.card",
                    "card_1",
                    [
                      "BASKET"=>$arResult["BASKET"],
                      "arParamsDef"=>$arParams,
                      "tmpArPodob_1"=>$tmpArPodob_1,
                      "val"=>$val_p1,
                      "HIDE_PODOB_CLASS"=>"cast_hide",
                      "val_general"=>$val,
                      "arResult"=>$arResult,
                    ],
                  );
                }
              ?>
            </div>
          <?php endforeach;?>
          <?php if($arParams["BUTT_CENTER"]=="N"):?>
          <a href="<?php echo $arParams["LINK_CATALOG"]?><?php echo $arParams["SECTION_CODE_PRINT"]?>/<?php echo $arParams["SECTION_CODE_PRINT_PARAM_INT"]?>" class="swiper-slide swiper-slide__all-slider">
             <span class="link-circle">
              <span class="link-circle__text">
                <?php echo Loc::getMessage("SHOP_SLIDER_1_ALL_MODEL");?>
              </span>
              <span class="link-circle__arrow">
                 <svg xmlns="http://www.w3.org/2000/svg" width="32" height="31" viewBox="0 0 32 31"
                    fill="none">
                  <path d="M29.1713 16.0006L-0.000242786 16.002" stroke="#263740"
                      stroke-linejoin="round"></path>
                  <path d="M23.8977 9.88823L29.9998 15.963L23.8992 22.0393" stroke="#263740"
                      stroke-width="2"></path>
                </svg>
              </span>
            </span>
          </a>
          <?php endif;?>
        </div>
      </div>
    </div>
  </div>
<?php endif;?>