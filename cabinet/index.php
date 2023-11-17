<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>
<?php
  $section_code=$_GET["SECTION_CODE"];
  
  if ($section_code=="") {
    header("Location: page_general/");
  }

    //Секция каталога
    $APPLICATION->IncludeComponent(
      "swf:shop",
      "cabinet_1",
      [
        "arSettings"=>$arSettings,
        "IB_CAT"=>$arSettings["IB"]["1c_catalog"],
        "IB_SKU"=>$arSettings["IB"]["1c_offers"],
        "IB_REW"=>"",
        "SETT_COLOR_1"=>$arSettings["COLOR_1"],
        "SETT_SHOP_1"=>$arSettings["SHOP"],
        "GROUP_PODOB_1"=>"Y",
        "GROUP_PODOB_1_PROP"=>"TSVET",
        "GROUP_PODOB_1_RAZD"=>", ",
        "DETAIL_CODE"=>"",
        "SECTION_CODE_PRINT"=>$section_code,
        "SECTION_NAME_PRINT"=>$arSettings["SHOP"]["SECTION"][$section_code],
        "LINK_CATALOG"=>$arSettings["LINK_STATIC"]["catalog"],
        "CART_DATA"=>"N",
        "SLIDER_TITLE"=>"",
        "SLIDER_LIMIT"=>"",
        "ALL_CATALOG_CAST_TITLE"=>"",
        "BUTT_CENTER"=>"",
      ],
    );
?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>