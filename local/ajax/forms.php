<?php
  require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
  
  use Bitrix\Main\Localization\Loc;
  
  CModule::IncludeModule("iblock");
  
  //Приемник форм
  
  //Отправка отзыва к заказу
  if ($_POST["type"]=="send_review_order") {
    $error=0;
    if (trim($_POST["f_name"])=="" OR trim($_POST["f_otziv"])=="") {
      $error=1;
    }
    
    if ($error==0) {
      $result["status"]="1";
      $result["text"]=Loc::getMessage("SHOP_DETAIL_REVIEWS_SEND_OK");
      
      //Создаем элемент в инфоблоке
      $el=new CIBlockElement;
      $PROP=array();
      $PROP[79]=$_POST["ORDER_ID"];
      $PROP[81]=trim($_POST["f_name"]);
      $PROP[82]=trim($_POST["f_otziv"]);
      $PROP[83]=rand(1,5);
      $PROP[80]=61;
      $arLoadProductArray = Array(
        "IBLOCK_SECTION_ID" => false,
        "IBLOCK_ID"      => $arSettings["IB"]["reviews_order"],
        "PROPERTY_VALUES"=> $PROP,
        "NAME"           => "Отзыв к заказу",
        "ACTIVE"         => "Y",
        );
      $id=$el->Add($arLoadProductArray);
      
    } else {
      $result["status"]="0";
      $result["text"]=Loc::getMessage("SHOP_DETAIL_REVIEWS_SEND_NO_OK");
    }
    
    $result_js=json_encode($result);
    
    echo $result_js;
  }
  
  //Отправка отзыва к товару
  if ($_POST["type"]=="send_review_prod") {
    $error=0;
    if (trim($_POST["f_name"])=="" OR trim($_POST["f_otziv"])=="") {
      $error=1;
    }
    
    if ($error==0) {
      $result["status"]="1";
      $result["text"]=Loc::getMessage("SHOP_DETAIL_REVIEWS_SEND_OK");
      
      //Создаем элемент в инфоблоке
      $el=new CIBlockElement;
      $PROP=array();
      $PROP[70]=$_POST["PROD_ID"];
      $PROP[71]=trim($_POST["f_name"]);
      $PROP[72]=trim($_POST["f_otziv"]);
      $PROP[73]=rand(1,5);
      $PROP[74]=58;
      $arLoadProductArray = Array(
        "IBLOCK_SECTION_ID" => false,
        "IBLOCK_ID"      => $arSettings["IB"]["reviews_prod"],
        "PROPERTY_VALUES"=> $PROP,
        "NAME"           => "Отзыв к товару",
        "ACTIVE"         => "Y",
        );
      $id=$el->Add($arLoadProductArray);
      
    } else {
      $result["status"]="0";
      $result["text"]=Loc::getMessage("SHOP_DETAIL_REVIEWS_SEND_NO_OK");
    }
    
    $result_js=json_encode($result);
    
    echo $result_js;
  }
?>