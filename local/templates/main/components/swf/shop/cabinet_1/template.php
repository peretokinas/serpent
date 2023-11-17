<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php
  use Bitrix\Main\Localization\Loc;
  $menuNames = swf_catalog::get_names_ib($arParams["arSettings"]["IB"]["cabinet_1"]);
?>
<main>
<div class="container">
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
          "NAME"=>"Личный кабинет",
          "LINK"=>"/cabinet/page_general/",
        ],
        [
          "NAME"=> $menuNames["cabinet/" . $arParams['SECTION_CODE_PRINT']],
          "LINK"=>"",
        ]
      ],
    ],
  );
?>
</div>
<div class="container">
  <h1><?php echo $menuNames["cabinet/".$arParams['SECTION_CODE_PRINT']]; ?></h1>
  <div class="lk-page">
    <div class="lk-sidebar__btn">
      Основная информация
      <svg xmlns="http://www.w3.org/2000/svg" width="9" height="6" viewBox="0 0 9 6" fill="none">
        <path d="M7.99203 0.992034L4.46447 4.53553L0.935982 0.992951" stroke="#263740"/>
      </svg>
    </div>
    <div class="lk-sidebar">
      <div class="lk-sidebar__close">
        <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34" fill="none">
          <path d="M9 9L25 25" stroke="#263740" stroke-linecap="square"/>
          <path d="M25 9L9 25" stroke="#263740" stroke-linecap="square"/>
        </svg>
      </div>
      <?php
      //Конструктор меню
      $APPLICATION->IncludeComponent(
        "swf:designer",
        "menu_lk",
        [
          "IB"=>$arParams["arSettings"]["IB"]["cabinet_1"],
          "DESIGNER_MENU"=>"Y",
        ],
      );
      ?>
      <a href="#" class="btn btn_white-b">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
          <path d="M4.53352 14.545H5.84664C6.45269 14.545 6.85672 14.1813 6.85672 13.6359V8.36319C6.85672 7.81774 6.45269 7.4541 5.84664 7.4541H3.52344V13.545C3.52344 14.0904 3.92747 14.545 4.53352 14.545Z"
                stroke="#263740" stroke-miterlimit="10"/>
          <path d="M3.52522 13.7275V8.27295C2.11109 8.27295 1 9.27295 1 10.5457V11.5457C1 12.7275 2.11109 13.7275 3.52522 13.7275Z"
                stroke="#263740" stroke-miterlimit="10"/>
          <path d="M18.4759 14.545H16.1527C15.5466 14.545 15.1426 14.1813 15.1426 13.6359V8.36319C15.1426 7.81774 15.5466 7.4541 16.1527 7.4541H18.4759V14.545Z"
                stroke="#263740" stroke-miterlimit="10"/>
          <path d="M18.4746 13.727V8.27246C19.8887 8.27246 20.9998 9.27246 20.9998 10.5452V11.5452C20.9998 12.727 19.8887 13.727 18.4746 13.727Z"
                stroke="#263740" stroke-miterlimit="10"/>
          <path d="M18.4727 7.54543C18.4727 3.99999 15.2404 1 11.3011 1H10.695C6.75571 1 3.52344 3.90908 3.52344 7.45452"
                stroke="#263740" stroke-miterlimit="10"/>
          <path d="M12.1113 19.9999H12.9194C15.9497 19.9999 18.4749 17.7272 18.4749 15V14.5454"
                stroke="#263740" stroke-miterlimit="10"/>
          <path d="M10.9998 21C11.6134 21 12.1109 20.5523 12.1109 20C12.1109 19.4477 11.6134 19 10.9998 19C10.3861 19 9.88867 19.4477 9.88867 20C9.88867 20.5523 10.3861 21 10.9998 21Z"
                stroke="#263740" stroke-miterlimit="10"/>
        </svg>
        <?php echo Loc::getMessage("LK_SUPPORT"); ?>
      </a>
    </div>
    <?php include_once $arParams['SECTION_CODE_PRINT'].".php"; ?>
</div>
</main>