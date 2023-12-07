<?php
  //Вызов компонента
  $APPLICATION->IncludeComponent(
      "swf:shop",
      "",
      [
        "arSettings"=>"",
        "IB_CAT"=>"",
        "IB_SKU"=>"",
        "IB_REW"=>"",
        "SETT_COLOR_1"=>"",
        "SETT_SHOP_1"=>"",
        "GROUP_PODOB_1"=>"",
        "GROUP_PODOB_1_PROP"=>"",
        "GROUP_PODOB_1_RAZD"=>"",
        "DETAIL_CODE"=>"",
        "SECTION_CODE_PRINT"=>"",
        "SECTION_NAME_PRINT"=>"",
        "LINK_CATALOG"=>"",
        "CART_DATA"=>"",
        "SLIDER_TITLE"=>"",
        "SLIDER_LIMIT"=>"",
        "ALL_CATALOG_CAST_TITLE"=>"",
        "BUTT_CENTER"=>"",
        "SEARCH_TEXT"=>"", //БЭК Текст поиска
        "GET_ORDERS_USER_NOW"=>"Y", //БЭК Получение заказов текущего пользователя
        "ITEMS_ON_ID_PROD"=>"Y", //БЭК Возврат дополнительного массива ITEMS с индексом=ID элемента. При использовании данного параметра необходимо отключать группировку подобных "GROUP_PODOB_1"=>"N"
        "FAVORITES"=>"Y", //БЭК Если заполнено - то выбираются только товары из массива избранных для донного пользователя
      ],
    );
  }
?>