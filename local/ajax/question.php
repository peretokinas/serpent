<?php
  require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
  
  use Bitrix\Main\Localization\Loc;
  
  CModule::IncludeModule("iblock");

  if (trim($_POST["name"])!="" AND trim($_POST["phone"])!="") {
    //Создаем элемент в инфоблоке
    $el=new CIBlockElement;
    $PROP=array();
    $PROP[86]=trim($_POST['name']);
    $PROP[87]=trim($_POST['phone']);
    $arLoadProductArray = Array(
      "IBLOCK_SECTION_ID" => false,
      "IBLOCK_ID"      => $arSettings["IB"]["callback"],
      "PROPERTY_VALUES"=> $PROP,
      "NAME"           => "Обратный звонок",
      "ACTIVE"         => "Y",
    );
    $id=$el->Add($arLoadProductArray);

    $result['success'] = true;
    $result["text"]=Loc::getMessage("SHOP_DETAIL_REVIEWS_SEND_OK");
  }
  else
  {
    $result['success'] = false;
    $result["text"]=Loc::getMessage("SHOP_DETAIL_REVIEWS_SEND_NO_OK");
  }
    
  $result_js=json_encode($result);
  echo $result_js;
?>