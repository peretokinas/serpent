<?php if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();?>
<?php
  CModule::IncludeModule('iblock');
  
  //Получаем корзину текущего пользователя
  $basket=swf_catalog::get_cart();

  //Получаем все товары
  $arFilter=[
    'IBLOCK_ID'=>$arParams["IB_CAT"],
    'ACTIVE'=>'Y',
  ];
  
  $res=CIBlockElement::GetList(["SORT"=>"ASC"], $arFilter);
  $arRes=[];
  $arIdsAll=[];
  while ($ob=$res->GetNextElement()) {
    $arFields=$ob->GetFields();
    $arProps=$ob->GetProperties();
    
    //Ищем фотки
    $arPhotos=swf_catalog::get_photo_1($arProps["CML2_ARTICLE"]["VALUE"]);
    
    $arRes[]=[
      "arFields"=>$arFields,
      "arProps"=>$arProps,
      "arPhotos"=>$arPhotos,
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
  
  //Клеим цены к массиву товаров
  foreach ($arProd AS $key=>$val) {
    $arProd[$key]["arPrice"]=[];
    $arProd[$key]["arPrice"]=$arPrice[$val["arFields"]["ID"]];
  }
  //Клеим цены к массиву ТП
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
  
  $arResult_items=$arProd;
  
  $arResult["ITEMS"]=[];
  $arResult["ITEMS_PODOB_1"]=[];
  
  //Группируем подобные 1
  if ($arParams["GROUP_PODOB_1"]=="Y") {
    foreach ($arResult_items AS $key=>$val) {
      $name_ex=explode(", ",$val["arFields"]["NAME"]);
      if (isset($arResult["ITEMS_PODOB_1"][$name_ex[0]])) {
        //Если запрос только одного элемента - добавим его в основной массив
        if (isset($arParams["DETAIL_CODE"])) {
          if ($arParams["DETAIL_CODE"]==$val["arFields"]["CODE"]) {
            $arResult["ITEMS"][]=$val;
          } else {
            $arResult["ITEMS_PODOB_1"][$name_ex[0]][]=$val;
          }
        }
      } else {
        $arResult["ITEMS"][]=$val;
        $arResult["ITEMS_PODOB_1"][$name_ex[0]]=[];
        //Если запрос только одного элемента и код не равен текущему - добавим его в массив подобных
        if (isset($arParams["DETAIL_CODE"])) {
          if ($arParams["DETAIL_CODE"]!=$val["arFields"]["CODE"] AND $arParams["DETAIL_CODE"]!="") {
            $arResult["ITEMS_PODOB_1"][$name_ex[0]][]=$val;
          }
        }
      }
    }
  } else {
    $arResult["ITEMS"]=$arResult_items;
  }
  
  //Если есть лимит слайдера - оставляем только это кол-во в массиве ITEMS
  if (isset($arParams["SLIDER_LIMIT"])) {
    if ($arParams["SLIDER_LIMIT"]!="") {
      $arItemsNew=[];
      for ($i=0;$i<(int)$arParams["SLIDER_LIMIT"];$i++) {
        $arItemsNew[]=$arResult["ITEMS"][$i];
      }
      $arResult["ITEMS"]=$arItemsNew;
    }
  }
  
  //Если установлен детальный код - оставим в массиве только его
  if (isset($arParams["DETAIL_CODE"])) {
    if ($arParams["DETAIL_CODE"]!="") {
      $arItemsNew=[];
      for ($i=0;$i<count($arResult["ITEMS"]);$i++) {
        if ($arResult["ITEMS"][$i]["arFields"]["CODE"]==$arParams["DETAIL_CODE"]) {
          $arItemsNew[]=$arResult["ITEMS"][$i];
        }
      }
      if (count($arItemsNew)==0) {
        
      }
      $arResult["ITEMS"]=$arItemsNew;
    }
  }
  
  //Если установлен параметр "Корзина" - установим массив ITEMS ключи в виде ID прод
  if ($arParams["CART_DATA"]=="Y") {
    $arItemsNew=[];
    //Добавим массив товаров
    foreach ($arResult["ITEMS"] AS $key=>$val) {
      $arItemsNew[$val["arFields"]["ID"]]=$val;
    }
    //Добавим массив предложений
    foreach ($arSku AS $key=>$val) {
      foreach ($val AS $key_1=>$val_1) {
        $arItemsNew[$val_1["arFields"]["ID"]]=$val_1;
      }
    }
    $arResult["ITEMS"]=$arItemsNew;
  }
  
  $arResult["BASKET"]=$basket;
  
  //Дергаем шаблон
  $this->IncludeComponentTemplate();
?>