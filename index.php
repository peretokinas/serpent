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
  <div class="container">
    <div class="section section-swimsuit-2 section-swimsuit__ps-two">
      <div class="swimsuit-title__mobile">Слитные купальники</div>
      <div class="swiper swiper-mobile">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="<?=SITE_TEMPLATE_PATH;?>/img/main/slit_3_m.jpg?v=2" alt="">
          </div>
          <div class="swiper-slide">
            <img src="<?=SITE_TEMPLATE_PATH;?>/img/main/slit_2_m.jpg?v=2" alt="">
          </div>
          <div class="swiper-slide">
            <img src="<?=SITE_TEMPLATE_PATH;?>/img/main/slit_1_m.jpg?v=2" alt="">
          </div>
          <a href="<?php echo $link_static_slider;?>?vid=Купальник женский слитный" class="swiper-slide swiper-slide__all-slider">
             <span class="link-circle">
              <span class="link-circle__text">
                Все модели
              </span>
              <span class="link-circle__arrow">
                 <svg xmlns="http://www.w3.org/2000/svg" width="32" height="31" viewBox="0 0 32 31" fill="none">
                  <path d="M29.1713 16.0006L-0.000242786 16.002" stroke="#263740" stroke-linejoin="round"></path>
                  <path d="M23.8977 9.88823L29.9998 15.963L23.8992 22.0393" stroke="#263740" stroke-width="2"></path>
                </svg>
              </span>
            </span>
          </a>
        </div>
      </div>
      <div class="swimsuit-block">
        <div class="swimsuit-block__content">
          <div class="title mb-60">Слитные купальники</div>
          <div class="swimsuit-block__flex swimsuit-block__flex-text">
            <div class="swimsuit-block__column">
              <a href="<?php echo $link_static_slider;?>?vid=Купальник женский слитный" class="link-circle">
                <span class="link-circle__arrow">
                   <svg xmlns="http://www.w3.org/2000/svg" width="32" height="31" viewBox="0 0 32 31"
                      fill="none">
                    <path d="M29.1713 16.0006L-0.000242786 16.002" stroke="#263740"
                        stroke-linejoin="round"></path>
                    <path d="M23.8977 9.88823L29.9998 15.963L23.8992 22.0393" stroke="#263740"
                        stroke-width="2"></path>
                  </svg>
                </span>
                <span class="link-circle__text">
                  Все модели
                </span>
              </a>
            </div>
            <div class="swimsuit-block__column">
              <p>
                Слитные купальники <b>The Serpent</b> созданы подчеркнуть женственные изгибы и соблазнительные формы. Выполнены из ткани с эффектом гладкого шелка, идеально облегающего тело, вызывая восхищение. Каждая деталь продумана до мелочей, позволяя выглядеть стильно и элегантно.
              </p>
            </div>
          </div>
          <div class="swimsuit-block__flex">
            <div class="swimsuit-block__column cast_max_height_2">
              <img src="<?=SITE_TEMPLATE_PATH;?>/img/main/slit_2.jpg?v=2" alt="">
            </div>
            <div class="swimsuit-block__column cast_max_height_2">
              <img src="<?=SITE_TEMPLATE_PATH;?>/img/main/slit_3.jpg?v=2" alt="">
            </div>
          </div>
        </div>
        <div class="swimsuit-block__pic cast_max_height_1">
          <img src="<?=SITE_TEMPLATE_PATH;?>/img/main/slit_1.jpg?v=2" alt="">
        </div>
      </div>
    </div>
    <!--<div class="section section-swimsuit-2 section-swimsuit__ps-two section-swimsuit-2-mobile">
      <div class="swimsuit-title__mobile">Свадебное нижнее белье</div>
      <div class="swiper swiper-mobile">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="<?=SITE_TEMPLATE_PATH;?>/img/main/underwear-3.jpg" alt="">
          </div>
          <div class="swiper-slide">
            <img src="<?=SITE_TEMPLATE_PATH;?>/img/main/underwear-3.jpg" alt="">
          </div>
          <div class="swiper-slide">
            <img src="<?=SITE_TEMPLATE_PATH;?>/img/main/underwear-3.jpg" alt="">
          </div>
          <a href="<?php echo $link_static_slider;?>" class="swiper-slide swiper-slide__all-slider">
               <span class="link-circle">
                <span class="link-circle__text">
                  Все модели
                </span>
                <span class="link-circle__arrow">
                   <svg xmlns="http://www.w3.org/2000/svg" width="32" height="31" viewBox="0 0 32 31" fill="none">
                    <path d="M29.1713 16.0006L-0.000242786 16.002" stroke="#263740" stroke-linejoin="round"></path>
                    <path d="M23.8977 9.88823L29.9998 15.963L23.8992 22.0393" stroke="#263740" stroke-width="2"></path>
                  </svg>
                </span>
              </span>
          </a>
        </div>
      </div>
      <div class="swimsuit-block">
        <div class="swimsuit-block__pic">
          <img src="<?=SITE_TEMPLATE_PATH;?>/img/main/underwear-2.jpg" alt="">
        </div>
        <div class="swimsuit-block__content">
          <div class="title mb-60">Свадебное нижнее белье</div>
          <div class="swimsuit-block__flex swimsuit-block__flex-text">
            <div class="swimsuit-block__column">
              <a href="<?php echo $link_static_slider;?>" class="link-circle">
                <span class="link-circle__arrow">
                   <svg xmlns="http://www.w3.org/2000/svg" width="32" height="31" viewBox="0 0 32 31"
                      fill="none">
                    <path d="M29.1713 16.0006L-0.000242786 16.002" stroke="#263740"
                        stroke-linejoin="round"></path>
                    <path d="M23.8977 9.88823L29.9998 15.963L23.8992 22.0393" stroke="#263740"
                        stroke-width="2"></path>
                  </svg>
                </span>
                <span class="link-circle__text">
                  Все модели
                </span>
              </a>
            </div>
            <div class="swimsuit-block__column">
              <p>
               Свадебное нижнее белье <b>The Serpent</b> – это эстетичный дизайн, подчеркивающий женское очарование. Ювелирно проработанный крой и особое внимание к деталям делают его идеальным выбором невесты. Мягкий шелк обеспечивает комфорт, позволяя чувствовать себя уверенной и соблазнительной на протяжении всего торжества.
              </p>
            </div>
          </div>
          <div class="swimsuit-block__flex">
            <div class="swimsuit-block__column">
              <img src="<?=SITE_TEMPLATE_PATH;?>/img/main/underwear-4.jpg" alt="">
            </div>
            <div class="swimsuit-block__column">
              <img src="<?=SITE_TEMPLATE_PATH;?>/img/main/underwear-3.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>-->
    <!--<div class="section section-swimsuit-1 underwear">
      <div class="swimsuit-title__mobile">Слитные купальники</div>
      <div class="underwear-column">
        <div class="underwear-column__pic">
          <img src="<?=SITE_TEMPLATE_PATH;?>/img/main/underwear-1.jpg" alt="">
        </div>
        <div class="underwear-column__context">
          Свадебное нижнее белье <b>The Serpent</b> – это эстетичный дизайн, подчеркивающий женское очарование. Ювелирно проработанный крой и особое внимание к деталям делают его идеальным выбором невесты. Мягкий шелк обеспечивает комфорт, позволяя чувствовать себя уверенной и соблазнительной на протяжении всего торжества.
        </div>
      </div>
      <div class="underwear-column">
        <div class="underwear-column__pic">
          <img src="<?=SITE_TEMPLATE_PATH;?>/img/main/underwear-2.jpg" alt="">
        </div>
      </div>
      <div class="underwear-column underwear-column__right">
        <div class="underwear-column__context">
          <div class="title mb-40">Свадебное <br>нижнее белье</div>
          <a href="<?php echo $link_static_slider;?>" class="link-circle">
            <span class="link-circle__text">
              Все модели
            </span>
            <span class="link-circle__arrow">
               <svg xmlns="http://www.w3.org/2000/svg" width="32" height="31" viewBox="0 0 32 31" fill="none">
                <path d="M29.1713 16.0006L-0.000242786 16.002" stroke="#263740" stroke-linejoin="round"></path>
                <path d="M23.8977 9.88823L29.9998 15.963L23.8992 22.0393" stroke="#263740" stroke-width="2"></path>
              </svg>
            </span>
          </a>
        </div>
        <div class="underwear-column__pic">
          <img src="<?=SITE_TEMPLATE_PATH;?>/img/main/underwear-3.jpg" alt="">
        </div>
      </div>
    </div>-->
    <div class="section section-swimsuit-2 section-swimsuit__ps-one">
      <div class="swimsuit-title__mobile">Раздельные купальники</div>
      <div class="swiper swiper-mobile">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="<?=SITE_TEMPLATE_PATH;?>/img/main/razdel_1_m.jpg?v=2" alt="">
          </div>
          <div class="swiper-slide">
            <img src="<?=SITE_TEMPLATE_PATH;?>/img/main/razdel_2_m.jpg?v=2" alt="">
          </div>
          <div class="swiper-slide">
            <img src="<?=SITE_TEMPLATE_PATH;?>/img/main/razdel_3_m.jpg?v=2" alt="">
          </div>
          <a href="<?php echo $link_static_slider;?>?vid=Купальник женский раздельный" class="swiper-slide swiper-slide__all-slider">
               <span class="link-circle">
                <span class="link-circle__text">
                  Все модели
                </span>
                <span class="link-circle__arrow">
                   <svg xmlns="http://www.w3.org/2000/svg" width="32" height="31" viewBox="0 0 32 31" fill="none">
                    <path d="M29.1713 16.0006L-0.000242786 16.002" stroke="#263740" stroke-linejoin="round"></path>
                    <path d="M23.8977 9.88823L29.9998 15.963L23.8992 22.0393" stroke="#263740" stroke-width="2"></path>
                  </svg>
                </span>
              </span>
          </a>
        </div>
      </div>
      <div class="swimsuit-block cast_flex_fd_1">
        <div class="swimsuit-block__content">
          <div class="title mb-60">Раздельные купальники</div>
          <div class="swimsuit-block__flex swimsuit-block__flex-text">
            <div class="swimsuit-block__column">
              <a href="<?php echo $link_static_slider;?>?vid=Купальник женский раздельный" class="link-circle">
                <span class="link-circle__arrow">
                   <svg xmlns="http://www.w3.org/2000/svg" width="32" height="31" viewBox="0 0 32 31"
                      fill="none">
                    <path d="M29.1713 16.0006L-0.000242786 16.002" stroke="#263740"
                        stroke-linejoin="round"></path>
                    <path d="M23.8977 9.88823L29.9998 15.963L23.8992 22.0393" stroke="#263740"
                        stroke-width="2"></path>
                  </svg>
                </span>
                <span class="link-circle__text">
                  Все модели
                </span>
              </a>
            </div>
            <div class="swimsuit-block__column">
              <p>
                Раздельные купальники <b>The Serpent</b> созданы раскрывать красоту женского тела. Выполненные из тактильно приятной ткани премиум качества, обеспечивают идеальную посадку для комфортного плавания и идеально ровного загара. Оригинальный дизайн позволяет создать незабываемый образ.
              </p>
            </div>
          </div>
          <div class="swimsuit-block__flex">
            <div class="swimsuit-block__column cast_max_height_3">
              <img class="swimsuit-img_cast_fixed_height_1" src="<?=SITE_TEMPLATE_PATH;?>/img/main/razdel_1.jpg?v=3" alt="">
            </div>
            <div class="swimsuit-block__column cast_max_height_3">
              <img class="swimsuit-img_cast_fixed_height_1" src="<?=SITE_TEMPLATE_PATH;?>/img/main/razdel_2.jpg?v=3" alt="">
            </div>
          </div>
        </div>
        <div class="swimsuit-block__pic cast_max_height_1">
          <img src="<?=SITE_TEMPLATE_PATH;?>/img/main/razdel_3.jpg?v=3" alt="">
        </div>
      </div>
    </div>

    <!--<div class="section section-desktop__swimsuit section-swimsuit-1" hidden>
      <div class="swimsuit-flex">
        <div class="swimsuit-pics">
          <div class="swimsuit-pic">
            <img src="<?=SITE_TEMPLATE_PATH;?>/img/main/swimsuit-2.jpg" alt="">
          </div>
          <div class="swimsuit-pic">
            <img src="<?=SITE_TEMPLATE_PATH;?>/img/main/swimsuit-1.jpg" alt="">
          </div>
        </div>
        <div class="swimsuit-flex__content">
          <div class="title mb-60">Слитные</div>
          <p>Слитные купальники <b>The Serpent</b> созданы подчеркнуть женственные изгибы и соблазнительные формы. Выполнены из ткани с эффектом гладкого шелка, идеально облегающего тело, вызывая восхищение. Каждая деталь продумана до мелочей, позволяя выглядеть стильно и элегантно.</p>
          <a href="<?php echo $link_static_slider;?>?vid=Купальник женский слитный" class="link-circle">
            <span class="link-circle__arrow">
               <svg xmlns="http://www.w3.org/2000/svg" width="32" height="31" viewBox="0 0 32 31"
                  fill="none">
                <path d="M29.1713 16.0006L-0.000242786 16.002" stroke="#263740"
                    stroke-linejoin="round"></path>
                <path d="M23.8977 9.88823L29.9998 15.963L23.8992 22.0393" stroke="#263740"
                    stroke-width="2"></path>
              </svg>
            </span>
            <span class="link-circle__text">
              Все модели
            </span>
          </a>
        </div>
      </div>
      <div class="swimsuit-flex">
        <div class="swimsuit-pics">
          <div class="swimsuit-pic">
            <img src="<?=SITE_TEMPLATE_PATH;?>/img/main/swimsuit-3.jpg" alt="">
          </div>
          <div class="swimsuit-pic">
            <img src="<?=SITE_TEMPLATE_PATH;?>/img/main/swimsuit-4.jpg" alt="">
          </div>
        </div>
        <div class="swimsuit-flex__content">
          <div class="title mb-60">Раздельные</div>
          <p>Раздельные купальники <b>The Serpent</b> созданы раскрывать красоту женского тела. Выполненные из тактильно приятной ткани премиум качества, обеспечивают идеальную посадку для комфортного плавания и идеально ровного загара. Оригинальный дизайн позволяет создать незабываемый образ.</p>
          <a href="<?php echo $link_static_slider;?>?vid=Купальник женский раздельный" class="link-circle">
            <span class="link-circle__arrow">
               <svg xmlns="http://www.w3.org/2000/svg" width="32" height="31" viewBox="0 0 32 31"
                  fill="none">
                <path d="M29.1713 16.0006L-0.000242786 16.002" stroke="#263740"
                    stroke-linejoin="round"></path>
                <path d="M23.8977 9.88823L29.9998 15.963L23.8992 22.0393" stroke="#263740"
                    stroke-width="2"></path>
              </svg>
            </span>
            <span class="link-circle__text">
              Все модели
            </span>
          </a>
        </div>
      </div>
    </div>-->
    <!--<div class="section-tablet__swimsuit">
      <div class="swimsuit-title__mobile">Слитные</div>
      <div class="swiper swiper-swimsuit">
        <div class="swiper-wrapper">
          <div class="swiper-slide swiper-swimsuit__img_full">
            <div class="swiper-swimsuit__img">
              <img src="<?=SITE_TEMPLATE_PATH;?>/img/main/swim-t-1.jpg" alt="">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="swiper-swimsuit__img">
              <img src="<?=SITE_TEMPLATE_PATH;?>/img/main/swim-t-2.jpg" alt="">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="swiper-swimsuit__img">
              <img src="<?=SITE_TEMPLATE_PATH;?>/img/main/swim-t-3.jpg" alt="">
            </div>
          </div>
          <a href="<?php echo $link_static_slider;?>?vid=Купальник женский слитный" class="swiper-slide swiper-slide__all" style="background-image: url('<?=SITE_TEMPLATE_PATH;?>/img/main/swim-t-4.jpg')">
            <span class="link-circle">
              <span class="link-circle__text">
                Все модели
              </span>
              <span class="link-circle__arrow">
                 <svg xmlns="http://www.w3.org/2000/svg" width="32" height="31" viewBox="0 0 32 31" fill="none">
                  <path d="M29.1713 16.0006L-0.000242786 16.002" stroke="#263740" stroke-linejoin="round"></path>
                  <path d="M23.8977 9.88823L29.9998 15.963L23.8992 22.0393" stroke="#263740" stroke-width="2"></path>
                </svg>
              </span>
            </span>
          </a>
        </div>
      </div>
      <div class="swiper swiper-swimsuit-revert" dir="rtl">
        <div class="swiper-wrapper">
          <div class="swiper-slide swiper-swimsuit__img_full">
            <div class="swiper-swimsuit__img">
              <img src="<?=SITE_TEMPLATE_PATH;?>/img/main/swim-t-6.jpg" alt="">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="swiper-swimsuit__img">
              <img src="<?=SITE_TEMPLATE_PATH;?>/img/main/swim-t-7.jpg" alt="">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="swiper-swimsuit__img">
              <img src="<?=SITE_TEMPLATE_PATH;?>/img/main/swim-t-8.jpg" alt="">
            </div>
          </div>
          <a href="<?php echo $link_static_slider;?>?vid=Купальник женский раздельный" class="swiper-slide swiper-slide__all" style="background-image: url('<?=SITE_TEMPLATE_PATH;?>/img/main/swim-t-9.jpg')">
            <span class="link-circle">
              <span class="link-circle__text">
                Все модели
              </span>
              <span class="link-circle__arrow">
                 <svg xmlns="http://www.w3.org/2000/svg" width="32" height="31" viewBox="0 0 32 31" fill="none">
                  <path d="M29.1713 16.0006L-0.000242786 16.002" stroke="#263740" stroke-linejoin="round"></path>
                  <path d="M23.8977 9.88823L29.9998 15.963L23.8992 22.0393" stroke="#263740" stroke-width="2"></path>
                </svg>
              </span>
            </span>
          </a>
        </div>
      </div>
      <div class="swimsuit-title__mobile">Раздельные</div>
    </div>-->


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
      
      //Хиты продаж
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
          "SECTION_CODE_PRINT_PARAM"=>"?hit=Y",
          "SECTION_NAME_PRINT"=>$arSettings["SHOP"]["SECTION"]["kupalniki"],
          "LINK_CATALOG"=>$arSettings["LINK_STATIC"]["catalog"],
          "CART_DATA"=>"N",
          "SLIDER_TITLE"=>Loc::getMessage("SHOP_SLIDER_1_HIT"),
          "SLIDER_LIMIT"=>"",
          "ALL_CATALOG_CAST_TITLE"=>"SHOP_SLIDER_1_HIT_ALL",
          "BUTT_CENTER"=>"Y",
          "FILTER_HIT"=>"Y",
          "TOUCH_EVENT"=>"N",
        ],
      );
    ?>
    <div class="surprise section">
      <div class="surprise-banner">
        <img src="<?=SITE_TEMPLATE_PATH;?>/img/main/logo-mobile.svg" alt="" class="surprise-logo-mobile">
        <div class="surprise-banner__bg"></div>
        <div class="surprise-banner__content">
          <div class="surprise-banner__logo">
            <svg xmlns="http://www.w3.org/2000/svg" width="300" height="120" viewBox="0 0 300 120"
               fill="none">
              <g clip-path="url(#clip0_1001_68)">
                <path d="M53.7086 0.977708C54.8946 0.0304636 56.4985 0.29413 57.8983 0.235537C65.9522 0.342957 74.0206 0.074408 82.0696 0.372253C81.1461 1.41227 80.383 3.10168 78.8082 3.17004C75.5614 3.24328 72.3097 3.17004 69.0872 3.17004C68.0355 4.05965 67.1386 5.11904 66.4334 6.30474C62.6422 12.7646 60.0127 19.8347 56.1972 26.2799C55.0549 28.233 52.9844 29.3511 51.0888 30.4644C53.2225 30.3228 55.3612 30.2202 57.4998 30.2495C56.9117 31.1919 56.4305 32.2758 55.5021 32.9399C52.7851 33.2133 50.0243 33.0522 47.2927 32.9838C48.6682 31.2456 50.6951 30.0933 51.8179 28.1353C55.7063 21.5876 58.5108 14.4637 62.2679 7.81838C63.4733 5.59675 65.6703 4.21494 67.8867 3.16028C63.3713 3.27746 58.851 3.0968 54.3405 3.24328C52.6393 3.24328 51.463 4.61044 50.0875 5.39655C51.0682 3.75029 52.2888 2.26083 53.7086 0.977708Z"
                    fill="#263740"/>
                <path d="M73.3061 13.3017C77.6514 5.25986 86.517 -1.073 95.9366 0.152556C97.91 0.342982 96.447 2.54508 95.3874 3.00894C92.4419 4.51769 89.2729 2.33024 86.2691 2.1447C83.4305 3.0187 81.2044 5.18174 79.6685 7.67192C77.0001 11.9882 74.9781 16.6561 72.4069 21.031C72.0813 21.5779 72.193 22.6325 73.0436 22.0075C74.9295 19.4441 77.316 17.3006 79.7171 15.2401C81.4766 13.8974 83.3673 12.3886 85.6469 12.2031C87.3773 12.1738 88.0772 14.2587 87.5134 15.6649C86.026 20.2302 82.9105 24.0094 81.0149 28.3844C80.7086 29.2242 80.1157 30.4253 81.1412 31.021C83.0611 31.2261 84.3394 29.4976 85.8754 28.6431C85.0977 30.2984 83.4451 31.2505 81.987 32.2515C80.7816 32.9741 79.1679 33.936 77.841 32.9399C76.6842 32.0561 76.898 30.3911 77.3014 29.1705C78.8082 24.776 81.8946 21.1433 83.7708 16.9051C84.1061 16.1483 84.4853 14.6835 83.3576 14.3905C81.3502 14.4393 79.8143 15.9872 78.3562 17.1932C73.6852 21.5193 69.374 26.4117 66.6278 32.2173C66.0008 33.6821 64.0371 32.8032 62.8171 32.9546C66.1028 26.3141 69.8163 19.864 73.3061 13.3017Z"
                    fill="#263740"/>
                <path d="M99.475 13.4728C101.463 12.4962 103.849 11.7247 106.008 12.6036C107.281 13.0919 107.524 14.7374 107.038 15.875C106.28 17.6426 104.729 18.9023 103.305 20.1181C99.6986 22.9745 95.7908 25.411 91.9267 27.8865C92.3738 29.4538 93.4675 31.0212 95.2707 30.9968C98.1141 31.4069 100.267 29.283 102.561 27.989C101.157 30.0056 98.955 31.2604 96.8309 32.3835C94.7069 33.5065 91.7954 33.9801 89.8561 32.2126C87.7758 30.2595 88.257 27.0271 89.1659 24.62C91.2354 19.8314 94.8732 15.8979 99.475 13.4728ZM98.5661 14.6495C94.391 17.3203 92.2475 22.3739 91.8975 27.2029C95.2999 25.0594 98.7411 22.9306 101.619 20.1035C102.858 18.7998 104.229 16.9688 103.587 15.0792C102.625 13.2091 100.044 13.795 98.5661 14.6495Z"
                    fill="#263740"/>
                <path d="M8.37951 38.7357C17.7408 33.3989 29.6491 34.6684 39.0687 39.2191C39.1757 42.8616 39.025 46.5431 39.2486 50.1612C37.9411 47.1242 34.8304 42.5393 31.0246 40.1907C25.3281 36.392 17.177 35.3959 11.1792 39.1214C5.74511 42.5149 4.97716 51.1963 9.78905 55.4638C14.601 59.7313 20.7884 61.5867 26.4849 64.1453C32.1717 66.528 38.709 69.7018 40.6338 76.0981C42.8988 83.7445 38.2036 92.0548 31.1315 95.1407C21.1578 99.6963 9.29814 96.8594 0.262467 91.4152C0.131234 86.967 0.213862 82.5189 0 78.0707C2.09002 82.5287 5.66249 89.4475 11.218 92.631C17.3666 96.2735 26.2273 97.3916 31.9724 92.4015C36.376 88.6418 36.6288 81.1713 32.4876 77.1577C24.9684 69.7506 13.5025 68.9303 5.54097 62.1727C-1.62827 56.0302 0.301351 43.2131 8.37951 38.7357Z"
                    fill="#263740"/>
                <path d="M272.052 54.3213C280.354 51.0205 284.826 41.9924 284.826 41.9924C284.826 41.9924 284.942 49.4971 284.942 53.2226L298.707 53.4277C298.707 53.4277 298.707 54.1894 298.707 54.4043C295.99 54.5214 291.966 54.541 291.966 54.541C291.966 54.541 288.077 54.4922 284.957 54.4922C284.957 64.5212 284.932 74.4771 284.957 84.5159C284.908 87.5725 285.618 91.4786 288.845 92.67C292.962 94.1348 296.7 91.1808 299.49 88.4953C299.631 88.798 299.893 89.3986 300.024 89.7013C296.996 92.7042 293.774 95.8682 289.565 97.0693C286.259 97.997 282.133 97.25 280.193 94.1397C278.157 90.9074 278.133 86.928 278.094 83.2366C278.123 73.6421 278.094 64.0427 278.123 54.4287C276.082 54.4417 274.058 54.4059 272.052 54.3213Z"
                    fill="#263740"/>
                <path d="M90.8914 56.87C94.3861 55.2831 97.8808 53.6718 101.473 52.3389C101.711 56.079 101.653 59.8289 101.546 63.5691C105.04 55.3808 114.747 50.0635 123.296 53.706C125.27 55.0439 123.296 58.8475 119.573 58.6913C115.709 58.6522 115.165 52.7344 107.364 57.5194C101.774 62.4998 101.045 70.2144 101.628 77.2407C102.25 83.7102 99.4848 92.0401 105.638 96.5518C100.684 96.516 95.7276 96.516 90.7699 96.5518C95.9561 93.0069 94.6583 86.2981 94.7944 80.9271C94.6243 74.5161 95.1152 68.0807 94.5319 61.6844C94.357 59.4823 93.3217 57.8075 90.8914 56.87Z"
                    fill="#263740"/>
                <path d="M222.553 56.8847C226.036 55.2087 229.606 53.719 233.246 52.4219C233.285 55.0927 233.285 57.7928 233.27 60.4539C239.652 55.5712 247.764 50.9327 256.051 53.1933C261.077 54.3115 264.416 59.1551 264.873 64.1355C265.758 72.9244 264.693 81.7962 265.447 90.5997C265.35 93.2071 267.624 94.7744 269.131 96.5518C264.27 96.5159 259.41 96.5159 254.549 96.5518C255.925 94.7842 257.952 93.2217 258.03 90.7804C258.676 83.5296 258.282 76.2055 258.307 68.9303C258.268 64.0476 256.727 58.1883 251.648 56.3915C245.018 53.7695 238.34 57.9393 233.275 61.9676C233.469 71.5181 232.979 81.0882 233.528 90.6095C233.601 93.1827 235.73 94.8184 237.309 96.5518C232.342 96.5159 227.383 96.5159 222.431 96.5518C227.627 92.9923 226.32 86.2981 226.456 80.8587C226.295 74.5112 226.762 68.0905 226.203 61.7283C226.152 60.6452 225.777 59.6028 225.125 58.7382C224.474 57.8737 223.577 57.2275 222.553 56.8847Z"
                    fill="#263740"/>
                <path d="M56.0902 56.6407C63.6191 51.4064 75.0753 50.8644 81.9335 57.5391C84.8206 60.2588 86.0163 64.1796 86.5072 68.0125C75.2065 68.0516 63.9058 68.0125 52.61 68.0125C52.1532 73.9889 52.7996 80.4439 56.654 85.2924C61.5145 91.6399 70.8126 93.4416 78.0402 90.4241C81.6467 89.1155 84.0624 85.9271 87.3675 84.1254C84.4927 89.2099 80.1013 93.2593 74.8128 95.7023C65.3494 99.2765 54.214 95.7951 49.1494 87.4017C43.1418 77.3482 46.2525 63.2079 56.0902 56.6407ZM52.9794 66.743C61.8499 66.7186 70.7057 66.7772 79.5664 66.7186C78.1082 59.8535 72.193 53.3351 64.6981 54.3214C58.1121 54.6876 54.1751 60.8496 52.9794 66.743Z"
                    fill="#263740"/>
                <path d="M127.588 56.8114C131.044 55.2831 134.505 53.7207 137.999 52.2656C138.17 54.5996 138.242 56.9433 138.276 59.2772C144.921 54.4433 153.801 50.5225 161.928 53.9355C170.273 57.495 173.622 67.4753 172.796 75.9907C172.256 84.5257 166.963 93.0167 158.7 95.8779C151.973 98.5 144.328 97.3818 138.208 93.7003C138.447 100.57 137.912 107.46 138.544 114.3C138.665 116.668 140.712 118.182 141.946 119.974C137.173 119.974 132.395 120.013 127.622 119.974C129.751 117.713 131.511 115.033 131.282 111.771C131.462 95.9365 131.389 80.0873 131.321 64.2527C131.598 61.1766 130.68 57.7489 127.588 56.8114ZM138.228 60.8494C138.277 67.1383 138.228 73.4419 138.228 79.7406C137.081 90.8781 151.585 99.8476 160.839 93.4122C166.487 89.2033 167.026 81.2787 166.395 74.8091C165.602 67.7633 162.91 59.6336 155.872 56.6649C149.767 53.9257 143.137 57.1288 138.228 60.8494Z"
                    fill="#263740"/>
                <path d="M187.091 57.0899C194.644 51.4113 206.533 50.6642 213.614 57.5196C216.487 60.249 217.683 64.1698 218.164 67.993C206.878 68.032 195.577 67.993 184.276 67.993C183.819 73.945 184.456 80.3511 188.262 85.185C193.122 91.6057 202.445 93.4465 209.687 90.4192C213.289 89.1058 215.709 85.9076 219.024 84.1059C216.164 89.1856 211.795 93.2402 206.528 95.7023C197.132 99.2862 186.925 95.9757 181.851 87.597C175.975 77.7584 177.753 63.8817 187.091 57.0899ZM184.636 66.743C193.492 66.743 202.352 66.7772 211.208 66.7186C209.75 59.8535 203.835 53.3253 196.33 54.3214C189.783 54.6876 185.832 60.8496 184.636 66.743Z"
                    fill="#263740"/>
              </g>
              <defs>
                <clipPath id="clip0_1001_68">
                  <rect width="300" height="120" fill="white"/>
                </clipPath>
              </defs>
            </svg>
          </div>
          <div class="surprise-banner__line"></div>
          <div class="surprise-banner__title">Подарочный сертификат</div>
          <div class="surprise-banner__description">Подари близкому человеку приятные ощущения комфорта.
            Прикоснитесь к лету с идеальным образом!
          </div>
          <a href="<?php echo $arSettings["LINK_STATIC"]["catalog"];?>cert/" class="btn">Купить сертификат</a>
        </div>
      </div>
      <div class="sale-block">
        <div class="sale-block__price">500 ₽</div>
        <div class="sale-block__title">скидка на первую покупку при регистрации на сайте</div>
        <!--<div class="sale-block__description">Подпишитесь на рассылку новостей, чтобы получить информацию о
          новостях и акциях
        </div>-->
        <?php if($USER->IsAuthorized()):?>
          <a href="/cabinet/" class="btn btn_white">Перейти в личный кабинет</a>
        <?php else:?>
          <a href="" class="btn btn_white auth-event">Зарегистрироваться</a>
        <?php endif;?>
        <!--<form action="" class="sale-form">
          <input type="text" placeholder="e-mail" class="sale-input">
          <button class="btn btn_white">Подписаться</button>
        </form>-->
      </div>
    </div>
    <div class="journal section">
      <div class="section-top mb-60">
        <div class="section-top__flex">
          <div class="title">Журнал</div>
          <div class="journal-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="150" height="60" viewBox="0 0 150 60"
               fill="none">
              <g clip-path="url(#clip0_577_2536)">
                <path d="M26.8544 0.488976C27.4474 0.0153539 28.2494 0.147187 28.9493 0.117891C32.9762 0.1716 37.0104 0.0373261 41.0349 0.186248C40.5732 0.706256 40.1916 1.55096 39.4042 1.58514C37.7808 1.62176 36.155 1.58514 34.5437 1.58514C34.0179 2.02995 33.5694 2.55964 33.2168 3.15249C31.3212 6.3824 30.0065 9.91748 28.0987 13.1401C27.5276 14.1166 26.4923 14.6757 25.5445 15.2323C26.6114 15.1615 27.6807 15.1102 28.75 15.1249C28.456 15.5961 28.2154 16.138 27.7512 16.4701C26.3927 16.6068 25.0123 16.5262 23.6465 16.492C24.3342 15.6229 25.3477 15.0468 25.909 14.0678C27.8533 10.7939 29.2555 7.23199 31.1341 3.90931C31.7368 2.79849 32.8353 2.10759 33.9435 1.58026C31.6858 1.63885 29.4256 1.54852 27.1704 1.62176C26.3198 1.62176 25.7316 2.30534 25.0439 2.6984C25.5342 1.87527 26.1445 1.13054 26.8544 0.488976Z"
                    fill="#263740"/>
                <path d="M36.6527 6.65072C38.8253 2.62981 43.2581 -0.536623 47.9679 0.076156C48.9546 0.171369 48.2231 1.27242 47.6933 1.50435C46.2206 2.25872 44.6361 1.165 43.1342 1.07223C41.7149 1.50923 40.6018 2.59075 39.8339 3.83584C38.4997 5.99399 37.4887 8.32793 36.2031 10.5154C36.0403 10.7888 36.0962 11.3161 36.5215 11.0036C37.4644 9.72194 38.6576 8.65018 39.8582 7.61993C40.7379 6.94856 41.6833 6.19418 42.8231 6.10141C43.6883 6.08676 44.0382 7.12922 43.7563 7.83233C43.0127 10.115 41.4549 12.0046 40.5071 14.1921C40.354 14.612 40.0575 15.2125 40.5703 15.5104C41.5302 15.6129 42.1694 14.7487 42.9373 14.3214C42.5485 15.1491 41.7222 15.6251 40.9931 16.1256C40.3904 16.4869 39.5836 16.9679 38.9201 16.4698C38.3417 16.028 38.4486 15.1954 38.6504 14.5851C39.4037 12.3879 40.9469 10.5715 41.885 8.45243C42.0527 8.07403 42.2423 7.34162 41.6784 7.19514C40.6748 7.21955 39.9068 7.99346 39.1777 8.59647C36.8422 10.7595 34.6866 13.2057 33.3135 16.1085C33 16.8409 32.0182 16.4015 31.4082 16.4772C33.0511 13.1569 34.9078 9.93189 36.6527 6.65072Z"
                    fill="#263740"/>
                <path d="M49.7385 6.73626C50.7325 6.24799 51.9257 5.86225 53.0048 6.3017C53.6415 6.54583 53.763 7.36857 53.52 7.9374C53.1409 8.82117 52.3656 9.45104 51.6535 10.0589C49.8503 11.4871 47.8964 12.7054 45.9643 13.9431C46.1879 14.7268 46.7347 15.5105 47.6363 15.4983C49.058 15.7033 50.1346 14.6414 51.2817 13.9944C50.5794 15.0027 49.4785 15.6301 48.4164 16.1916C47.3544 16.7531 45.8987 16.9899 44.929 16.1062C43.8889 15.1296 44.1295 13.5135 44.5839 12.3099C45.6187 9.91557 47.4376 7.94885 49.7385 6.73626ZM49.284 7.32462C47.1965 8.66004 46.1247 11.1868 45.9497 13.6013C47.6509 12.5296 49.3715 11.4652 50.8102 10.0516C51.43 9.39977 52.1153 8.48426 51.7945 7.53946C51.3133 6.60442 50.0228 6.89739 49.284 7.32462Z"
                    fill="#263740"/>
                <path d="M4.18975 19.3686C8.87042 16.7002 14.8245 17.3349 19.5344 19.6103C19.5878 21.4315 19.5125 23.2723 19.6243 25.0813C18.9705 23.5628 17.4152 21.2704 15.5123 20.0961C12.664 18.1967 8.58851 17.6987 5.58958 19.5614C2.87256 21.2582 2.48858 25.5989 4.89453 27.7326C7.30048 29.8664 10.3942 30.7941 13.2424 32.0734C16.0858 33.2647 19.3545 34.8516 20.3169 38.0498C21.4494 41.873 19.1018 46.0281 15.5658 47.5711C10.5789 49.8489 4.64907 48.4304 0.131234 45.7083C0.0656168 43.4843 0.106931 41.2602 0 39.0361C1.04501 41.2651 2.83124 44.7245 5.60902 46.3162C8.68329 48.1375 13.1136 48.6965 15.9862 46.2015C18.188 44.3216 18.3144 40.5864 16.2438 38.5796C12.4842 34.876 6.75124 34.4659 2.77049 31.0871C-0.814134 28.0158 0.150675 21.6073 4.18975 19.3686Z"
                    fill="#263740"/>
                <path d="M136.027 27.1605C140.178 25.5102 142.414 20.9961 142.414 20.9961C142.414 20.9961 142.472 24.7485 142.472 26.6112L149.355 26.7137C149.355 26.7137 149.355 27.0946 149.355 27.202C147.996 27.2606 145.984 27.2704 145.984 27.2704C145.984 27.2704 144.04 27.246 142.48 27.246C142.48 32.2605 142.468 37.2384 142.48 42.2578C142.455 43.7861 142.81 45.7392 144.424 46.3349C146.482 47.0673 148.351 45.5903 149.746 44.2475C149.817 44.3989 149.948 44.6992 150.013 44.8505C148.499 46.352 146.888 47.934 144.784 48.5345C143.131 48.9984 141.068 48.6249 140.098 47.0697C139.08 45.4536 139.068 43.4639 139.048 41.6182C139.063 36.8209 139.048 32.0212 139.063 27.2142C138.042 27.2207 137.03 27.2028 136.027 27.1605Z"
                    fill="#263740"/>
                <path d="M45.4455 28.4335C47.1929 27.6401 48.9402 26.8345 50.7362 26.168C50.8553 28.038 50.8261 29.913 50.7726 31.7831C52.52 27.6889 57.3732 25.0303 61.648 26.8515C62.6347 27.5205 61.648 29.4223 59.7864 29.3442C57.8544 29.3246 57.5822 26.3657 53.6816 28.7582C50.8869 31.2484 50.5223 35.1058 50.8139 38.6189C51.125 41.8537 49.7422 46.0186 52.8189 48.2744C50.3417 48.2565 47.8636 48.2565 45.3848 48.2744C47.9778 46.502 47.329 43.1476 47.397 40.4621C47.312 37.2566 47.5574 34.0389 47.2658 30.8407C47.1783 29.7397 46.6606 28.9023 45.4455 28.4335Z"
                    fill="#263740"/>
                <path d="M111.276 28.4423C113.017 27.6043 114.802 26.8595 116.622 26.2109C116.642 27.5464 116.642 28.8964 116.634 30.227C119.825 27.7856 123.881 25.4663 128.025 26.5967C130.538 27.1557 132.207 29.5776 132.436 32.0677C132.878 36.4622 132.346 40.8981 132.723 45.2999C132.674 46.6035 133.811 47.3872 134.565 48.2759C132.134 48.258 129.704 48.258 127.274 48.2759C127.962 47.3921 128.975 46.6109 129.014 45.3902C129.337 41.7648 129.14 38.1028 129.153 34.4651C129.133 32.0238 128.363 29.0942 125.823 28.1958C122.508 26.8847 119.169 28.9697 116.637 30.9838C116.734 35.7591 116.488 40.5441 116.763 45.3048C116.8 46.5913 117.864 47.4092 118.654 48.2759C116.17 48.258 113.69 48.258 111.215 48.2759C113.813 46.4961 113.159 43.149 113.227 40.4294C113.147 37.2556 113.38 34.0452 113.101 30.8642C113.075 30.3226 112.888 29.8014 112.562 29.3691C112.236 28.9368 111.788 28.6138 111.276 28.4423Z"
                    fill="#263740"/>
                <path d="M28.0454 28.3213C31.8098 25.7042 37.538 25.4332 40.967 28.7705C42.4106 30.1304 43.0084 32.0908 43.2539 34.0072C37.6036 34.0268 31.9532 34.0072 26.3053 34.0072C26.0769 36.9954 26.4001 40.2229 28.3273 42.6472C30.7575 45.8209 35.4066 46.7218 39.0204 45.213C40.8237 44.5588 42.0315 42.9645 43.6841 42.0637C42.2466 44.6059 40.0509 46.6306 37.4067 47.8521C32.675 49.6392 27.1073 47.8985 24.575 43.7018C21.5712 38.6751 23.1266 31.6049 28.0454 28.3213ZM26.49 33.3725C30.9252 33.3603 35.3532 33.3896 39.7835 33.3603C39.0544 29.9277 36.0968 26.6685 32.3494 27.1617C29.0564 27.3448 27.0879 30.4258 26.49 33.3725Z"
                    fill="#263740"/>
                <path d="M63.7949 28.4057C65.5228 27.6416 67.2532 26.8603 69.0005 26.1328C69.0856 27.2998 69.122 28.4716 69.139 29.6386C72.4612 27.2217 76.9013 25.2612 80.9646 26.9678C85.1374 28.7475 86.8118 33.7376 86.3987 37.9953C86.1289 42.2628 83.4824 46.5083 79.351 47.939C75.9875 49.25 72.1647 48.6909 69.105 46.8501C69.2241 50.2851 68.9568 53.7299 69.2727 57.1502C69.3335 58.3342 70.3566 59.0911 70.9739 59.987C68.5874 59.987 66.1984 60.0066 63.8119 59.987C64.8764 58.8567 65.7561 57.5164 65.6419 55.8856C65.7318 47.9683 65.6954 40.0436 65.6614 32.1263C65.7999 30.5883 65.3406 28.8745 63.7949 28.4057ZM69.1147 30.4247C69.139 33.5692 69.1147 36.721 69.1147 39.8703C68.5412 45.439 75.7931 49.9238 80.4203 46.7061C83.2442 44.6016 83.514 40.6393 83.1981 37.4045C82.8019 33.8817 81.4556 29.8168 77.9366 28.3325C74.8842 26.9629 71.5693 28.5644 69.1147 30.4247Z"
                    fill="#263740"/>
                <path d="M93.5446 28.5438C97.3212 25.7046 103.266 25.331 106.806 28.7587C108.243 30.1234 108.841 32.0838 109.081 33.9954C103.438 34.0149 97.7878 33.9954 92.1375 33.9954C91.909 36.9714 92.2274 40.1744 94.1303 42.5914C96.5605 45.8018 101.222 46.7222 104.843 45.2085C106.644 44.5518 107.854 42.9527 109.511 42.0518C108.081 44.5917 105.897 46.619 103.263 47.8501C98.5655 49.642 93.462 47.9868 90.9248 43.7974C87.9866 38.8781 88.8761 31.9398 93.5446 28.5438ZM92.3173 33.3704C96.7452 33.3704 101.176 33.3875 105.603 33.3582C104.874 29.9256 101.917 26.6616 98.1645 27.1596C94.8909 27.3427 92.9151 30.4237 92.3173 33.3704Z"
                    fill="#263740"/>
              </g>
              <defs>
                <clipPath id="clip0_577_2536">
                  <rect width="150" height="60" fill="white"/>
                </clipPath>
              </defs>
            </svg>
          </div>
        </div>
        <a href="/articles/" class="link-all">
          все статьи
          <span class="link-all__icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="9" height="14" viewBox="0 0 9 14" fill="none">
              <path d="M0.897903 13.0747L7.00006 6.99994L0.899482 0.923639" stroke="#263740"
                  stroke-width="2"/>
            </svg>
          </span>
        </a>
      </div>
      <div class="slider-container">
        <div class="swiper-button-prev swiper-arrow">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="31" viewBox="0 0 32 31" fill="none">
            <path d="M2.82874 16.0006L32.0002 16.002" stroke="#263740" stroke-linejoin="round"/>
            <path d="M8.10234 9.88823L2.00018 15.963L8.10076 22.0393" stroke="#263740" stroke-width="2"/>
          </svg>
        </div>
        <?php
        $APPLICATION->IncludeComponent(
          "bitrix:news.list",
          "articles_1",
          [
            "DISPLAY_DATE" => "Y",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "AJAX_MODE" => "Y",
            "IBLOCK_TYPE" => "content",
            "IBLOCK_ID" => $arSettings["IB"]["articles_1"],
            "NEWS_COUNT" => 4,
            "SORT_BY1" => "ACTIVE_FROM",
            "SORT_ORDER1" => "ASC",
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
        <div class="swiper-button-next swiper-arrow">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="31" viewBox="0 0 32 31" fill="none">
            <path d="M29.1713 16.0006L-0.000242786 16.002" stroke="#263740" stroke-linejoin="round"/>
            <path d="M23.8977 9.88823L29.9998 15.963L23.8992 22.0393" stroke="#263740" stroke-width="2"/>
          </svg>
        </div>
      </div>
    </div>
    <div id="brand_section" class="brand section">
      <div class="brand-content">
        <div class="title mb-40">
          О бренде
        </div>
        <p>В названии бренда заложен смысл обновления и трансформации.</p><br>

        <p>Мы верим, что сила женщины в непостоянстве ее образов.</p><br>

        <p>Мы видим свою миссию в создании уникальных моделей купальников, которые выделяют женщину «из толпы». Мы создаем тренды в пляжной моде, используем плотные итальянские ткани, которые не выгорают, приятны к телу, подчеркивают фигуру и придают женственности.
        Быть нежной и романтичной или уверенной и шикарной — решать только вам, а <b>The Serpent</b> поможет создать правильное настроение.</p><br>

        <p>Экзотический пляж, прогулка на яхте, отдых в спа или просто фотосессия – в любом случае вы будете неповторимы.</p><br>

        <p>«Женское тело для меня всегда было объектом восхищения. Я уверена, что каждая женщина красива, просто иногда надо выделить то, что подарила природа. Купальники <b>The Serpent</b> подчеркивают форму и объемы, рельефы тела, скрывают то, что не хочется показывать».</p><br>

        <p><b>The Serpent</b> – это выбор успешных уверенных в себе женщин, которые ценят высокое качество, внутреннюю свободу и получают удовольствие от каждого дня!</p><br>
        <a href="/brand/">Подробнее...</a>
      </div>
      <div class="brand-video">
        <a href="https://www.youtube.com/watch?v=F5BSJLFyX5U" data-fancybox="video-gallery" class="video">
          <span class="play-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="26" viewBox="0 0 22 26" fill="none">
              <path d="M21 13L1.5 24.2583L1.5 1.74167L21 13Z" stroke="white" stroke-width="2"/>
            </svg>
          </span>
          <picture>
            <source srcset="<?=SITE_TEMPLATE_PATH;?>/img/main/brand-tablet.jpg" media="(max-width: 1300px)">
            <img src="<?=SITE_TEMPLATE_PATH;?>/img/main/brand.jpg" alt="">
          </picture>
        </a>
      </div>
    </div>
  </div>
</main>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>

