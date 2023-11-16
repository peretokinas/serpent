<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php
  use Bitrix\Main\Localization\Loc;

  $arElem=$arResult["ITEMS"][0];
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
            "NAME"=>Loc::getMessage("PAGE_NAME_GENERAL"),
            "LINK"=>"/",
          ],
          [
            "NAME"=>$arParams["SECTION_NAME_PRINT"],
            "LINK"=>$arParams["LINK_CATALOG"].$arParams["SECTION_CODE_PRINT"]."/",
          ]
          ],
        ],
      );
    ?>
    <div class="product-head">
      <h1><?php echo $arElem["arFields"]["NAME"];?></h1>
      <div class="product-head__block">
        <div class="product-head__article">
          <?php echo Loc::getMessage("SHOP_DETAIL_ARTICUL");?>
          <span><?php echo $arElem["arProps"]["CML2_ARTICLE"]["VALUE"];?></span>
        </div>
        <a href="#" class="btn btn_gray">
          <svg xmlns="http://www.w3.org/2000/svg" width="17" height="19" viewBox="0 0 17 19" fill="none">
            <path d="M5.77223 7.50244H1.38867V18.0002H16.0005V7.50244H11.617" stroke="#263740"
                stroke-width="1.4" stroke-miterlimit="10"/>
            <path d="M8.69434 13.7124V2.02295" stroke="#263740" stroke-width="1.4" stroke-miterlimit="10"/>
            <path d="M5.62598 4.94545L8.69447 1.87695L11.763 4.94545" stroke="#263740" stroke-width="1.4"
                stroke-miterlimit="10"/>
          </svg>
          <?php echo Loc::getMessage("SHOP_DETAIL_BUT_SHARE");?>
        </a>
      </div>
    </div>
    <div class="product">
      <div class="product-block">
        <div class="product-slider">
          <!--<div class="product-slide__tags">
            <div class="product-slide__tag product-slide__new">
              <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                 xmlns="http://www.w3.org/2000/svg">
                <path d="M25.0011 1H49.0011V25C49.0011 38.2548 38.2559 49 25.0011 49C11.7463 49 1.0011 38.2548 1.0011 25C1.0011 11.7452 11.7463 1 25.0011 1Z"
                    stroke-width="2"></path>
              </svg>
              <span>new</span>
            </div>
            <div class="product-slide__tag product-slide__hit">
              <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                 xmlns="http://www.w3.org/2000/svg">
                <path d="M25.0011 1H49.0011V25C49.0011 38.2548 38.2559 49 25.0011 49C11.7463 49 1.0011 38.2548 1.0011 25C1.0011 11.7452 11.7463 1 25.0011 1Z"
                    stroke-width="2"></path>
              </svg>
              <span>Hit</span>
            </div>
            <div class="product-slide__tag product-slide__sale">
              <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                 xmlns="http://www.w3.org/2000/svg">
                <path d="M25.0011 1H49.0011V25C49.0011 38.2548 38.2559 49 25.0011 49C11.7463 49 1.0011 38.2548 1.0011 25C1.0011 11.7452 11.7463 1 25.0011 1Z"
                    stroke-width="2"></path>
              </svg>
              <span>-23%</span>
              <div class="product-slide__sale-text">
                Акция действует с 01.10. по 31.10.
              </div>
            </div>
          </div>-->
          <div class="product-slider__container swiper">
            <div class="swiper-wrapper">
              <?php if(is_array($arElem["arPhotos"])):?>
                <?php if(count($arElem["arPhotos"])>0):?>
                  <?php foreach($arElem["arPhotos"] AS $key_ph=>$val_ph):?>
                    <div class="swiper-slide swiper-slide__big">
                      <img src="<?php echo $val_ph;?>" alt="">
                    </div>
                  <?php endforeach;?>
                <?php else:?>
                  <?php for($i=0;$i<2;$i++):?>
                    <div class="swiper-slide swiper-slide__big">
                      <img src="<?php echo SITE_TEMPLATE_PATH."/img/no-photo.jpg";?>" alt="">
                    </div>
                  <?php endfor;?>
                <?php endif;?>
              <?php endif;?>
            </div>
          </div>
          <div class="swiper-button-next swiper-arrow">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="31" viewBox="0 0 32 31"
               fill="none">
              <path d="M29.1713 16.0006L-0.000242786 16.002" stroke="#263740"
                  stroke-linejoin="round"/>
              <path d="M23.8977 9.88823L29.9998 15.963L23.8992 22.0393" stroke="#263740"
                  stroke-width="2"/>
            </svg>
          </div>
          <div class="swiper-button-prev swiper-arrow">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="31" viewBox="0 0 32 31"
               fill="none">
              <path d="M2.82874 16.0006L32.0002 16.002" stroke="#263740" stroke-linejoin="round"/>
              <path d="M8.10234 9.88823L2.00018 15.963L8.10076 22.0393" stroke="#263740"
                  stroke-width="2"/>
            </svg>
          </div>
        </div>
        <div class="product-description">
          <div class="title-34">
            <?php echo Loc::getMessage("SHOP_DETAIL_OPISANIE");?>
          </div>
          <p>
            <?php
              if ($arElem["arFields"]["DETAIL_TEXT"]!="") {
                $opis_print=htmlspecialcharsBack($arElem["arFields"]["DETAIL_TEXT"]);
              } else {
                $opis_print=Loc::getMessage("SHOP_DETAIL_OPISANIE_NO");
              }
            ?>
            <?php echo $opis_print;?>
          </p>
        </div>
        <div class="product-container__line"></div>
        <div class="product-label"><?php echo Loc::getMessage("SHOP_DETAIL_SOSTAV");?></div>
        <div class="product-table">
          <div class="product-table__tr">
            <div class="product-table__td"><?php echo Loc::getMessage("SHOP_DETAIL_SOSTAV_OSN_MAT");?></div>
            <div class="product-table__td"><span><?php echo $arElem["arProps"]["SOSTAV"]["VALUE"];?></span></div>
          </div>
        </div>
        <div class="product-container__line"></div>
        <div class="product-label"><?php echo Loc::getMessage("SHOP_DETAIL_UHOD");?></div>
        <div class="product-table">
          <div class="product-table__tr">
            <div class="product-table__td">
              <span>Рыба 1</span>
            </div>
          </div>
          <div class="product-table__tr">
            <div class="product-table__td">
              <span>Рыба 2</span>
            </div>
          </div>
          <div class="product-table__tr">
            <div class="product-table__td">
              <span>Рыба 3</span>
            </div>
          </div>
        </div>
        <?php
          //Отзывы
          $APPLICATION->IncludeComponent(
            "swf:catalog.reviews",
            "card_rew_1",
            [
              "IB"=>$arParams["IB_REW"],
              "PROD_ID"=>$arElem["arFields"]["ID"],
            ],
          );
        ?>
      </div>
      <div class="product-container">
        <div class="product-container__flex">
          <!--<div class="product-container__flex-slider">
            <div class="product-slide__tags">
              <div class="product-slide__tag product-slide__new">
                <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                   xmlns="http://www.w3.org/2000/svg">
                  <path d="M25.0011 1H49.0011V25C49.0011 38.2548 38.2559 49 25.0011 49C11.7463 49 1.0011 38.2548 1.0011 25C1.0011 11.7452 11.7463 1 25.0011 1Z"
                      stroke-width="2"></path>
                </svg>
                <span>new</span>
              </div>
              <div class="product-slide__tag product-slide__hit">
                <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                   xmlns="http://www.w3.org/2000/svg">
                  <path d="M25.0011 1H49.0011V25C49.0011 38.2548 38.2559 49 25.0011 49C11.7463 49 1.0011 38.2548 1.0011 25C1.0011 11.7452 11.7463 1 25.0011 1Z"
                      stroke-width="2"></path>
                </svg>
                <span>Hit</span>
              </div>
              <div class="product-slide__tag product-slide__sale">
                <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                   xmlns="http://www.w3.org/2000/svg">
                  <path d="M25.0011 1H49.0011V25C49.0011 38.2548 38.2559 49 25.0011 49C11.7463 49 1.0011 38.2548 1.0011 25C1.0011 11.7452 11.7463 1 25.0011 1Z"
                      stroke-width="2"></path>
                </svg>
                <span>-23%</span>
                <div class="product-slide__sale-text">
                  Акция действует с 01.10. по 31.10.
                </div>
              </div>
            </div>
            <div class="product-slider__mobile swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="<?php echo SITE_TEMPLATE_PATH;?>/img/slide-tablet.jpg" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="<?php echo SITE_TEMPLATE_PATH;?>/img/slide-tablet.jpg" alt="">
                </div>
                <div class="swiper-slide">
                  <img src="<?php echo SITE_TEMPLATE_PATH;?>/img/slide-tablet.jpg" alt="">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>-->
          <div class="product-container__flex-content">
            <div class="product-label"><?php echo Loc::getMessage("SHOP_DETAIL_COLOR");?></div>
            <div class="product-slide__color">
              <?php
                $name_podob="";
                $ex_name_podob=explode($arParams["GROUP_PODOB_1_RAZD"],$arElem["arFields"]["NAME"]);
                $name_podob=$ex_name_podob[0];
                
                //Получаем подобные товару
                $arPodob=[];
                $arPodob=$arResult["ITEMS_PODOB_1"][$name_podob];
                //Добавляем сам товар
                $arPodob[]=$arElem;
                //Сортируем, чтобы цвета всегда были идентичные
                for ($i=0;$i<count($arPodob)-1;$i++) {
                  for ($j=$i+1;$j<count($arPodob);$j++) {
                    if ($arPodob[$j]["arFields"]["ID"]<$arPodob[$i]["arFields"]["ID"]) {
                      $buf=$arPodob[$i];
                      $arPodob[$i]=$arPodob[$j];
                      $arPodob[$j]=$buf;
                    }
                  }
                }
              ?>
              <?php foreach($arPodob AS $key_p=>$val_p):?>
                <?php
                  $tmp_bg=$arParams["SETT_COLOR_1"][$val_p["arProps"][$arParams["GROUP_PODOB_1_PROP"]]["VALUE"]];
                  if ($val_p["arFields"]["ID"]==$arElem["arFields"]["ID"]) {
                    $tmp_check="checked";
                  } else {
                    $tmp_check="";
                  }
                ?>
                <a href="<?php echo $val_p["arFields"]["DETAIL_PAGE_URL"];?>" class="catalog_go_to_page_action cast_a_nostyle">
                  <div class="product-slide__color-item">
                    <input type="radio" name="color-39" <?php echo $tmp_check;?>>
                    <span class="product-slide__color-circle">
                      <span style="background: <?php echo $tmp_bg;?>"></span>
                    </span>
                  </div>
                </a>
              <?php endforeach;?>
            </div>
            <div class="product-container__line"></div>
            <div class="product-size__head">
              <div class="product-size__left">
                <div class="product-label"><?php echo Loc::getMessage("SHOP_DETAIL_SIZE");?></div>
                <!--<div class="product-size__status"><?php echo Loc::getMessage("SHOP_DETAIL_SIZE_SKORO_ZAKONCHITSA");?></div>-->
              </div>
              <a href="#" class="product-size__table" data-modal-trigger="modal-size"><?php echo Loc::getMessage("SHOP_DETAIL_SIZE_TABLE");?></a>
            </div>
            <div class="product-size__items">
              <?php foreach($arElem["OFFERS"] AS $key_off=>$val_off):?>
                <?php
                  if ($key_off==0) {
                    $tmp_active="checked";
                  } else {
                    $tmp_active="";
                  }
                ?>
                <div class="product-size__item">
                  <input prod-id=<?php echo $val_off["arFields"]["ID"];?> class="select_sku_size_action" type="radio" name="size" <?php echo $tmp_active;?>>
                  <span class="product-size__item-value">
                    <span><?php echo $val_off["arProps"]["RAZMER"]["VALUE"];?></span>
                  </span>
                </div>
              <?php endforeach;?>
            </div>
            <div class="product-container__line"></div>
            <div class="product-container__event">
              <div class="product-container__price">
                <span><?php echo round($val_off["arPrice"][$arParams["SETT_SHOP_1"]["BASE_PRICE_CODE"]]["PRICE"]);?></span> ₽
              </div>
              <div class="product-container__event-block">
                <a href="" class="btn but_add_to_cart add_to_cart_action">
                  <svg xmlns="http://www.w3.org/2000/svg" width="22" height="24" viewBox="0 0 22 24"
                     fill="none">
                    <path d="M21 6.54541H1V22.9091H21V6.54541Z" stroke="white" stroke-width="1.4"
                        stroke-miterlimit="10"/>
                    <path d="M7.36328 10.3436V4.7272C7.36328 3.76277 7.74639 2.83784 8.42834 2.15589C9.11029 1.47393 10.0352 1.09082 10.9996 1.09082C11.9641 1.09082 12.889 1.47393 13.5709 2.15589C14.2529 2.83784 14.636 3.76277 14.636 4.7272V10.3436"
                        stroke="white" stroke-width="1.4" stroke-miterlimit="10"/>
                  </svg>
                  <?php echo Loc::getMessage("SHOP_DETAIL_CART_ADD");?>
                </a>
                <div class="product-favorite">
                  <input type="checkbox">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18"
                     fill="none">
                    <path fill="transparent"
                        d="M10.0002 17C10.0002 17 2.73044 11.2623 1.46561 8.69266C0.95956 7.77752 0.730235 6.73509 0.805508 5.69207C0.880781 4.64905 1.25742 3.65035 1.88963 2.81736V2.81736C2.25166 2.3275 2.70977 1.91661 3.23598 1.6098C3.76219 1.30299 4.34545 1.10671 4.95008 1.03296C5.55472 0.959204 6.16805 1.00954 6.75258 1.18086C7.33711 1.35218 7.88057 1.64089 8.34974 2.02936L10.0002 3.39577L11.6506 2.02936C12.1198 1.64089 12.6632 1.35218 13.2477 1.18086C13.8323 1.00954 14.4456 0.959204 15.0502 1.03296C15.6549 1.10671 16.2381 1.30299 16.7643 1.6098C17.2906 1.91661 17.7487 2.3275 18.1107 2.81736V2.81736C18.7429 3.65035 19.1195 4.64905 19.1948 5.69207C19.2701 6.73509 19.0408 7.77752 18.5347 8.69266C17.2691 11.2623 10.0002 17 10.0002 17Z"
                        stroke="#263740" stroke-miterlimit="10"></path>
                  </svg>
                </div>
              </div>
            </div>
            <div class="product-container__line"></div>
            <div class="product-container__delivery">
              <div class="product-label">Доставка</div>
              <div class="product-select">
                <div class="product-select__default">Москва
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="7" viewBox="0 0 12 7"
                     fill="none">
                    <path d="M10.9888 0.938554L6.05025 5.89945L1.11037 0.939838" stroke="#263740"/>
                  </svg>
                </div>
              </div>
            </div>
            <div class="product-delivery__line">
              <div class="product-delivery__line-column">
                Курьером
                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="17" viewBox="0 0 56 17"
                   fill="none">
                  <path d="M8.59283 12.6165H6.15373C2.35053 12.6165 5.11259 4.36737 8.31504 4.36737H12.1679C12.7845 4.36737 13.8753 4.4845 14.4105 2.92285L15.2416 0.5H9.95918C7.09775 0.5 4.87094 1.52885 3.26068 3.25585C0.480554 6.2092 -0.461211 10.8252 0.205025 13.0322C0.839644 15.0738 2.56282 16.4173 5.26165 16.4518L7.35973 16.4678H9.94563L10.5802 14.525C11.0477 13.1471 9.9908 12.6165 8.59283 12.6165ZM38.2776 9.197L39.0748 6.55827H30.5719C29.1581 6.55827 28.5235 6.95558 28.2796 7.78692L27.4846 10.4256H35.9876C37.4013 10.4256 38.0337 10.0283 38.2776 9.197ZM26.2153 13.8452L25.4204 16.4839H33.9211C35.3191 16.4839 35.9695 16.0866 36.2134 15.2553L37.0106 12.6165H28.5077C27.1097 12.6165 26.4751 13.0161 26.2153 13.8452ZM40.2628 3.1548L41.0577 0.516076H32.5548C31.141 0.516076 30.5064 0.913377 30.2625 1.74473L29.4652 4.38345H37.9682C39.3684 4.38345 40.0008 3.98615 40.2628 3.1548ZM27.4191 3.6876C27.0623 1.2303 25.7772 0.518372 22.6561 0.518372H16.9648L13.6495 10.4256H15.7475C16.9987 10.4256 17.6333 10.4417 18.2996 8.61598L19.6817 4.36737H21.7933C23.5978 4.36737 23.1913 6.6754 22.2812 8.91453C21.4681 10.8896 20.0544 12.6326 18.347 12.6326H14.8193C13.4055 12.6326 12.7551 13.0299 12.4954 13.8613L11.6169 16.5H14.2005L16.7367 16.4839C18.9793 16.4678 20.8177 16.3025 22.9632 14.3252C25.2397 12.2192 27.8753 6.8063 27.4191 3.6876ZM55.9995 0.5H51.0739L46.4396 5.52942C45.9021 6.11045 45.351 6.69147 44.8135 7.37125H44.7638L47.0742 0.5H43.0587L37.6453 16.4839H41.6607L43.3839 11.4545L45.1726 9.91122L46.5864 14.4584C47.0245 15.8685 47.4807 16.4839 48.4564 16.4839H51.5278L48.375 7.55497L55.9995 0.5Z"
                      fill="#B3A8A4"/>
                </svg>
              </div>
              <div class="product-delivery__line-column">2-3 дня</div>
              <div class="product-delivery__line-column">300 рублей</div>
            </div>
            <div class="product-delivery__line">
              <div class="product-delivery__line-column">
                Из пункта выдачи
                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="17" viewBox="0 0 56 17"
                   fill="none">
                  <path d="M8.59283 12.6165H6.15373C2.35053 12.6165 5.11259 4.36737 8.31504 4.36737H12.1679C12.7845 4.36737 13.8753 4.4845 14.4105 2.92285L15.2416 0.5H9.95918C7.09775 0.5 4.87094 1.52885 3.26068 3.25585C0.480554 6.2092 -0.461211 10.8252 0.205025 13.0322C0.839644 15.0738 2.56282 16.4173 5.26165 16.4518L7.35973 16.4678H9.94563L10.5802 14.525C11.0477 13.1471 9.9908 12.6165 8.59283 12.6165ZM38.2776 9.197L39.0748 6.55827H30.5719C29.1581 6.55827 28.5235 6.95558 28.2796 7.78692L27.4846 10.4256H35.9876C37.4013 10.4256 38.0337 10.0283 38.2776 9.197ZM26.2153 13.8452L25.4204 16.4839H33.9211C35.3191 16.4839 35.9695 16.0866 36.2134 15.2553L37.0106 12.6165H28.5077C27.1097 12.6165 26.4751 13.0161 26.2153 13.8452ZM40.2628 3.1548L41.0577 0.516076H32.5548C31.141 0.516076 30.5064 0.913377 30.2625 1.74473L29.4652 4.38345H37.9682C39.3684 4.38345 40.0008 3.98615 40.2628 3.1548ZM27.4191 3.6876C27.0623 1.2303 25.7772 0.518372 22.6561 0.518372H16.9648L13.6495 10.4256H15.7475C16.9987 10.4256 17.6333 10.4417 18.2996 8.61598L19.6817 4.36737H21.7933C23.5978 4.36737 23.1913 6.6754 22.2812 8.91453C21.4681 10.8896 20.0544 12.6326 18.347 12.6326H14.8193C13.4055 12.6326 12.7551 13.0299 12.4954 13.8613L11.6169 16.5H14.2005L16.7367 16.4839C18.9793 16.4678 20.8177 16.3025 22.9632 14.3252C25.2397 12.2192 27.8753 6.8063 27.4191 3.6876ZM55.9995 0.5H51.0739L46.4396 5.52942C45.9021 6.11045 45.351 6.69147 44.8135 7.37125H44.7638L47.0742 0.5H43.0587L37.6453 16.4839H41.6607L43.3839 11.4545L45.1726 9.91122L46.5864 14.4584C47.0245 15.8685 47.4807 16.4839 48.4564 16.4839H51.5278L48.375 7.55497L55.9995 0.5Z"
                      fill="#B3A8A4"/>
                </svg>
              </div>
              <div class="product-delivery__line-column">1 день</div>
              <div class="product-delivery__line-column">Бесплатно</div>
            </div>
            <div class="product-delivery__line">
              <div class="product-delivery__line-column">
                Самовывоз из шоурума
              </div>
              <div class="product-delivery__line-column">Сегодня</div>
              <div class="product-delivery__line-column">Бесплатно</div>
            </div>
            <div class="product-container__line"></div>
            <div class="product-label">Оплата</div>
            <div class="product-pay">
              <div class="product-pay__item">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="22" viewBox="0 0 24 22"
                   fill="none">
                  <path d="M23.4818 6.73209H1L4.57217 1H19.92L23.4818 6.73209Z" stroke="#263740"
                      stroke-miterlimit="10" stroke-linejoin="bevel"/>
                  <path d="M6.66021 6.77393C6.66021 8.32117 5.40372 9.57766 3.85647 9.57766C2.30922 9.57766 1.05273 8.32117 1.05273 6.77393"
                      stroke="#263740" stroke-miterlimit="10"/>
                  <path d="M12.2667 6.77393C12.2667 8.32117 11.0102 9.57766 9.46292 9.57766C7.91567 9.57766 6.65918 8.32117 6.65918 6.77393"
                      stroke="#263740" stroke-miterlimit="10"/>
                  <path d="M23.4825 6.77393C23.4825 8.32117 22.226 9.57766 20.6787 9.57766C19.1315 9.57766 17.875 8.32117 17.875 6.77393"
                      stroke="#263740" stroke-miterlimit="10"/>
                  <path d="M17.8741 6.77393C17.8741 8.32117 16.6176 9.57766 15.0703 9.57766C13.5231 9.57766 12.2666 8.32117 12.2666 6.77393"
                      stroke="#263740" stroke-miterlimit="10"/>
                  <path d="M20.6779 9.57715V17.9998C20.6779 19.6566 19.3348 20.9998 17.6779 20.9998H6.85547C5.19862 20.9998 3.85547 19.6566 3.85547 17.9998V9.57715"
                      stroke="#263740" stroke-miterlimit="10"/>
                  <path d="M7.59375 20.9996V11.6538H16.9395V20.9996" stroke="#263740"
                      stroke-miterlimit="10"/>
                  <path d="M12.2666 11.6538V20.9996" stroke="#263740" stroke-miterlimit="10"/>
                  <path d="M13.7214 16.3271H12.8906" stroke="#263740" stroke-miterlimit="10"/>
                </svg>
                При получении
              </div>
              <div class="product-pay__item">
                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20"
                   fill="none">
                  <path d="M6.68544 1.2002H15.2854C18.1854 1.2002 20.4854 3.5002 20.4854 6.4002V13.6002C20.4854 16.5002 18.1854 18.8002 15.2854 18.8002H6.68544C3.78544 18.8002 1.48544 16.5002 1.48544 13.6002V6.4002C1.38544 3.6002 3.78544 1.2002 6.68544 1.2002Z"
                      stroke="#263740" stroke-miterlimit="10" stroke-linecap="round"
                      stroke-linejoin="round"/>
                  <path d="M4.48242 6H7.48242" stroke="#263740" stroke-miterlimit="10"
                      stroke-linecap="round"
                      stroke-linejoin="round"/>
                  <path d="M2.48242 16H19.4824" stroke="#263740" stroke-miterlimit="10"
                      stroke-linecap="round"
                      stroke-linejoin="round"/>
                  <path d="M1.48242 13L20.4824 13" stroke="#263740" stroke-miterlimit="10"
                      stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                Картой на сайте
              </div>
              <div class="product-pay__item product-pay__item-back">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18"
                   fill="none">
                  <path d="M9.59375 13.0676C9.59375 12.9973 9.62115 12.927 9.66614 12.8779C9.70519 12.8353 9.76418 12.8003 9.86105 12.8003C9.9245 12.8003 9.96388 12.8225 9.98706 12.8457C10.0102 12.8688 10.0324 12.9082 10.0324 12.9717C10.0324 13.0419 10.005 13.1123 9.96004 13.1613C9.92099 13.2039 9.86201 13.239 9.76514 13.239C9.69458 13.239 9.65554 13.2283 9.63795 13.2216C9.62929 13.2182 9.62496 13.2155 9.62342 13.2144C9.62196 13.2135 9.6215 13.2129 9.62126 13.2127L9.62125 13.2127C9.62095 13.2123 9.61954 13.2107 9.61735 13.2068C9.6151 13.2027 9.6117 13.1955 9.60814 13.1842C9.6008 13.1609 9.59375 13.123 9.59375 13.0676Z"
                      fill="white" stroke="#B3A8A4"/>
                  <path d="M2.85886 17H16.7661C17.8212 16.9041 18.6844 16.0409 18.6844 14.8899C18.6844 14.6981 18.5885 14.4104 18.4926 14.2185L11.5869 2.03768C11.0114 1.07856 9.86046 0.694911 8.90134 1.27038C8.51769 1.46221 8.22995 1.74995 8.03813 2.03768L1.13244 14.3145C0.748791 15.3695 1.22835 16.5204 2.18748 16.9041C2.3793 17 2.57112 17 2.85886 17Z"
                      stroke="#B3A8A4" stroke-miterlimit="10" stroke-linecap="round"
                      stroke-linejoin="round"/>
                  <path d="M9.76465 10.2863V7.31299" stroke="#B3A8A4" stroke-miterlimit="10"
                      stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                Возврат возможен при отказе от товара в пункте выдачи
              </div>
            </div>
          </div>
        </div>
        <div class="loyalty">
          <h2>Программа лояльности</h2>
          <div class="block-text">
            Вступайте в <span class="fw-600">SerpentClub</span> и при покупе данного товара Вам начислится
            500 баллов, которые можно будет потратить на следующие покупки.
            <br>Что бы подключиться к программе лояльности
          </div>
          <div class="lk-balls__modal" data-modal-trigger="modal-how_work">
            Как это работает?
            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" viewBox="0 0 8 14" fill="none">
              <path d="M0.623358 0.514337L7.00053 6.86283L0.625009 13.213" stroke="#263740"/>
            </svg>
          </div>
          <div class="block-btn">
            <a href="#" class="btn auth-event">Войдите</a>
            <div class="btn-or">
              <img src="img/btn-or.svg" alt="">
            </div>
            <a href="#" class="btn auth-event btn_black_b">Зарегистируйтесь</a>
          </div>
        </div>
      </div>
    </div>
    <?php
      //Похожие товары
      $APPLICATION->IncludeComponent(
        "swf:shop",
        "slider_1",
        [
          "arSettings"=>$arParams["arSettings"],
          "IB_CAT"=>$arParams["IB_CAT"],
          "IB_SKU"=>$arParams["IB_SKU"],
          "IB_REW"=>"",
          "SETT_COLOR_1"=>$arParams["SETT_COLOR_1"],
          "SETT_SHOP_1"=>$arParams["SETT_SHOP_1"],
          "GROUP_PODOB_1"=>"Y",
          "GROUP_PODOB_1_PROP"=>"TSVET",
          "GROUP_PODOB_1_RAZD"=>", ",
          "DETAIL_CODE"=>"",
          "SECTION_CODE_PRINT"=>$arParams["SECTION_CODE_PRINT"],
          "SECTION_NAME_PRINT"=>$arParams["SECTION_NAME_PRINT"],
          "LINK_CATALOG"=>$arParams["LINK_CATALOG"],
          "CART_DATA"=>"N",
          "SLIDER_TITLE"=>Loc::getMessage("SHOP_SLIDER_1_POHOJIE"),
          "SLIDER_LIMIT"=>rand(3,10),
          "ALL_CATALOG_CAST_TITLE"=>"",
          "BUTT_CENTER"=>"Y",
        ],
      );
      
      //Все товары линии
      $APPLICATION->IncludeComponent(
        "swf:shop",
        "slider_1",
        [
          "arSettings"=>$arParams["arSettings"],
          "IB_CAT"=>$arParams["IB_CAT"],
          "IB_SKU"=>$arParams["IB_SKU"],
          "IB_REW"=>"",
          "SETT_COLOR_1"=>$arParams["SETT_COLOR_1"],
          "SETT_SHOP_1"=>$arParams["SETT_SHOP_1"],
          "GROUP_PODOB_1"=>"Y",
          "GROUP_PODOB_1_PROP"=>"TSVET",
          "GROUP_PODOB_1_RAZD"=>", ",
          "DETAIL_CODE"=>"",
          "SECTION_CODE_PRINT"=>$arParams["SECTION_CODE_PRINT"],
          "SECTION_NAME_PRINT"=>$arParams["SECTION_NAME_PRINT"],
          "LINK_CATALOG"=>$arParams["LINK_CATALOG"],
          "CART_DATA"=>"N",
          "SLIDER_TITLE"=>Loc::getMessage("SHOP_SLIDER_1_LINE"),
          "SLIDER_LIMIT"=>rand(3,10),
          "ALL_CATALOG_CAST_TITLE"=>"",
          "BUTT_CENTER"=>"Y",
        ],
      );
    ?>
  </div>
</main>
<div class="modal" data-modal-name="modal-size" data-modal-dismiss>
  <div class="modal-dialog">
    <div class="modal-close" data-modal-dismiss>
      <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none"
         data-modal-dismiss>
        <path d="M1 1L9 9" stroke="#263740" data-modal-dismiss stroke-linecap="round"/>
        <path d="M9 1L1 9" stroke="#263740" data-modal-dismiss stroke-linecap="round"/>
      </svg>
    </div>
    <div class="modal-size__container">
      <a href="https://www.youtube.com/watch?v=4FUnXaq_VWk" data-fancybox="video-gallery" class="video">
        <span class="play-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="26" viewBox="0 0 22 26" fill="none">
            <path d="M21 13L1.5 24.2583L1.5 1.74167L21 13Z" stroke="white" stroke-width="2"></path>
          </svg>
        </span>
        <picture>
          <img src="img/video.jpg" alt="">
        </picture>
      </a>
      <div class="modal-size__content">
        <h2>Как определить размер?</h2>
        <p>
          <span class="fw-600">
             Тебе понадобится снять следующие мерки:
          </span>
        </p>
        <ul>
          <li>Обхват талии. Измеряется в самой узкой части живота чуть выше пупка.</li>
          <li>Окружность бедер. Сантиметр проходит в самом широком месте ягодиц по выступающим точкам.</li>
        </ul>
        <p>
          Сравни полученные значения с размерными сетками производителей. Не забывай, что каждый из них использует свои стандарты.
        </p>
        <div class="table-size">
          <div class="title-34">
            Таблица размеров
          </div>
          <div class="filter-size">
            <div class="filter-size__tr filter-size__tr-head">
              <div class="filter-size__td">RUs</div>
              <div class="filter-size__td">INT</div>
              <div class="filter-size__td">обхват груди, см</div>
              <div class="filter-size__td">обхват талии, см</div>
              <div class="filter-size__td">обхват бедер, см</div>
            </div>
            <div class="filter-size__tr">
              <div class="filter-size__td">40</div>
              <div class="filter-size__td">xxs</div>
              <div class="filter-size__td">80</div>
              <div class="filter-size__td">62</div>
              <div class="filter-size__td">86</div>
            </div>
            <div class="filter-size__tr">
              <div class="filter-size__td">42</div>
              <div class="filter-size__td">xs</div>
              <div class="filter-size__td">84</div>
              <div class="filter-size__td">66</div>
              <div class="filter-size__td">90</div>
            </div>
            <div class="filter-size__tr">
              <div class="filter-size__td">44</div>
              <div class="filter-size__td">s</div>
              <div class="filter-size__td">88</div>
              <div class="filter-size__td">70</div>
              <div class="filter-size__td">94</div>
            </div>
            <div class="filter-size__tr">
              <div class="filter-size__td">46</div>
              <div class="filter-size__td">m</div>
              <div class="filter-size__td">92</div>
              <div class="filter-size__td">74</div>
              <div class="filter-size__td">98</div>
            </div>
            <div class="filter-size__tr">
              <div class="filter-size__td">48</div>
              <div class="filter-size__td">l</div>
              <div class="filter-size__td">96</div>
              <div class="filter-size__td">78</div>
              <div class="filter-size__td">102</div>
            </div>
            <div class="filter-size__tr">
              <div class="filter-size__td">50</div>
              <div class="filter-size__td">xl</div>
              <div class="filter-size__td">100</div>
              <div class="filter-size__td">82</div>
              <div class="filter-size__td">106</div>
            </div>
            <div class="filter-size__tr">
              <div class="filter-size__td">52</div>
              <div class="filter-size__td">xxl</div>
              <div class="filter-size__td">104</div>
              <div class="filter-size__td">86</div>
              <div class="filter-size__td">110</div>
            </div>
            <div class="filter-size__tr">
              <div class="filter-size__td">54</div>
              <div class="filter-size__td">3xl</div>
              <div class="filter-size__td">108</div>
              <div class="filter-size__td">90</div>
              <div class="filter-size__td">114</div>
            </div>
            <div class="filter-size__tr">
              <div class="filter-size__td">56</div>
              <div class="filter-size__td">4xl</div>
              <div class="filter-size__td">112</div>
              <div class="filter-size__td">94</div>
              <div class="filter-size__td">118</div>
            </div>
            <div class="filter-size__tr">
              <div class="filter-size__td">58</div>
              <div class="filter-size__td">5xl</div>
              <div class="filter-size__td">116</div>
              <div class="filter-size__td">98</div>
              <div class="filter-size__td">122</div>
            </div>
            <div class="filter-size__tr">
              <div class="filter-size__td">60</div>
              <div class="filter-size__td">6xl</div>
              <div class="filter-size__td">120</div>
              <div class="filter-size__td">102</div>
              <div class="filter-size__td">126</div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
<div class="modal" data-modal-name="modal-how_work" data-modal-dismiss>
  <div class="modal-dialog">
    <div class="modal-close" data-modal-dismiss>
      <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none"
         data-modal-dismiss>
        <path d="M1 1L9 9" stroke="#263740" data-modal-dismiss stroke-linecap="round"/>
        <path d="M9 1L1 9" stroke="#263740" data-modal-dismiss stroke-linecap="round"/>
      </svg>
    </div>
    <h2>Как это работает?</h2>
    <p>
      <span class="fw-600">
        В нашем интернет-магазине действует накопительная бонусная система, которая позволит вам получать бонусные баллы за каждую покупку.
      </span>
    </p>
    <ul>
      <li>За регистрацию на сайте начисляются приветственные баллы в размере 500 рублей.</li>
      <li>С каждой покупки вам возвращается 10% от общей суммы приобретенных вами товаров в виде баллов.</li>
      <li>Ваша активность также награждается баллами: оставляйте отзывы о наших товарах, подписывайтесь на
        социальные сети, посещайте шоу-рум и т.д.
      </li>
      <li>Один балл равен одному рублю.</li>
      <li>Накопленными баллами можно оплатить до 50% заказа.</li>
    </ul>
    <p>
      Отслеживать работу программы лояльности можно в личном кабинете интернет-магазина. Одновременно с этим,
      воспользоваться бонусной системой сможет каждый наш покупатель. Сотрудники шоу-рума имеют доступ к
      админ-панели сайта, с помощью которой они зарегистрируют нового клиента по телефону, либо найдут уже
      существующего и проверят его бонусный баланс.
      <br>Совершайте покупки и получайте выгоду!
    </p>
  </div>
</div>