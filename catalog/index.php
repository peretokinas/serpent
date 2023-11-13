<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>
<?php
  $section_code=$_GET["SECTION_CODE"];

  $APPLICATION->IncludeComponent(
    "swf:catalog",
    "section_1",
    [
      "IB_CAT"=>$arSettings["IB"]["1c_catalog"],
      "IB_SKU"=>$arSettings["IB"]["1c_offers"],
      "SETT_COLOR_1"=>$arSettings["COLOR_1"],
      "SETT_SHOP"=>$arSettings["SHOP"],
    ],
  );
?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>