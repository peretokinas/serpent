<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="lk-content lk-content__flex lk-favorites">
  <?php
    //Секция каталога
    $APPLICATION->IncludeComponent(
      "swf:shop",
      "favorites_1",
      [
        "arSettings"=>$arParams["arSettings"],
        "IB_CAT"=>$arParams["arSettings"]["IB"]["1c_catalog"],
        "IB_SKU"=>$arParams["arSettings"]["IB"]["1c_offers"],
        "IB_REW"=>"",
        "SETT_COLOR_1"=>$arParams["arSettings"]["COLOR_1"],
        "SETT_SHOP_1"=>$arParams["arSettings"]["SHOP"],
        "GROUP_PODOB_1"=>"Y",
        "GROUP_PODOB_1_PROP"=>"TSVET",
        "GROUP_PODOB_1_RAZD"=>", ",
        "DETAIL_CODE"=>"",
        "SECTION_CODE_PRINT"=>$section_code,
        "SECTION_NAME_PRINT"=>$arParams["arSettings"]["SHOP"]["SECTION"][$section_code],
        "LINK_CATALOG"=>$arParams["arSettings"]["LINK_STATIC"]["catalog"],
        "CART_DATA"=>"N",
        "SLIDER_TITLE"=>"",
        "SLIDER_LIMIT"=>"",
        "ALL_CATALOG_CAST_TITLE"=>"",
        "BUTT_CENTER"=>"",
        "SEARCH_TEXT"=>"",
        "FAVORITES"=>"Y",
      ],
    );
  ?>
</div>