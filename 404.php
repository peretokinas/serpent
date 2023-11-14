<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>
<?php include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');?>
<?php
  use Bitrix\Main\Localization\Loc;
?>
<main>
  <div class="not-found">
    <div class="container">
      <div class="not-found-container">
        <?php
        //Хлебные крошки
        $APPLICATION->IncludeComponent(
          "swf:breadcrumbs",
          "main_1",
          [
            "ITEMS"=>[
              [
                "NAME"=>"Главная",
                "LINK"=>"/",
              ],
              [
                "NAME"=>"404",
                "LINK"=>"",
              ]
            ],
          ],
          );
        ?>
        <div class="not-found__title">404</div>
        <div class="not-found__content">Страница не найдена</div>
        <a href="/" class="btn">
          Вернуться на главную
        </a>
      </div>
    </div>
  </div>
  <div class="container">
    <?php
      //Новинки
      $APPLICATION->IncludeComponent(
        "swf:catalog",
        "slider_1",
        [
          "IB_CAT"=>$arSettings["IB"]["1c_catalog"],
          "IB_SKU"=>$arSettings["IB"]["1c_offers"],
          "IB_REW"=>"",
          "SETT_COLOR_1"=>$arSettings["COLOR_1"],
          "SETT_SHOP_1"=>$arSettings["SHOP"],
          "GROUP_PODOB_1"=>"Y",
          "GROUP_PODOB_1_PROP"=>"TSVET",
          "GROUP_PODOB_1_RAZD"=>", ",
          "DETAIL_CODE"=>"",
          "SECTION_CODE_PRINT"=>"kupalniki",
          "SECTION_NAME_PRINT"=>$arSettings["SHOP"]["SECTION"]["kupalniki"],
          "LINK_CATALOG"=>$arSettings["LINK_STATIC"]["catalog"],
          "SLIDER_TITLE"=>Loc::getMessage("SHOP_SLIDER_1_NEWS"),
          "SLIDER_LIMIT"=>rand(3,10),
          "ALL_CATALOG_CAST_TITLE"=>"SHOP_SLIDER_1_NEWS_ALL",
          "BUTT_CENTER"=>"N",
        ],
      );
      
      //Хиты продаж
      $APPLICATION->IncludeComponent(
        "swf:catalog",
        "slider_1",
        [
          "IB_CAT"=>$arSettings["IB"]["1c_catalog"],
          "IB_SKU"=>$arSettings["IB"]["1c_offers"],
          "IB_REW"=>"",
          "SETT_COLOR_1"=>$arSettings["COLOR_1"],
          "SETT_SHOP_1"=>$arSettings["SHOP"],
          "GROUP_PODOB_1"=>"Y",
          "GROUP_PODOB_1_PROP"=>"TSVET",
          "GROUP_PODOB_1_RAZD"=>", ",
          "DETAIL_CODE"=>"",
          "SECTION_CODE_PRINT"=>"kupalniki",
          "SECTION_NAME_PRINT"=>$arSettings["SHOP"]["SECTION"]["kupalniki"],
          "LINK_CATALOG"=>$arSettings["LINK_STATIC"]["catalog"],
          "SLIDER_TITLE"=>Loc::getMessage("SHOP_SLIDER_1_HIT"),
          "SLIDER_LIMIT"=>rand(3,10),
          "ALL_CATALOG_CAST_TITLE"=>"SHOP_SLIDER_1_HIT_ALL",
          "BUTT_CENTER"=>"N",
        ],
      );
    ?>
  </div>
</main>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>