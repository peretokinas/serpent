<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>
<?php
  $section_code=$_GET["SECTION_CODE"];
  $element_code=$_GET["ELEMENT_CODE"];
  
  if ($element_code!="") {
    //Детальная страница товара
    $APPLICATION->IncludeComponent(
      "swf:shop",
      "detail_1",
      [
        "arSettings"=>$arSettings,
        "IB_CAT"=>$arSettings["IB"]["1c_catalog"],
        "IB_SKU"=>$arSettings["IB"]["1c_offers"],
        "IB_REW"=>$arSettings["IB"]["reviews_prod"],
        "SETT_COLOR_1"=>$arSettings["COLOR_1"],
        "SETT_SHOP_1"=>$arSettings["SHOP"],
        "GROUP_PODOB_1"=>"Y",
        "GROUP_PODOB_1_PROP"=>"TSVET",
        "GROUP_PODOB_1_RAZD"=>", ",
        "DETAIL_CODE"=>$element_code,
        "SECTION_CODE_PRINT"=>$section_code,
        "SECTION_NAME_PRINT"=>$arSettings["SHOP"]["SECTION"][$section_code],
        "LINK_CATALOG"=>$arSettings["LINK_STATIC"]["catalog"],
        "CART_DATA"=>"N",
        "SLIDER_TITLE"=>"",
        "SLIDER_LIMIT"=>"",
        "ALL_CATALOG_CAST_TITLE"=>"",
        "BUTT_CENTER"=>"",
      ],
    );
  } else {
    //Получаем фильтры пользователя
    $arFilter=swf_catalog::filter_get();
    
    //Проверяем наличие фильтра по цвету. Если есть - отключаем подобные по цвету
    $GROUP_PODOB_1="N";
    if (isset($arFilter["color"])) {
      if (count($arFilter["color"])>0) {
        $GROUP_PODOB_1="N";
      }
    }
    
    //Включаем фильтры
    $filter_yes="Y";
    
    //Отключаем фильтры для раздела сертификатов
    if ($section_code=="cert") {
      $filter_yes="N";
    }
    
    
    //Фильтр коллекция, изначально был фильтр Модель (Пока так, потом переименую нормально)
    $filter_collect=$_GET["collect"];
    if ($filter_collect=="") {
      $filter_collect=$_GET["model"];
    }
    
    //Секция каталога
    $APPLICATION->IncludeComponent(
      "swf:shop",
      "section_1",
      [
        "arSettings"=>$arSettings,
        "IB_CAT"=>$arSettings["IB"]["1c_catalog"],
        "IB_SKU"=>$arSettings["IB"]["1c_offers"],
        "IB_REW"=>"",
        "SETT_COLOR_1"=>$arSettings["COLOR_1"],
        "SETT_SHOP_1"=>$arSettings["SHOP"],
        "GROUP_PODOB_1"=>$GROUP_PODOB_1,
        "GROUP_PODOB_1_PROP"=>"TSVET",
        "GROUP_PODOB_1_RAZD"=>", ",
        "DETAIL_CODE"=>"",
        "SECTION_CODE"=>$section_code,
        "SECTION_CODE_PRINT"=>$section_code,
        "SECTION_NAME_PRINT"=>$arSettings["SHOP"]["SECTION"][$section_code],
        "LINK_CATALOG"=>$arSettings["LINK_STATIC"]["catalog"],
        "CART_DATA"=>"N",
        "SLIDER_TITLE"=>"",
        "SLIDER_LIMIT"=>"",
        "ALL_CATALOG_CAST_TITLE"=>"",
        "BUTT_CENTER"=>"",
        "SEARCH_TEXT"=>$_GET["search"],
        "USE_FILTER"=>$filter_yes,
        "FILTER_NEW"=>$_GET["new"],
        "FILTER_HIT"=>$_GET["hit"],
        "FILTER_SALE"=>$_GET["sale"],
        "FILTER_MODEL"=>$_GET["collect"],
        "FILTER_VID"=>$_GET["vid"],
      ],
    );
  }
?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>