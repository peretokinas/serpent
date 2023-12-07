<?php if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();?>
<?php
  CModule::IncludeModule('iblock');
  
  global $USER;
  
  //Получаем корзину текущего пользователя
  $basket=swf_catalog::get_cart();
  
  //Клеим корзину в результат
  $arResult["BASKET"]=$basket;
  
  //Получаем избранные товары
  $arFilter=[
    'IBLOCK_ID'=>$arParams["arSettings"]["IB"]["favorites"],
    'PROPERTY_ID_USER'=>$USER->GetID(),
    'ACTIVE'=>'Y',
  ];
  
  $arIdsFav=[];
  $res=CIBlockElement::GetList(["ID"=>"DESC"], $arFilter);
  while ($ob=$res->GetNextElement()) {
    $arFields=$ob->GetFields();
    $arProps=$ob->GetProperties();
    
    $arIdsFav[]=$arProps["ID_PROD"]["VALUE"];
  }
  
  //Возвращаем в результате
  $arResult["FAVORITES"]=$arIdsFav;
  
  //Клеим в результат заказы текущего пользователя при наличии спец опции
  if ($arParams["GET_ORDERS_USER_NOW"]=="Y") {
    unset($tmpArParam_1);
    $tmpArParam_1["USER_ID"]=$USER->GetID();
    $tmpArParam_1["SORT"]=[
      "DATE_INSERT"=>"DESC",
    ];
    $arResult["ORDER_USER_LIST"]=swf_catalog::get_order_user($tmpArParam_1);
  }
  
  //Проверяем наличие поискового текста
  $search_text="";
  if (isset($arParams["SEARCH_TEXT"])) {
    if ($arParams["SEARCH_TEXT"]!="") {
      $search_text=trim($arParams["SEARCH_TEXT"]);
    }
  }
  
  //Переведем в транслит
  $search_text_translit=swf_util::translit($search_text);
  
  //Если текст русский - ищем по корню
  if (swf_util::isRus($search_text)){
    $stemmer=new LinguaStemRu();
    $search_text=$stemmer->stem_word($search_text);
  }
  
  //Получаем все товары
  $arFilter=[
    'IBLOCK_ID'=>$arParams["IB_CAT"],
    'ACTIVE'=>'Y',
  ];
  
  //Если только избранные, то фильтруем по избранным
  if ($arParams["FAVORITES"]=="Y") {
    $arFilter["ID"]=$arResult["FAVORITES"];
  }
  
  //Клеим поисковой параметр
  if ($search_text!="") {
    $arFilter[]=[
      'LOGIC'=>'OR',
      'NAME'=>"%".$search_text."%",
      'NAME'=>"%".$search_text_translit."%",
    ];
  }
  
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
  
  //Сортируем прдложения по "весу размера"
  foreach ($arRes AS $key=>$val) {
    for ($i=0;$i<count($val)-1;$i++) {
      for ($j=$i+1;$j<count($val);$j++) {
        $ves_1=$arParams["arSettings"]["SIZE_WEIGHT"][$val[$i]["arProps"][$arParams["arSettings"]["SIZE_PROP_CODE"]]["VALUE"]];
        
        $ves_2=$arParams["arSettings"]["SIZE_WEIGHT"][$val[$j]["arProps"][$arParams["arSettings"]["SIZE_PROP_CODE"]]["VALUE"]];
        
        if ($ves_1>$ves_2) {
          $buf=$arRes[$key][$i];
          $arRes[$key][$i]=$arRes[$key][$j];
          $arRes[$key][$j]=$buf;
        }
      }
    }
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
  
  //Получаем способы доставки
  $arResult["DELIV"]=[];
  $res=\Bitrix\Sale\Delivery\Services\Table::getList(
    [
      'filter'=>['ACTIVE'=>'Y'],
    ],
  );
  while($arRes=$res->fetch()){
    $arResult["DELIV"][$arRes["ID"]]=$arRes;
  }
  
  //Получаем платежные системы
  $arResult["PAY"]=[];
  $res=\Bitrix\Sale\PaySystem\Manager::getList(
    [
      'filter'=>['ACTIVE'=>'Y'],
    ],
  );
  while($arRes=$res->fetch()){
    $arResult["PAY"][$arRes["ID"]]=$arRes;
  }
  
  //Собираем дополнительный массив ITEMS с индекс=id элемента, при наличии спец опции
  $arResult["ITEMS_ON_ID"]=[];
  if ($arParams["ITEMS_ON_ID_PROD"]=="Y") {
    foreach ($arResult["ITEMS"] AS $key=>$val) {
      $arResult["ITEMS_ON_ID"][$val["arFields"]["ID"]]=$val;
      foreach ($val["OFFERS"] AS $key_1=>$val_1) {
        $arResult["ITEMS_ON_ID"][$val_1["arFields"]["ID"]]=$val_1;
      }
    }
  }
  
  //Дергаем шаблон
  $this->IncludeComponentTemplate();
?>