<?php
  require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
  
  use Bitrix\Main\Localization\Loc;
  
  CModule::IncludeModule("iblock");
  CModule::IncludeModule("catalog");
  
  //Каталог
  
  //Добавление товара в корзину
  if ($_POST["type"]=="add_to_cart") {
    
    //Получаем ценники
    $arPrice=[];
    $res=CPrice::GetList(
      [],
      [
        "PRODUCT_ID"=>$_POST["prod_id"],
      ]
    );
    while ($ar_res=$res->Fetch()){
      $arPrice[$ar_res["PRODUCT_ID"]][$ar_res["CATALOG_GROUP_ID"]]=$ar_res;
    }
    
    $arFields=[
      "PRODUCT_ID"=>$_POST["prod_id"],
      "PRICE"=>$arPrice[$_POST["prod_id"]][$arSettings["SHOP"]["BASE_PRICE_CODE"]]["PRICE"],
      "CURRENCY"=>$arSettings["SHOP"]["BASE_CURR_CODE"],
      "QUANTITY"=>$_POST["prod_qua"],
      "LID"=>"s1",
      "NAME"=>"",
      "MODULE"=>"catalog",
    ];
    
    $arFields["PROPS"]=[];

    CSaleBasket::Add($arFields);
  }
?>