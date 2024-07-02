<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>
<?php
  use Bitrix\Main\Localization\Loc;

  $APPLICATION->SetTitle("Серпент");
  
  $link_static_slider="/catalog/kupalniki/";
?>
<main>

    <?php
    $APPLICATION->IncludeComponent(
      "bitrix:news.list",
      "slider_1",
      [
      "DISPLAY_DATE" => "Y",
      "DISPLAY_NAME" => "Y",
      "DISPLAY_PICTURE" => "Y",
      "DISPLAY_PREVIEW_TEXT" => "Y",
      "AJAX_MODE" => "Y",
      "IBLOCK_TYPE" => "content",
      "IBLOCK_ID" => $arSettings["IB"]["slider_1"],
      "NEWS_COUNT" => 10000,
      "SORT_BY1" => "ACTIVE_FROM",
      "SORT_ORDER1" => "DESC",
      "SORT_BY2" => "SORT",
      "SORT_ORDER2" => "ASC",
      "FILTER_NAME" => "",
      "FIELD_CODE" => Array("ID","DETAIL_PICTURE"),
      "PROPERTY_CODE" => Array("DESCRIPTION"),
      "CHECK_DATES" => "Y",
      "DETAIL_URL" => "",
      "PREVIEW_TRUNCATE_LEN" => "",
      "ACTIVE_DATE_FORMAT" => "d.m.Y",
      "SET_TITLE" => "N",
      "SET_BROWSER_TITLE" => "N",
      "SET_META_KEYWORDS" => "Y",
      "SET_META_DESCRIPTION" => "Y",
      "SET_LAST_MODIFIED" => "Y",
      "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
      "ADD_SECTIONS_CHAIN" => "Y",
      "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
      "PARENT_SECTION" => "",
      "PARENT_SECTION_CODE" => "",
      "INCLUDE_SUBSECTIONS" => "Y",
      "CACHE_TYPE" => "A",
      "CACHE_TIME" => "3600",
      "CACHE_FILTER" => "Y",
      "CACHE_GROUPS" => "Y",
      "DISPLAY_TOP_PAGER" => "Y",
      "DISPLAY_BOTTOM_PAGER" => "Y",
      "PAGER_TITLE" => "Новости",
      "PAGER_SHOW_ALWAYS" => "Y",
      "PAGER_TEMPLATE" => "",
      "PAGER_DESC_NUMBERING" => "Y",
      "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
      "PAGER_SHOW_ALL" => "Y",
      "PAGER_BASE_LINK_ENABLE" => "Y",
      "SET_STATUS_404" => "Y",
      "SHOW_404" => "Y",
      "MESSAGE_404" => "",
      "PAGER_BASE_LINK" => "",
      "PAGER_PARAMS_NAME" => "arrPager",
      "AJAX_OPTION_JUMP" => "N",
      "AJAX_OPTION_STYLE" => "Y",
      "AJAX_OPTION_HISTORY" => "N",
      "AJAX_OPTION_ADDITIONAL" => ""
      ],
    );
    ?>
 
  <section class="inner">
    <div class="container">
      <div class="inner__title title">
      Наши купальники
      </div>
      <div class="inner__section">
        <a href="/catalog" class="inner__block">
          <img class="inner__img inner__img-desktop" src="<?php echo SITE_TEMPLATE_PATH;?>/img/inner/inner-1.jpg" alt="">
          <img class="inner__img inner__img-mobile" src="<?php echo SITE_TEMPLATE_PATH;?>/img/inner/inner-3-mobile.jpg" alt="">
          <p class="inner__name">Топы</p>
        </a>
        <a href="/catalog" class="inner__block">
          <img class="inner__img inner__img-desktop" src="<?php echo SITE_TEMPLATE_PATH;?>/img/inner/inner-3.jpg" alt="">
          <img class="inner__img inner__img-mobile" src="<?php echo SITE_TEMPLATE_PATH;?>/img/inner/inner-4-mobile.jpg" alt="">
          <p class="inner__name">Плавки</p>
        </a>
        <a href="/catalog" class="inner__block">
          <img class="inner__img inner__img-desktop" src="<?php echo SITE_TEMPLATE_PATH;?>/img/inner/inner-4.jpg" alt="">
          <img class="inner__img inner__img-mobile" src="<?php echo SITE_TEMPLATE_PATH;?>/img/inner/inner-1-mobile.jpg" alt="">
          <p class="inner__name">Слитные</p>
        </a>
        <a href="/catalog" class="inner__block">
          <img class="inner__img inner__img-desktop" src="<?php echo SITE_TEMPLATE_PATH;?>/img/inner/inner-2.jpg" alt="">
          <img class="inner__img inner__img-mobile" src="<?php echo SITE_TEMPLATE_PATH;?>/img/inner/inner-2-mobile.jpg" alt="">
          <p class="inner__name">Сертификаты</p>
        </a>
      </div>
    </div>
  </section>
  <div class="container">
    <?php
        //Новинки
        $APPLICATION->IncludeComponent(
          "swf:shop",
          "slider_1",
          [
            "arSettings"=>$arSettings,
            "IB_CAT"=>$arSettings["IB"]["1c_catalog"],
            "IB_SKU"=>$arSettings["IB"]["1c_offers"],
            "IB_REW"=>"",
            "SETT_COLOR_1"=>$arSettings["COLOR_1"],
            "SETT_SHOP_1"=>$arSettings["SHOP"],
            "GROUP_PODOB_1"=>"N",
            "GROUP_PODOB_1_PROP"=>"TSVET",
            "GROUP_PODOB_1_RAZD"=>", ",
            "DETAIL_CODE"=>"",
            "SECTION_CODE_PRINT"=>"kupalniki",
            "SECTION_CODE_PRINT_PARAM"=>"?new=Y",
            "SECTION_NAME_PRINT"=>$arSettings["SHOP"]["SECTION"]["kupalniki"],
            "LINK_CATALOG"=>$arSettings["LINK_STATIC"]["catalog"],
            "CART_DATA"=>"N",
            "SLIDER_TITLE"=>Loc::getMessage("SHOP_SLIDER_1_NEWS"),
            "SLIDER_LIMIT"=>"",
            "ALL_CATALOG_CAST_TITLE"=>"SHOP_SLIDER_1_NEWS_ALL",
            "BUTT_CENTER"=>"Y",
            "FILTER_NEW"=>"Y",
            "TOUCH_EVENT"=>"N",
          ],
        );
    
      ?>
  </div>
    

    <section class="collection">
      <div class="container">
        <div class="collection__title title">Коллекции</div>
        <div class="collection__block">
          <a href="" class="collection__ref picture-1">
            <img class="collection__img collection__img-desktop" src="<?php echo SITE_TEMPLATE_PATH;?>/img/collection/collection-1.jpg" alt="">
            <img class="collection__img collection__img-mobile" src="<?php echo SITE_TEMPLATE_PATH;?>/img/collection/collection-1-mobile.jpg" alt="">
          </a>
          <a href="" class="collection__ref picture-2">
            <img class="collection__img collection__img-desktop" src="<?php echo SITE_TEMPLATE_PATH;?>/img/collection/collection-2.jpg" alt="">
            <img class="collection__img collection__img-mobile" src="<?php echo SITE_TEMPLATE_PATH;?>/img/collection/collection-2-mobile.jpg" alt="">
          </a>
          <a href="" class="collection__ref picture-3">
            <img class="collection__img collection__img-desktop" src="<?php echo SITE_TEMPLATE_PATH;?>/img/collection/collection-3.jpg" alt="">
            <img class="collection__img collection__img-mobile" src="<?php echo SITE_TEMPLATE_PATH;?>/img/collection/collection-3-mobile.jpg" alt="">
          </a>
        </div>
      </div>
    </section>
 
    <section class="about">
      <div class="container">
        <div class="about__block">
          <div class="about__title">О бренде</div>
          <p class="about__description">The Serpent - бренд премиальных купальников и нижнего белья🐍 <br>
В своей работе мы используем современные технологии производства и ткани премиального качества, создаем оригинальный дизайн, учитывая комфорт и идеальную посадку. Мы хотим, чтобы каждая женщина чувствовала себя шикарно и уверенно в любой момент жизни. Наши коллекции - это воплощение женственности, сексуальности и бунтарства! 
</p>
          <a class="about__ref" href="">Узнать больше</a>
        </div>
       
      </div>
    </section>

    <section class="present">
      <div class="container">
        <div class="present__block">
          <img class="present__bg present__bg-desktop" src="<?php echo SITE_TEMPLATE_PATH;?>/img/present/present-bg.jpg" alt="">
          <img class="present__bg present__bg-mobile" src="<?php echo SITE_TEMPLATE_PATH;?>/img/present/present-bg-mobile.jpg" alt="">
          <div class="present__title">Подарочный сертификат</div>
          <p class="present__description">Подари близкому человеку приятные ощущения комфорта. Прикоснитесь к лету с идеальным образом!</p>
          <a href="" class="present__ref">Купить сертификат</a>
        </div>
      </div>
    </section>

    <section class="magazine">
        <div class="container">
          <div class="magazine__title title">Журнал</div>
          <div class="magazine__block">
            <div class="magazine__item">
              <img class="magazine__img" src="<?php echo SITE_TEMPLATE_PATH;?>/img/magazine/magazine-1.jpg" alt="">
              <div class="magazine__info">
                <p class="magazine__date magazine__content">03.01.2022</p>
                <span class="magazine__divider magazine__content">|</span>
                <p class="magazine__link magazine__content"> ПОЛЕЗНАЯ ИНФОРМАЦИЯ</p>
              </div>
              <p class="magazine__article">Какие купальники нравятся мужчинам</p>
            </div>
            <div class="magazine__item">
              <img class="magazine__img" src="<?php echo SITE_TEMPLATE_PATH;?>/img/magazine/magazine-2.jpg" alt="">
              <div class="magazine__info">
                <p class="magazine__date magazine__content">03.01.2022</p>
                <span class="magazine__divider magazine__content">|</span>
                <p class="magazine__link magazine__content"> ПОЛЕЗНАЯ ИНФОРМАЦИЯ</p>
              </div>
              <p class="magazine__article">Какие купальники нравятся мужчинам</p>
            </div>
            <div class="magazine__item">
              <img class="magazine__img" src="<?php echo SITE_TEMPLATE_PATH;?>/img/magazine/magazine-3.jpg" alt="">
              <div class="magazine__info">
                <p class="magazine__date magazine__content">03.01.2022</p>
                <span class="magazine__divider magazine__content">|</span>
                <p class="magazine__link magazine__content"> ПОЛЕЗНАЯ ИНФОРМАЦИЯ</p>
              </div>
              <p class="magazine__article">Какие купальники нравятся мужчинам</p>
            </div>
            <a class="magazine__next-ref" href="">
              <p>Все статьи</p>
              <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M39.3002 20.0001C39.3002 30.6587 30.6597 39.2992 20.0011 39.2992C9.34247 39.2992 0.701953 30.6587 0.701953 20.0001C0.701953 9.34149 9.34247 0.700977 20.0011 0.700977C30.6597 0.700977 39.3002 9.34149 39.3002 20.0001Z" stroke="#263740" stroke-width="1.4"/>
                <path d="M24.1373 20.0006L0.801094 20.0016" stroke="#263740" stroke-linejoin="round"/>
                <path d="M19.9187 15.1106L24.8002 19.9701L19.92 24.831" stroke="#263740" stroke-width="1.4"/>
              </svg>
            </a>
          </div>
        </div>
    </section>
</main>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>

