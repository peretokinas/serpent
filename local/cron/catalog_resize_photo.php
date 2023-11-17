<?php
  require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
  
  unset($tmpArParam);
  $tmpArParam=[
    "IB_CAT"=>$arSettings["IB"]["1c_catalog"],
    "IB_SKU"=>$arSettings["IB"]["1c_offers"],
  ];
  
  swf_catalog::resize_photo($tmpArParam);
?>