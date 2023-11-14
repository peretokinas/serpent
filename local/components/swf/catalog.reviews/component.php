<?php if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();?>
<?php
  //Получаем все отзывы
  $arFilter=[
    'IBLOCK_ID'=>$arParams["IB"],
    'ACTIVE'=>'Y',
    'PROPERTY_STATUS_VALUE'=>"Опубликован",
  ];
  
  //Доп фильтры
  if ($arParams["PROD_ID"]!="") {
    $arFilter['PROPERTY_PROD']=$arParams["PROD_ID"];
  }
  
  $res=CIBlockElement::GetList(["DATE_CREATE"=>"DESC"], $arFilter);
  $arRes=[];
  while ($ob=$res->GetNextElement()) {
    $arFields=$ob->GetFields();
    $arProps=$ob->GetProperties();
    
    $arRes[]=[
      "arFields"=>$arFields,
      "arProps"=>$arProps,
    ];
  }
  
  $arResult["ITEMS"]=$arRes;
  
  //Считаем среднюю оценку
  $sr_oc=0;
  foreach ($arResult["ITEMS"] AS $key=>$val) {
    $sr_oc=$sr_oc+$val["arProps"]["USER_OCENKA"]["VALUE"];
  }
  if (count($arResult["ITEMS"])!=0) {
    $sr_oc=$sr_oc/count($arResult["ITEMS"]);
  }
  $sr_oc=round($sr_oc,1);
  $sr_oc=swf_util::get_num_form_1($sr_oc);
  
  $arResult["SROC"]=$sr_oc;


  //Дергаем шаблон
  $this->IncludeComponentTemplate();
?>