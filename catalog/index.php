<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>
<?php
  $section_code=$_GET["SECTION_CODE"];
  $element_code=$_GET["ELEMENT_CODE"];
  
  if ($element_code!="") {
    //Детальная страница товара
    $APPLICATION->IncludeComponent(
      "swf:catalog",
      "detail_1",
      [
        "IB_CAT"=>$arSettings["IB"]["1c_catalog"],
        "IB_SKU"=>$arSettings["IB"]["1c_offers"],
        "IB_REW"=>$arSettings["IB"]["reviews_prod"],
        "SETT_COLOR_1"=>$arSettings["COLOR_1"],
        "SETT_SHOP_1"=>$arSettings["SHOP"],
        "GROUP_PODOB_1"=>"Y",
        "GROUP_PODOB_1_PROP"=>"TSVET",
        "GROUP_PODOB_1_RAZD"=>", ",
        "DETAIL_CODE"=>$element_code,
        "SECTION_CODE_PRINT"=>$section_code,
        "SECTION_NAME_PRINT"=>$arSettings["SHOP"]["SECTION"][$section_code],
        "LINK_CATALOG"=>$arSettings["LINK_STATIC"]["catalog"],
      ],
    );
  } else {
    //Секция каталога
    $APPLICATION->IncludeComponent(
      "swf:catalog",
      "section_1",
      [
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
      ],
    );
  }
?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>