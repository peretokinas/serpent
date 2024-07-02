<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php 
  use Bitrix\Main\Localization\Loc;
?>
<div class="search-modal">
  <div class="container">
    <div class="search-back">
      <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34" fill="none">
        <path d="M20 11L14 17L20 23" stroke="#263740" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </div>
    <form method="GET" action="<?php echo $arParams["arSettings"]["LINK_STATIC"]["catalog"];?>kupalniki/" class="search-modal__form">
      <div class="search-modal__icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
          <path d="M9.35441 18.013C13.9684 18.013 17.7088 14.2726 17.7088 9.65861C17.7088 5.0446 13.9684 1.3042 9.35441 1.3042C4.7404 1.3042 1 5.0446 1 9.65861C1 14.2726 4.7404 18.013 9.35441 18.013Z" stroke="#263740" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M4.93555 9.65852C4.93555 8.48634 5.40121 7.36206 6.23006 6.5332C7.05892 5.70434 8.18312 5.23877 9.3553 5.23877" stroke="#263740" stroke-linecap="square" stroke-linejoin="round"/>
          <path d="M15.5527 15.249L20.9997 20.696" stroke="#263740" stroke-width="1.4" stroke-linecap="square" stroke-linejoin="round"/>
        </svg>
      </div>
      <input type="text" name="search" class="search-modal__input">
      <button class="btn">Найти</button>
    </form>
    <div class="search-modal__result">
      <div class="search-modal__column">
        <div class="search-modal__title">Популярные запросы</div>
        <?php foreach($arParams["arSettings"]["POPULAR_SEARCH"] AS $key=>$val):?>
          <a href="<?php echo $arParams["arSettings"]["LINK_STATIC"]["catalog"];?>kupalniki/?search=<?php echo $val;?>" class="search-modal__item">
            <?php echo $val;?>
          </a>
        <?php endforeach;?>
        <div class="search-modal__title">Категории</div>
        <a href="<?php echo $arParams["arSettings"]["LINK_STATIC"]["catalog"];?>kupalniki/?vid=Купальник женский слитный" class="search-modal__item">
          Купальник слитный
        </a>
        <a href="<?php echo $arParams["arSettings"]["LINK_STATIC"]["catalog"];?>kupalniki/?vid=Купальник женский раздельный" class="search-modal__item">
          Купальник раздельний
        </a>
      </div>
      <?php
        //Популярные товары
        $APPLICATION->IncludeComponent(
          "swf:shop",
          "slider_2",
          [
            "arSettings"=>$arParams["arSettings"],
            "IB_CAT"=>$arParams["arSettings"]["IB"]["1c_catalog"],
            "IB_SKU"=>$arParams["arSettings"]["IB"]["1c_offers"],
            "IB_REW"=>"",
            "SETT_COLOR_1"=>$arParams["arSettings"]["COLOR_1"],
            "SETT_SHOP_1"=>$arParams["arSettings"]["SHOP"],
            "GROUP_PODOB_1"=>"N",
            "GROUP_PODOB_1_PROP"=>"TSVET",
            "GROUP_PODOB_1_RAZD"=>", ",
            "DETAIL_CODE"=>"",
            "SECTION_CODE_PRINT"=>"kupalniki",
            "SECTION_NAME_PRINT"=>$arParams["arSettings"]["SHOP"]["SECTION"]["kupalniki"],
            "LINK_CATALOG"=>$arParams["arSettings"]["LINK_STATIC"]["catalog"],
            "CART_DATA"=>"N",
            "SLIDER_TITLE"=>Loc::getMessage("SHOP_SLIDER_1_NEWS"),
            "SLIDER_LIMIT"=>"",
            "ALL_CATALOG_CAST_TITLE"=>"SHOP_SLIDER_1_NEWS_ALL",
            "BUTT_CENTER"=>"Y",
            "FILTER_HIT"=>"Y",
          ],
        );
      ?>
    </div>
  </div>
</div>