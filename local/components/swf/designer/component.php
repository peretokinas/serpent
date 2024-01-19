<?php if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();?>
<?php
  CModule::IncludeModule('iblock');

  //Получаем все элементы входящего инфоблока
  $arFilter=[
    'IBLOCK_ID'=>$arParams["IB"],
    'ACTIVE'=>'Y',
  ];
  //Доп фильтры
  if ($arParams["ELEMENT_CODE"]!="") {
    $arFilter["CODE"]=$arParams["ELEMENT_CODE"];
  }

  $res=CIBlockElement::GetList(["SORT"=>"ASC"], $arFilter);
  $arRes=[];
  while ($ob=$res->GetNextElement()) {
    $arRes[]=[
      "arFields"=>$ob->GetFields(),
      "arProps"=>$ob->GetProperties(),
    ];
  }
  
  //Помещаем в результ
  if ($arParams["ALL_RECORDS"]=="Y") {
    //Все результаты
    $arResult["arEl"]=$arRes;
  } else {
    //Только первый
    $arResult["arEl"]=$arRes[0];
  }
  
  //Получаем структуру разделов инфоблока для меню при наличии специального параметра
  $arResult["arTree"]=[];
  if ($arParams["DESIGNER_MENU"]=="Y") {

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
    if ($USER->IsAuthorized()) {
      $res=CIBlockElement::GetList(["ID"=>"DESC"], $arFilter);
      while ($ob=$res->GetNextElement()) {
        $arFields=$ob->GetFields();
        $arProps=$ob->GetProperties();

        $arIdsFav[]=$arProps["ID_PROD"]["VALUE"];
      }
    }

    //Возвращаем в результате
    $arResult["FAVORITES"]=$arIdsFav;
    
    //Дергаем все разделы
    $arTree=[];
    $filter=['IBLOCK_ID'=>$arParams["IB"], 'ACTIVE'=>'Y'];

    $db_list=CIBlockSection::GetList([], $filter, false, ["UF_*"]);
    while ($arSect=$db_list->GetNext()){
      $arTree[]=$arSect;
    }
    //Иерархично собираем в 2 уровня
    $arResult["arTree"]=[];
    foreach ($arTree AS $key=>$val) {
      if ($val["IBLOCK_SECTION_ID"]=="") {
        //Парсим параметры из описания
        $sett_decs=explode(";",$val["DESCRIPTION"]);
        
        //Инфоблок данных для меню
        $sweem_menu_ar=explode("=",$sett_decs[0]);
        if (count($sweem_menu_ar)>=2) {
          $sweem_menu=$sweem_menu_ar[1];
        } else {
          $sweem_menu="";
        }
        
        //Префикс ссылки раздела
        $sweem_prefix_link_ar=explode("=",$sett_decs[1]);
        if (count($sweem_prefix_link_ar)>=2) {
          $sweem_prefix_link=$sweem_prefix_link_ar[1];
        } else {
          $sweem_prefix_link="";
        }
        
        //Дополнительный CSS класс кнопки
        $sweem_class_css_ar=explode("=",$sett_decs[2]);
        if (count($sweem_class_css_ar)>=2) {
          $sweem_class_css=$sweem_class_css_ar[1];
        } else {
          $sweem_class_css="";
        }
        
        //Дополнительный CSS класс кнопки
        $sweem_arr_all=[];
        $sweem_arr_all=explode("=",$sett_decs[3]);
        if (count($sweem_arr_all)>=2) {
          $sweem_dop_title=$sweem_arr_all[1];
        } else {
          $sweem_dop_title="";
        }
        
        $items=[];
        if ($sweem_menu!="") {
          //Выбираем дочерние пунткты из необходимого инфоблока
          $arFilter=[
            'IBLOCK_ID'=>$sweem_menu,
            'ACTIVE'=>'Y',
          ];
          $res=CIBlockElement::GetList([], $arFilter);
          while ($ob=$res->GetNextElement()) {
            $arFields=$ob->GetFields();
            $arProps=$ob->GetProperties();
            $items[]=[
              "ID"=>$arFields["ID"],
              "NAME"=>$arFields["NAME"],
              "CODE"=>$sweem_prefix_link.$arFields["CODE"],
              "ITEMS"=>[],
            ];
          }
          
        } else {
          //Ищем дочерние пункты в массиве пунктов
          foreach ($arTree AS $key_1=>$val_1) {
            if ($val_1["IBLOCK_SECTION_ID"]==$val["ID"]) {
              $items[]=[
                "ID"=>$val_1["ID"],
                "NAME"=>$val_1["NAME"],
                "CODE"=>$val_1["CODE"],
                "ITEMS"=>[],
              ];
            }
          }
        }
        
        //Собираем полноценный пункт с 2 уровнем вложенности в результат
        $arResult["arTree"][]=[
          "ID"=>$val["ID"],
          "NAME"=>$val["NAME"],
          "CODE"=>$val["CODE"],
          "IMG"=>CFile::GetPath($val["UF_IMG"]),
          "CLASS_CSS"=>$sweem_class_css,
          "DOP_TITLE"=>$sweem_dop_title,
          "ITEMS"=>$items,
        ];
      }
    }
  }
  
  //Дергаем шаблон
  $this->IncludeComponentTemplate();
?>