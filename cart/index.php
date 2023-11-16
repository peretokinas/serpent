<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>
<?php
  //Корзина
  $APPLICATION->IncludeComponent(
    "swf:shop",
    "cart_1",
    [
      "arSettings"=>$arSettings,
      "IB_CAT"=>$arSettings["IB"]["1c_catalog"],
      "IB_SKU"=>$arSettings["IB"]["1c_offers"],
      "IB_REW"=>"",
      "SETT_COLOR_1"=>$arSettings["COLOR_1"],
      "SETT_SHOP_1"=>$arSettings["SHOP"],
      "GROUP_PODOB_1"=>"N",
      "GROUP_PODOB_1_PROP"=>"TSVET",
      "GROUP_PODOB_1_RAZD"=>", ",
      "DETAIL_CODE"=>"",
      "SECTION_CODE_PRINT"=>"kupalniki",
      "SECTION_NAME_PRINT"=>$arSettings["SHOP"]["SECTION"]["kupalniki"],
      "LINK_CATALOG"=>$arSettings["LINK_STATIC"]["catalog"],
      "CART_DATA"=>"Y",
      "SLIDER_TITLE"=>"",
      "SLIDER_LIMIT"=>"",
      "ALL_CATALOG_CAST_TITLE"=>"",
      "BUTT_CENTER"=>"",
    ],
  );
?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>