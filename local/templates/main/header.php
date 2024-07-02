<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>
<?php
  use Bitrix\Main\Localization\Loc;
  use Bitrix\Main\Page\Asset;
  
  //Наше
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/general.css");
  //От версталы
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/main.css");
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/main-2.min.css");

  //Jquery
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/jquery-3.5.1.min.js");
  
  //От версталы
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/common.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/fancybox.umd.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/nouislider.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/slimselect.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/swiper-bundle.min.js");
  //Наше
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/functions.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/main.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/auth.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/question.js");

  //Конструктор настроек
  $APPLICATION->IncludeComponent(
    "swf:designer",
    "settings",
    [
      "IB"=>$arSettings["IB"]["designer_settings"],
    ],
  );
  
  //Закрытие сайта для неавторизированных пользователей
  // if (!$USER->IsAuthorized()) {
    // echo "<div class='cast_tech_work_cap_1'>";
      // echo "<div>";
        // echo "Внимание! В связи с переходом на новый сайт - проводятся финальные релизные технические работы.<br> Некоторое время сайт будет недоступен для пользователей. <br>Благодарим за понимание и приносим извинения за доставленные неудобства."; 
      // echo "</div>";
    // echo "</div>";
    
    // die;
  // }
  
?>

<?php 

$homePageClass = '';
$url = substr(basename($_SERVER['REQUEST_URI']), 0, -1);
if (!$url)
  $homePageClass = 'home-page';
?>

<?php
  $headerClass = "";
  $headersWhite = ""; //["/" => "class='header-white'","article_" => "class='header-white'","kupalnik" => "class='header-white'"];

  $lastPartUrl = basename($_SERVER['REQUEST_URI']);
  if($lastPartUrl != "")
    $headerUrl = substr($lastPartUrl, 0, -1);
  else
    $headerUrl = $_SERVER['REQUEST_URI'];

  if(isset($headersWhite[$headerUrl]))
    $headerClass = $headersWhite[$headerUrl];

  if($headerUrl=="/")
    $tag = "div";
  else
    $tag = "a";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=yes"/>
    <?php $APPLICATION->ShowHead();?>
    <title><?php $APPLICATION->ShowTitle()?></title>
    <?//favicon start?>
    <link rel="apple-touch-icon" sizes="57x57" href="<?=SITE_TEMPLATE_PATH;?>/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?=SITE_TEMPLATE_PATH;?>/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?=SITE_TEMPLATE_PATH;?>/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?=SITE_TEMPLATE_PATH;?>/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?=SITE_TEMPLATE_PATH;?>/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?=SITE_TEMPLATE_PATH;?>/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?=SITE_TEMPLATE_PATH;?>/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?=SITE_TEMPLATE_PATH;?>/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?=SITE_TEMPLATE_PATH;?>/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?=SITE_TEMPLATE_PATH;?>/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=SITE_TEMPLATE_PATH;?>/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?=SITE_TEMPLATE_PATH;?>/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=SITE_TEMPLATE_PATH;?>/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?=SITE_TEMPLATE_PATH;?>/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?=SITE_TEMPLATE_PATH;?>/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <?php //favicon end?>
  </head>
  <body>
  <!--<div class="cast_tech_work_cap_1">
    <div>
      Внимание! В связи с переходом на новый сайт - проводятся финальные релизные технические работы. Некоторый функционал может быть не доступен или работать некорректно. Постепенно - весь функционал поднимется и заработает как надо. Приносим извинения за доставленные неудобства.
    </div>
  </div>-->
  <header <?php echo $headerClass;?> class="<? echo $homePageClass ?>">
    <div class="container">
      <div class="header-top">
        <div class="cast_header_top_left_block">
          <div class="cast_flex_valign_center_phone">
            <!-- <a href="tel:<?php echo Loc::getMessage("TITLE_PHONE_TEL");?>" class="header-phone">
              <?php echo Loc::getMessage("TITLE_PHONE");?>
            </a> -->
            <div class="header__block">
              <a href="">Новинки</a>
              <div class="header-menu">
               <a href="/catalog"><span>каталог</span></a> 
                <!-- <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1 1L5 5L9 1" stroke="#263740" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg> -->
                <!-- <div class="drop-menu">
                  <div class="drop-menu__content">
                    <div class="drop-menu__column">
                      <h3 class="drop-menu__title">
                        купальники
                      </h3>
                      <ul class="drop-menu__list">
                        <li>
                          <a href="">
                            Все купальники
                          </a>
                        </li>
                        <li>
                          <a href="">
                            Верх
                          </a>
                        </li>
                        <li>
                          <a href="">
                            Низ
                          </a>
                        </li>
                        <li>
                          <a href="">
                            Слитные
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="drop-menu__column">
                      <h3 class="drop-menu__title">
                        Одежда
                      </h3>
                      <ul class="drop-menu__list">
                        <li>
                          <a href="">
                            Вся одежда
                          </a>
                        </li>
                        <li>
                          <a href="">
                            Юбки
                          </a>
                        </li>
                        <li>
                          <a href="">
                            Палантины
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="drop-menu__column">
                      <h3 class="drop-menu__title">
                        Коллекции
                      </h3>
                      <ul class="drop-menu__list">
                        <li>
                          <a href="">
                            Коллекция 1
                          </a>
                        </li>
                        <li>
                          <a href="">
                            Коллекция 2
                          </a>
                        </li>
                        <li>
                          <a href="">
                            Коллекция 3
                          </a>
                        </li>
                        <li>
                          <a href="">
                            Коллекция 4
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div> -->
              </div>
              <div class="header-menu">
                <span>о бренде</span>
                <!-- <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1 1L5 5L9 1" stroke="#263740" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg> -->
                <!-- <div class="drop-menu">
                  <div class="drop-menu__content">
                    <div class="drop-menu__column">
                      <h3 class="drop-menu__title">
                        купальники
                      </h3>
                      <ul class="drop-menu__list">
                        <li>
                          <a href="">
                            Все купальники
                          </a>
                        </li>
                        <li>
                          <a href="">
                            Верх
                          </a>
                        </li>
                        <li>
                          <a href="">
                            Низ
                          </a>
                        </li>
                        <li>
                          <a href="">
                            Слитные
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="drop-menu__column">
                      <h3 class="drop-menu__title">
                        Одежда
                      </h3>
                      <ul class="drop-menu__list">
                        <li>
                          <a href="">
                            Вся одежда
                          </a>
                        </li>
                        <li>
                          <a href="">
                            Юбки
                          </a>
                        </li>
                        <li>
                          <a href="">
                            Палантины
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="drop-menu__column">
                      <h3 class="drop-menu__title">
                        Коллекции
                      </h3>
                      <ul class="drop-menu__list">
                        <li>
                          <a href="">
                            Коллекция 1
                          </a>
                        </li>
                        <li>
                          <a href="">
                            Коллекция 2
                          </a>
                        </li>
                        <li>
                          <a href="">
                            Коллекция 3
                          </a>
                        </li>
                        <li>
                          <a href="">
                            Коллекция 4
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div> -->
              </div>
              <a href="">Компании</a>
              <a href="">Скидки</a>
            </div>
          </div>
          <div class="cast_flex_valign_center_burger">
            <div class="header-burger">
              <div class="line"></div>
              <div class="line"></div>
              <div class="line"></div>
            </div>
          </div>
          <<?php echo $tag;?> href="/" class="header-logo">
            <svg width="135" height="54" viewBox="0 0 135 54" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M24.1625 0.441641C24.6962 0.015381 25.418 0.134031 26.0479 0.107664C29.6722 0.156003 33.303 0.0351559 36.925 0.169186C36.5094 0.637193 36.166 1.39743 35.4574 1.42819C33.9963 1.46115 32.533 1.42819 31.0829 1.42819C30.6096 1.82851 30.206 2.30524 29.8887 2.8388C28.1827 5.74572 26.9994 8.92729 25.2824 11.8276C24.7684 12.7065 23.8366 13.2097 22.9836 13.7106C23.9438 13.6469 24.9062 13.6008 25.8686 13.614C25.6039 14.038 25.3874 14.5258 24.9696 14.8246C23.747 14.9477 22.5046 14.8752 21.2754 14.8444C21.8944 14.0622 22.8064 13.5436 23.3117 12.6626C25.0615 9.71609 26.3235 6.51035 28.0142 3.51994C28.5567 2.52021 29.5453 1.8984 30.5427 1.4238C28.5107 1.47653 26.4766 1.39523 24.4469 1.46115C23.6813 1.46115 23.152 2.07637 22.533 2.43012C22.9744 1.6893 23.5236 1.01905 24.1625 0.441641Z" />
            <path d="M32.9818 5.9876C34.9371 2.36878 38.9266 -0.481008 43.1655 0.0704935C44.0535 0.156185 43.3951 1.14713 42.9183 1.35587C41.5929 2.03481 40.1668 1.05045 38.8151 0.966958C37.5377 1.36026 36.536 2.33363 35.8448 3.45421C34.644 5.39655 33.7342 7.49709 32.5771 9.46579C32.4306 9.71188 32.4809 10.1865 32.8636 9.90524C33.7123 8.7517 34.7862 7.78712 35.8667 6.85989C36.6585 6.25566 37.5093 5.57672 38.5351 5.49322C39.3138 5.48004 39.6287 6.41825 39.375 7.05105C38.7057 9.10545 37.3037 10.8061 36.4507 12.7748C36.3129 13.1527 36.0461 13.6932 36.5076 13.9613C37.3715 14.0536 37.9468 13.2758 38.6379 12.8913C38.288 13.6361 37.5443 14.0646 36.8881 14.515C36.3457 14.8402 35.6195 15.273 35.0224 14.8248C34.5019 14.4271 34.5981 13.6779 34.7797 13.1286C35.4577 11.1511 36.8466 9.51633 37.6909 7.60914C37.8418 7.26858 38.0124 6.60941 37.5049 6.47758C36.6016 6.49955 35.9105 7.19607 35.2543 7.73878C33.1524 9.68551 31.2123 11.8871 29.9765 14.4996C29.6944 15.1588 28.8107 14.7633 28.2617 14.8314C29.7403 11.8432 31.4113 8.94066 32.9818 5.9876Z" />
            <path d="M44.7584 6.06419C45.653 5.62475 46.7269 5.27759 47.698 5.67309C48.2711 5.89281 48.3804 6.63327 48.1617 7.14522C47.8205 7.94062 47.1228 8.5075 46.4819 9.05461C44.859 10.34 43.1005 11.4364 41.3616 12.5504C41.5629 13.2557 42.055 13.961 42.8664 13.95C44.146 14.1346 45.1149 13.1788 46.1473 12.5965C45.5152 13.504 44.5244 14.0687 43.5685 14.574C42.6127 15.0794 41.3026 15.2925 40.4299 14.4971C39.4937 13.6182 39.7103 12.1637 40.1193 11.0804C41.0506 8.92558 42.6876 7.15553 44.7584 6.06419ZM44.3494 6.59372C42.4706 7.7956 41.506 10.0697 41.3485 12.2428C42.8796 11.2782 44.4281 10.3202 45.723 9.04801C46.2807 8.46136 46.8975 7.6374 46.6088 6.78708C46.1757 5.94554 45.0143 6.20921 44.3494 6.59372Z" />
            <path d="M3.76492 17.4331C7.97752 15.0315 13.3362 15.6028 17.5751 17.6506C17.6232 19.2897 17.5554 20.9464 17.656 22.5746C17.0676 21.2079 15.6678 19.1447 13.9552 18.0879C11.3918 16.3784 7.7238 15.9302 5.02476 17.6067C2.57944 19.1337 2.23386 23.0404 4.39921 24.9607C6.56457 26.8811 9.34891 27.7161 11.9123 28.8674C14.4714 29.9396 17.4132 31.3678 18.2794 34.2462C19.2986 37.687 17.1857 41.4267 14.0033 42.8153C9.51514 44.8653 4.1783 43.5888 0.112251 41.1389C0.0531957 39.1372 0.0903786 37.1355 -0.00585938 35.1339C0.934648 37.1399 2.54226 40.2534 5.04226 41.686C7.8091 43.3251 11.7964 43.8283 14.3817 41.5827C16.3633 39.8908 16.4771 36.5291 14.6136 34.723C11.2299 31.3898 6.07026 31.0207 2.48758 27.9797C-0.73858 25.2156 0.129748 19.4479 3.76492 17.4331Z" />
            <path d="M122.418 24.4464C126.154 22.9611 128.166 18.8984 128.166 18.8984C128.166 18.8984 128.218 22.2756 128.218 23.952L134.413 24.0443C134.413 24.0443 134.413 24.3871 134.413 24.4838C133.19 24.5365 131.379 24.5453 131.379 24.5453C131.379 24.5453 129.629 24.5233 128.225 24.5233C128.225 29.0364 128.214 33.5165 128.225 38.034C128.203 39.4095 128.523 41.1672 129.975 41.7033C131.827 42.3625 133.509 41.0332 134.765 39.8247C134.828 39.961 134.946 40.2312 135.005 40.3674C133.643 41.7187 132.193 43.1425 130.299 43.683C128.811 44.1005 126.954 43.7643 126.082 42.3647C125.165 40.9102 125.154 39.1194 125.137 37.4583C125.15 33.1408 125.137 28.8211 125.15 24.4947C124.231 24.5006 123.321 24.4845 122.418 24.4464Z" />
            <path d="M40.8945 25.5927C42.4671 24.8786 44.0398 24.1536 45.6561 23.5537C45.7633 25.2368 45.737 26.9242 45.6889 28.6073C47.2615 24.9226 51.6294 22.5298 55.4768 24.1689C56.3648 24.771 55.4768 26.4826 53.8013 26.4123C52.0625 26.3947 51.8175 23.7317 48.307 25.885C45.7917 28.1261 45.4636 31.5977 45.7261 34.7595C46.0061 37.6708 44.7615 41.4193 47.5306 43.4495C45.3011 43.4334 43.0708 43.4334 40.8398 43.4495C43.1736 41.8543 42.5896 38.8354 42.6509 36.4184C42.5743 33.5335 42.7952 30.6375 42.5328 27.7592C42.454 26.7682 41.9881 26.0146 40.8945 25.5927Z" />
            <path d="M100.143 25.6001C101.71 24.8459 103.316 24.1755 104.954 23.5918C104.972 24.7937 104.972 26.0087 104.965 27.2062C107.837 25.009 111.488 22.9216 115.217 23.939C117.479 24.4421 118.981 26.6218 119.187 28.8629C119.585 32.8179 119.106 36.8103 119.445 40.7718C119.401 41.9451 120.425 42.6505 121.103 43.4502C118.916 43.4341 116.728 43.4341 114.541 43.4502C115.16 42.6549 116.072 41.9517 116.107 40.8531C116.398 37.5903 116.221 34.2944 116.232 31.0206C116.214 28.8234 115.521 26.1867 113.235 25.3781C110.252 24.1982 107.247 26.0747 104.968 27.8874C105.055 32.1851 104.834 36.4917 105.081 40.7762C105.114 41.9342 106.072 42.6702 106.783 43.4502C104.548 43.4341 102.316 43.4341 100.088 43.4502C102.426 41.8485 101.838 38.8361 101.899 36.3884C101.827 33.532 102.037 30.6427 101.785 27.7797C101.762 27.2923 101.593 26.8232 101.3 26.4342C101.007 26.0451 100.603 25.7543 100.143 25.6001Z" />
            <path d="M25.2348 25.4906C28.6228 23.1351 33.7781 22.8912 36.8643 25.8948C38.1635 27.1187 38.7015 28.8831 38.9225 30.6079C33.8372 30.6254 28.7519 30.6079 23.6687 30.6079C23.4631 33.2973 23.754 36.202 25.4885 38.3838C27.6757 41.2402 31.8599 42.051 35.1123 40.6931C36.7352 40.1042 37.8223 38.6695 39.3096 37.8587C38.0159 40.1467 36.0398 41.9689 33.66 43.0683C29.4015 44.6767 24.3905 43.11 22.1114 39.333C19.408 34.8089 20.8078 28.4458 25.2348 25.4906ZM23.835 30.0366C27.8267 30.0256 31.8118 30.052 35.7991 30.0256C35.1429 26.9363 32.4811 24.003 29.1084 24.4469C26.1447 24.6117 24.373 27.3846 23.835 30.0366Z" />
            <path d="M57.4102 25.5671C58.9653 24.8794 60.5226 24.1763 62.0952 23.5215C62.1718 24.5718 62.2046 25.6264 62.2199 26.6767C65.2098 24.5014 69.2059 22.7371 72.8629 24.2729C76.6184 25.8747 78.1254 30.3658 77.7536 34.1978C77.5108 38.0385 75.1289 41.8595 71.4106 43.147C68.3835 44.3269 64.943 43.8238 62.1892 42.1671C62.2964 45.2586 62.0558 48.3588 62.3402 51.4371C62.3948 52.5028 63.3157 53.1839 63.8712 53.9903C61.7234 53.9903 59.5733 54.0079 57.4255 53.9903C58.3835 52.973 59.1752 51.7667 59.0724 50.299C59.1534 43.1734 59.1206 36.0412 59.0899 28.9157C59.2146 27.5314 58.8012 25.989 57.4102 25.5671ZM62.198 27.3842C62.2199 30.2142 62.198 33.0508 62.198 35.8852C61.6818 40.8971 68.2085 44.9334 72.373 42.0374C74.9145 40.1434 75.1573 36.5773 74.873 33.666C74.5165 30.4955 73.3047 26.8371 70.1376 25.5012C67.3905 24.2685 64.4071 25.7099 62.198 27.3842Z" />
            <path d="M84.1835 25.6926C87.5824 23.1372 92.9324 22.801 96.1192 25.8859C97.4118 27.1142 97.9499 28.8786 98.1664 30.599C93.0877 30.6165 88.0024 30.599 82.9171 30.599C82.7115 33.2774 82.998 36.1601 84.7106 38.3354C86.8978 41.2247 91.0929 42.0531 94.3519 40.6908C95.9726 40.0997 97.0619 38.6606 98.5536 37.8498C97.2665 40.1357 95.3004 41.9602 92.9302 43.0682C88.7023 44.6809 84.1091 43.1912 81.8257 39.4208C79.1813 34.9934 79.9818 28.7489 84.1835 25.6926ZM83.0789 30.0365C87.0641 30.0365 91.0514 30.0519 95.0365 30.0255C94.3803 26.9362 91.7185 23.9985 88.3414 24.4468C85.3952 24.6116 83.617 27.3844 83.0789 30.0365Z" />
          </svg>
          </<?php echo $tag;?>>
        </div>
        <?php
          //Конструктор меню
          $APPLICATION->IncludeComponent(
          "swf:designer",
          "menu_top_2",
            [
              "IB"=>$arSettings["IB"]["designer_menu_top_2"],
              "DESIGNER_MENU"=>"Y",
            ],
          );
        ?>
      </div>
      <div class="header_bottom">
        <div class="header_bottom__container">
          <div class="header_bottom__mobile">
            <?php if (!$USER->IsAuthorized()): ?>
              <a href="" class="btn auth-event">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17" viewBox="0 0 18 17" fill="none">
                  <path d="M8.86976 9.3252C11.1687 9.3252 13.0324 7.46154 13.0324 5.1626C13.0324 2.86366 11.1687 1 8.86976 1C6.57081 1 4.70715 2.86366 4.70715 5.1626C4.70715 7.46154 6.57081 9.3252 8.86976 9.3252Z" stroke="white" stroke-miterlimit="10"/>
                  <path d="M1.3252 17C1.3252 12.7593 4.75934 9.3252 8.99999 9.3252C13.2406 9.3252 16.6748 12.7593 16.6748 17" stroke="white" stroke-miterlimit="10"/>
                </svg>
                Войти в личный кабинет
              </a>
            <?php else:?>
              <a href="/cabinet/page_general/" class="btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17" viewBox="0 0 18 17" fill="none">
                  <path d="M8.86976 9.3252C11.1687 9.3252 13.0324 7.46154 13.0324 5.1626C13.0324 2.86366 11.1687 1 8.86976 1C6.57081 1 4.70715 2.86366 4.70715 5.1626C4.70715 7.46154 6.57081 9.3252 8.86976 9.3252Z" stroke="white" stroke-miterlimit="10"/>
                  <path d="M1.3252 17C1.3252 12.7593 4.75934 9.3252 8.99999 9.3252C13.2406 9.3252 16.6748 12.7593 16.6748 17" stroke="white" stroke-miterlimit="10"/>
                </svg>
                Перейти в личный кабинет
              </a>
            <?php endif;?>
            <a href="tel:<?php echo Loc::getMessage("TITLE_PHONE_TEL");?>" class="phone-mobile">
              <?php echo Loc::getMessage("TITLE_PHONE");?>
              <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34" fill="none">
                <path d="M9.40656 11.0212C9.74289 10.5167 11.1723 8.91911 12.1813 9.0032C12.5176 9.08728 12.7699 9.17136 13.0221 9.42361C13.863 10.2644 14.5356 11.1894 15.1242 12.1984C15.2924 13.2074 14.1152 13.7118 14.5356 14.7208C15.3765 16.907 17.0581 18.5887 19.2443 19.4295C20.2533 19.7658 20.8419 18.5887 21.7668 18.8409C22.7758 19.4295 23.7007 20.1022 24.5415 20.943C24.7938 21.1952 24.9619 21.4475 24.9619 21.7838C24.9619 22.8769 23.2803 24.3904 22.9439 24.5586C22.1872 25.1471 21.1782 25.1471 19.9169 24.5586C16.4695 23.1292 10.9201 17.6638 9.49064 14.0482C8.90206 12.7869 8.90206 11.7779 9.40656 11.0212Z" stroke="#263740" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </a>
          </div>
        <?php
          //Конструктор меню
          $APPLICATION->IncludeComponent(
            "swf:designer",
            "menu_top_1",
            [
              "IB"=>$arSettings["IB"]["designer_menu_top_1"],
              "DESIGNER_MENU"=>"Y",
            ],
          );
        ?>
        </div>
      </div>
    </div>
  </header>