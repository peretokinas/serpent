<?php if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();?>
<?php
  CModule::IncludeModule('iblock');

  $arIdsAll=[];

  //Получаем все товары
  $arFilter=[
    'IBLOCK_ID'=>$arParams["IB_CAT"],
    'ACTIVE'=>'Y',
  ];
  
  $res=CIBlockElement::GetList(["SORT"=>"ASC"], $arFilter);
  $arRes=[];
  while ($ob=$res->GetNextElement()) {
    $arFields=$ob->GetFields();
    $arProps=$ob->GetProperties();
    
    $arRes[]=[
      "arFields"=>$arFields,
      "arProps"=>$arProps,
    ];
    
    $arIdsAll[]=$arFields["ID"];
  }
  
  $arProd=$arRes;
  
  //Получаем все ТП
  $arFilter=[
    'IBLOCK_ID'=>$arParams["IB_SKU"],
    'ACTIVE'=>'Y',
  ];
  
  $res=CIBlockElement::GetList(["SORT"=>"ASC"], $arFilter);
  $arRes=[];
  while ($ob=$res->GetNextElement()) {
    $arFields=$ob->GetFields();
    $arProps=$ob->GetProperties();
    
    $arRes[$arProps["CML2_LINK"]["VALUE"]][]=[
      "arFields"=>$arFields,
      "arProps"=>$arProps,
    ];
    
    $arIdsAll[]=$arFields["ID"];
  }
  
  $arSku=$arRes;
  
  //Получаем все цены для всех собранных id товаров и ТП
  $arPrice=[];
  $res=CPrice::GetList(
    [],
    [
      "PRODUCT_ID"=>$arIdsAll,
    ]
  );
  while ($ar_res=$res->Fetch()){
    $arPrice[$ar_res["PRODUCT_ID"]][$ar_res["CATALOG_GROUP_ID"]]=$ar_res;
  }
  
  //Клеим цены к массивам товаров
  foreach ($arProd AS $key=>$val) {
    $arProd[$key]["arPrice"]=[];
    $arProd[$key]["arPrice"]=$arPrice[$val["arFields"]["ID"]];
  }
  
  foreach ($arSku AS $key=>$val) {
    foreach ($val AS $key_1=>$val_1) {
      $arSku[$key][$key_1]["arPrice"]=[];
      $arSku[$key][$key_1]["arPrice"]=$arPrice[$val_1["arFields"]["ID"]];
    }
  }
  
  //Подгружаем предложения к товарам
  foreach ($arProd AS $key=>$val) {
    $arProd[$key]["OFFERS"]=[];
    $arProd[$key]["OFFERS"]=$arSku[$val["arFields"]["ID"]];
  }
  
  $arResult["ITEMS"]=$arProd;
  
  //Дергаем шаблон
  $this->IncludeComponentTemplate();
?>