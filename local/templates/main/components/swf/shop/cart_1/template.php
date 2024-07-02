<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php
  use Bitrix\Main\Localization\Loc;
  
  global $USER;
?>
<main>
  <?php if(count($arResult["BASKET"])>0):?>
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
              "NAME"=>Loc::getMessage("PAGE_NAME_CART"),
              "LINK"=>"",
            ]
            ],
          ],
        );
      ?>
    </div>
    <div class="container">
      <h1><?php echo Loc::getMessage("PAGE_NAME_CART");?></h1>
      <div class="basket-page">
        <form method="POST" class="basket-form basket_form_action">
          <div class="basket-section">
            <div class="basket-section__head">
              <div class="basket-section__head-number">1</div>
              <h3><?php echo Loc::getMessage("SHOP_CART_CONT_DANN");?></h3>
            </div>
            <div class="form-item">
              <input name="f_name" name="" type="text" placeholder="Имя">
              <div class="cast_error_text_1 cast_hide"></div>
            </div>
            <div class="form-item">
              <input name="f_fam" type="text" placeholder="фамилия">
              <div class="cast_error_text_1 cast_hide"></div>
            </div>
            <div class="form-item">
              <input name="f_phone" type="tel" placeholder="телефон">
              <div class="cast_error_text_1 cast_hide"></div>
            </div>
            <div class="form-item">
              <input name="f_email" type="text" placeholder="Адрес электронной почты">
              <div class="cast_error_text_1 cast_hide"></div>
            </div>
          </div>
          <div class="basket-section">
            <div class="basket-section__head">
              <div class="basket-section__head-number">2</div>
              <h3><?php echo Loc::getMessage("SHOP_CART_SPOSOB_POLUCH");?></h3>
            </div>
            <div class="tabs-container">
              <input name="f_deliv" type="hidden" value="3">
              <a href="#" data-tab="showroom" class="tabs-head active deliv_selected_action" deliv-id="3" ><?php echo $arResult["DELIV"][3]["DESCRIPTION"];?></a>
              <div class="cast_error_text_1 cast_hide"></div>
              <!--<a href="#" data-tab="courier" class="tabs-head">
                Курьером
                <svg xmlns="http://www.w3.org/2000/svg" width="57" height="16" viewBox="0 0 57 16"
                   fill="none">
                  <path d="M9.09332 12.1165H6.65421C2.85102 12.1165 5.61308 3.86737 8.81553 3.86737H12.6684C13.285 3.86737 14.3758 3.9845 14.911 2.42285L15.7421 0H10.4597C7.59824 0 5.37143 1.02885 3.76117 2.75585C0.981042 5.7092 0.0392773 10.3252 0.705514 12.5322C1.34013 14.5738 3.06331 15.9173 5.76214 15.9518L7.86022 15.9678H10.4461L11.0807 14.025C11.5482 12.6471 10.4913 12.1165 9.09332 12.1165ZM38.7781 8.697L39.5753 6.05827H31.0723C29.6586 6.05827 29.0239 6.45558 28.78 7.28692L27.9851 9.92565H36.4881C37.9018 9.92565 38.5342 9.52835 38.7781 8.697ZM26.7158 13.3452L25.9209 15.9839H34.4216C35.8196 15.9839 36.47 15.5866 36.7139 14.7553L37.5111 12.1165H29.0081C27.6102 12.1165 26.9756 12.5161 26.7158 13.3452ZM40.7633 2.6548L41.5582 0.0160758H33.0552C31.6415 0.0160758 31.0069 0.413377 30.7629 1.24473L29.9657 3.88345H38.4687C39.8689 3.88345 40.5013 3.48615 40.7633 2.6548ZM27.9196 3.1876C27.5627 0.7303 26.2777 0.0183723 23.1566 0.0183723H17.4653L14.1499 9.92565H16.248C17.4992 9.92565 18.1338 9.94173 18.8 8.11598L20.1822 3.86737H22.2938C24.0983 3.86737 23.6918 6.1754 22.7817 8.41453C21.9686 10.3896 20.5548 12.1326 18.8475 12.1326H15.3198C13.906 12.1326 13.2556 12.5299 12.9959 13.3613L12.1174 16H14.701L17.2372 15.9839C19.4798 15.9678 21.3182 15.8025 23.4637 13.8252C25.7402 11.7192 28.3758 6.3063 27.9196 3.1876ZM56.5 0H51.5744L46.9401 5.02942C46.4026 5.61045 45.8515 6.19147 45.314 6.87125H45.2643L47.5747 0H43.5592L38.1457 15.9839H42.1612L43.8844 10.9545L45.6731 9.41122L47.0869 13.9584C47.525 15.3685 47.9812 15.9839 48.9568 15.9839H52.0283L48.8755 7.05497L56.5 0Z"
                      fill="#B3A8A4"/>
                </svg>
              </a>
              <a href="#" data-tab="point" class="tabs-head">
                Пункт выдачи
                <svg xmlns="http://www.w3.org/2000/svg" width="57" height="16" viewBox="0 0 57 16"
                   fill="none">
                  <path d="M9.09332 12.1165H6.65421C2.85102 12.1165 5.61308 3.86737 8.81553 3.86737H12.6684C13.285 3.86737 14.3758 3.9845 14.911 2.42285L15.7421 0H10.4597C7.59824 0 5.37143 1.02885 3.76117 2.75585C0.981042 5.7092 0.0392773 10.3252 0.705514 12.5322C1.34013 14.5738 3.06331 15.9173 5.76214 15.9518L7.86022 15.9678H10.4461L11.0807 14.025C11.5482 12.6471 10.4913 12.1165 9.09332 12.1165ZM38.7781 8.697L39.5753 6.05827H31.0723C29.6586 6.05827 29.0239 6.45558 28.78 7.28692L27.9851 9.92565H36.4881C37.9018 9.92565 38.5342 9.52835 38.7781 8.697ZM26.7158 13.3452L25.9209 15.9839H34.4216C35.8196 15.9839 36.47 15.5866 36.7139 14.7553L37.5111 12.1165H29.0081C27.6102 12.1165 26.9756 12.5161 26.7158 13.3452ZM40.7633 2.6548L41.5582 0.0160758H33.0552C31.6415 0.0160758 31.0069 0.413377 30.7629 1.24473L29.9657 3.88345H38.4687C39.8689 3.88345 40.5013 3.48615 40.7633 2.6548ZM27.9196 3.1876C27.5627 0.7303 26.2777 0.0183723 23.1566 0.0183723H17.4653L14.1499 9.92565H16.248C17.4992 9.92565 18.1338 9.94173 18.8 8.11598L20.1822 3.86737H22.2938C24.0983 3.86737 23.6918 6.1754 22.7817 8.41453C21.9686 10.3896 20.5548 12.1326 18.8475 12.1326H15.3198C13.906 12.1326 13.2556 12.5299 12.9959 13.3613L12.1174 16H14.701L17.2372 15.9839C19.4798 15.9678 21.3182 15.8025 23.4637 13.8252C25.7402 11.7192 28.3758 6.3063 27.9196 3.1876ZM56.5 0H51.5744L46.9401 5.02942C46.4026 5.61045 45.8515 6.19147 45.314 6.87125H45.2643L47.5747 0H43.5592L38.1457 15.9839H42.1612L43.8844 10.9545L45.6731 9.41122L47.0869 13.9584C47.525 15.3685 47.9812 15.9839 48.9568 15.9839H52.0283L48.8755 7.05497L56.5 0Z"
                      fill="#B3A8A4"/>
                </svg>
              </a>-->
            </div>
            <div class="tab-block">
              <div class="tab-content active" data-id="showroom">
                <div class="main-tab">
                  <div class="card-flex">
                    <div class="card-column">
                      <div class="card-title">Как добраться</div>
                      <div class="card-text">
                        <span>г. Москва, ул. Усачева, 11Ж</span>
                        <span class="fw-600">ст. м. Спортивная,<br> ст. м. Фрунзенская</span>
                        <span></span>
                      </div>
                    </div>
                    <div class="card-column">
                      <div class="card-title">Режим работы</div>
                      <div class="card-text">
                        <span class="card-text__time">
                          <span class="fw-600">11:00 - 20:00</span>
                        </span>
                        <span class="card-text__time">
                          <span class="">Без выходных</span>
                        <span>
                      </div>
                    </div>
                  </div>
                  <div class="card-map">
                    <?php
                      $APPLICATION->IncludeComponent(
                        "swf:other",
                        "yandexmap",
                          [
                            "mc_1"=>55.730000,
                            "mc_2"=>37.550000,
                            "mc_1_mob"=>55.730000,
                            "mc_2_mob"=>37.550000,
                          ],
                      );
                    ?>
                  </div>
                </div>
              </div>
              <div class="tab-content" data-id="courier">
                <div class="main-tab">
                  <h3>Ваш адрес</h3>
                  <div class="form-item">
                    <input type="text" placeholder="Город">
                  </div>
                  <div class="form-item__address">
                    <div class="form-item">
                      <input type="text" placeholder="Улица ">
                    </div>
                    <div class="form-item">
                      <input type="text" placeholder="Дом">
                    </div>
                    <div class="form-item">
                      <input type="text" placeholder="Квартира">
                    </div>
                  </div>
                  <div class="form-item">
                    <input type="text" placeholder="подъезд, этаж, другой комментарий">
                  </div>
                  <div class="card-map">
                    <img src="<?php echo SITE_TEMPLATE_PATH;?>/img/basket/map.jpg" alt="">
                  </div>
                </div>
              </div>
              <div class="tab-content" data-id="point">
                <div class="main-tab">
                  <div class="select-city">
                    <div class="select-city__text">Город</div>
                    <select>
                      <option value="1">
                        Москва
                      </option>
                      <option value="2">
                        Санкт-Петербург
                      </option>
                      <option value="3">
                        Кемерово
                      </option>
                    </select>
                  </div>
                  <div class="point-items">
                    <div class="point-item">
                      <input type="radio" name="point" checked>
                      <div class="point-item__flex">
                        <div class="point-icon"></div>
                        <div class="point-item__address">
                          <span class="fw-600">г. Москва, </span> ул. Арбат, 1
                        </div>
                        <div class="point-item__mode">
                          <span class="card-text__time">
                            <span class="fw-600">Пн-Пт: </span>
                            <span>9:00 - 19:00</span>
                          </span>
                          <span class="card-text__time">
                            <span class="fw-600">Сб-Вс: </span>
                            <span>9:00 - 18:00</span>
                          </span>
                        </div>
                      </div>

                    </div>
                    <div class="point-item">
                      <input type="radio" name="point">
                      <div class="point-item__flex">
                        <div class="point-icon"></div>
                        <div class="point-item__address">
                          <span class="fw-600">г. Москва, </span>ул. Якиманка, 12
                        </div>
                        <div class="point-item__mode">
                          <span class="card-text__time">
                            <span class="fw-600">Пн-Пт: </span>
                            <span>9:00 - 19:00</span>
                          </span>
                          <span class="card-text__time">
                            <span class="fw-600">Сб-Вс: </span>
                            <span>9:00 - 18:00</span>
                          </span>
                        </div>
                      </div>

                    </div>
                    <div class="point-item">
                      <input type="radio" name="point">
                      <div class="point-item__flex">
                        <div class="point-icon"></div>
                        <div class="point-item__address">
                          <span class="fw-600">г. Москва, </span>  ул. Сретенка, 32
                        </div>
                        <div class="point-item__mode">
                          <span class="card-text__time">
                            <span class="fw-600">Пн-Пт: </span>
                            <span>9:00 - 19:00</span>
                          </span>
                          <span class="card-text__time">
                            <span class="fw-600">Сб-Вс: </span>
                            <span>9:00 - 18:00</span>
                          </span>
                        </div>
                      </div>

                    </div>
                    <div class="point-item">
                      <input type="radio" name="point">
                      <div class="point-item__flex">
                        <div class="point-icon"></div>
                        <div class="point-item__address">
                          <span class="fw-600">г. Москва, </span> Площадь победы, 2
                        </div>
                        <div class="point-item__mode">
                          <span class="card-text__time">
                            <span class="fw-600">Пн-Пт: </span>
                            <span>9:00 - 19:00</span>
                          </span>
                          <span class="card-text__time">
                            <span class="fw-600">Сб-Вс: </span>
                            <span>9:00 - 18:00</span>
                          </span>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div class="card-map">
                    <img src="<?php echo SITE_TEMPLATE_PATH;?>/img/basket/map.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="basket-section">
            <div class="basket-section__head">
              <div class="basket-section__head-number">3</div>
              <h3><?php echo Loc::getMessage("SHOP_CART_SPOSOB_OPLATI");?></h3>
            </div>
            <div class="pay-flex">
              <div class="pay-way">
                <div class="pay-way__item pay-way__item-personally active">
                  <input type="radio" name="f_pay" value="10" checked>
                  <div class="cast_error_text_1 cast_hide"></div>
                  <?php echo $arResult["PAY"][10]["PSA_NAME"];?>
                </div>
                <!--<div class="pay-way__item pay-way__item-card">
                  <input type="radio" name="f_pay" value="card">
                  Картой на сайте
                </div>-->
                <div class="pay-slider"></div>
              </div>
              <!--<div class="pay-sign">+</div>
              <div class="pay-balls">
                <input type="checkbox" class="pay-bills-check">
                Списать балы
              </div>-->
            </div>
            <!--<div class="balls-flex__hidden">
              <div class="balls-flex">
                <div class="balls-label">
                  Укажите колличество баллов
                </div>
                <div class="balls-row">
                  <div class="balls-input">
                    <input type="text" disabled max="3500" value="2000">
                    <div class="balls-max">3500</div>
                  </div>
                  <div class="balls-slider">
                    <div id="slider"></div>
                  </div>
                </div>
              </div>
            </div>-->
          </div>
          <div class="basket-section">
            <div class="basket-section__head">
              <div class="basket-section__head-number">4</div>
              <h3><?php echo Loc::getMessage("SHOP_CART_COMMENT");?></h3>
            </div>
            <div class="form-item">
              <input name="f_comment" type="text" placeholder="<?php echo Loc::getMessage("SHOP_CART_COMMENT_PLACEHOLDER");?>">
              <div class="cast_error_text_1 cast_hide"></div>
            </div>
          </div>
          <a href="" class="btn btn_basket btn_basket_mobile <?php echo $tmp_but_class;?>"><?php echo Loc::getMessage("SHOP_CART_EXEC_ORDER");?></a>
        </form>
        <div class="basket-sidebar">
          <h3><?php echo Loc::getMessage("PAGE_NAME_CART");?></h3>
          <div class="basket-items-product">
            <?php
              $sum_cart=0;
              $sum_full=0;
            ?>
            <?php foreach($arResult["BASKET"] AS $key=>$val):?>
              <?php
                $key_osn_prod=$arResult["ITEMS"][$key]["arProps"]["CML2_LINK"]["VALUE"];
                
                $sum_cart=$sum_cart+$val["PROD_SUM"];
                $sum_full=$sum_cart;
              ?>
              <div class="basket-item">
                <a href="<?php echo $arResult["ITEMS"][$key_osn_prod]["arFields"]["DETAIL_PAGE_URL"];?>" class="basket-item__pic">
                  <?php if(isset($arResult["ITEMS"][$key_osn_prod]["arPhotos"][0])):?>
                    <img src="<?php echo $arResult["ITEMS"][$key_osn_prod]["arPhotos"][0];?>" alt="">
                  <?php else:?>
                    <img src="<?php echo SITE_TEMPLATE_PATH."/img/no-photo.jpg";?>" alt="">
                  <?php endif;?>
                </a>
                <div class="basket-item__content">
                  <a href="<?php echo $arResult["ITEMS"][$key_osn_prod]["arFields"]["DETAIL_PAGE_URL"];?>" class="basket-item__title"><?php echo $arResult["ITEMS"][$key]["arFields"]["NAME"]?></a>
                  <div class="basket-item__info">
                    <div class="basket-item__size">
                      <?php echo Loc::getMessage("SHOP_CART_SIZE");?>:
                      <span><?php echo $arResult["ITEMS"][$key]["arProps"]["RAZMER"]["VALUE"];?></span>
                    </div>
                    <div class="basket-item__color">
                      <?php echo Loc::getMessage("SHOP_CART_COLOR");?>:
                      <div class="product-slide__color-item">
                        <input type="radio" name="color-1" disabled>
                        <span class="product-slide__color-circle">
                          <?php
                            $tmp_bg=$arParams["SETT_COLOR_1"][$arResult["ITEMS"][$key_osn_prod]["arProps"][$arParams["GROUP_PODOB_1_PROP"]]["VALUE"]];
                          ?>
                          <span style="background: <?php echo $tmp_bg;?>"></span>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="basket-price"><span><?php echo swf_util::get_num_form_2($val["PROD_PRICE"]);?></span> <?php echo Loc::getMessage("CURR_RUB");?></div>
                </div>
                <div class="basket-event">
                  <div class="count">
                    <div type-exec="add" class="count-sign shop_cart_num_change_action">
                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14"
                         fill="none">
                        <path d="M1.39941 6.94336L12.6568 6.99965" stroke="#263740" stroke-width="1.4"
                            stroke-linecap="square"/>
                        <path d="M6.94434 1.39893L7.00062 12.6563" stroke="#263740" stroke-width="1.4"
                            stroke-linecap="square"/>
                      </svg>
                    </div>
                    <input type="text" item-id="<?php echo $val["ID"];?>" prod-id="<?php echo $val["PROD_ID"];?>" class="count-input shop_cart_num_input" value="<?php echo $val["PROD_QUA"];?>">
                    <div type-exec="del" class="count-sign shop_cart_num_change_action">
                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" viewBox="0 0 14 12"
                         fill="none">
                        <path d="M1.34326 6H12.657" stroke="#263740" stroke-width="1.4"
                            stroke-linecap="square"/>
                      </svg>
                    </div>
                  </div>
                  <div class="basket-event__product">
                    <?php
                      //Проверяем наличие в избранных
                      $fav_yes="";
                      if (in_array($key_osn_prod, $arResult["FAVORITES"])) {
                        $fav_yes="checked";
                      }
                    ?>
                    <div class="product-favorite product-favorite-cart" id-prod="<?php echo $key_osn_prod;?>">
                      <input class="product-favorite-checkbox <?php echo $fav_yes;?>" type="checkbox" <?php echo $fav_yes;?>>
                      <svg class="product-favorite-svg" xmlns="http://www.w3.org/2000/svg" width="20" height="18"
                         viewBox="0 0 20 18" fill="none">
                        <path fill="transparent"
                          d="M10.0002 17C10.0002 17 2.73044 11.2623 1.46561 8.69266C0.95956 7.77752 0.730235 6.73509 0.805508 5.69207C0.880781 4.64905 1.25742 3.65035 1.88963 2.81736V2.81736C2.25166 2.3275 2.70977 1.91661 3.23598 1.6098C3.76219 1.30299 4.34545 1.10671 4.95008 1.03296C5.55472 0.959204 6.16805 1.00954 6.75258 1.18086C7.33711 1.35218 7.88057 1.64089 8.34974 2.02936L10.0002 3.39577L11.6506 2.02936C12.1198 1.64089 12.6632 1.35218 13.2477 1.18086C13.8323 1.00954 14.4456 0.959204 15.0502 1.03296C15.6549 1.10671 16.2381 1.30299 16.7643 1.6098C17.2906 1.91661 17.7487 2.3275 18.1107 2.81736V2.81736C18.7429 3.65035 19.1195 4.64905 19.1948 5.69207C19.2701 6.73509 19.0408 7.77752 18.5347 8.69266C17.2691 11.2623 10.0002 17 10.0002 17Z"
                          stroke="#263740" stroke-miterlimit="10"/>
                      </svg>
                    </div>
                    <a href="#" class="delete shop_cart_position_delete_action">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                         fill="none">
                        <path d="M15.0969 3.82373C15.0969 3.82373 14.6706 11.2772 14.3296 14.5033C14.3296 15.8383 13.3917 16.9508 12.3686 16.9508C12.3686 16.9508 12.3686 16.9508 12.2834 16.9508C10.0666 16.9508 7.84986 17.062 5.6331 16.9508C4.60998 16.9508 3.75738 15.9495 3.67212 14.6146C3.41634 11.3885 2.90479 3.93498 2.90479 3.93498"
                            stroke="#FF8980" stroke-width="1.4" stroke-miterlimit="10"
                            stroke-linecap="square" stroke-linejoin="round"/>
                        <path d="M16.4512 3.76123H1.54883" stroke="#FF8980" stroke-width="1.4"
                            stroke-miterlimit="10" stroke-linecap="square" stroke-linejoin="round"/>
                        <path d="M13.5581 3.76093C12.8568 3.76093 12.2432 3.27371 12.1556 2.70528L11.9802 1.73084C11.8926 1.24361 11.3666 1 10.9283 1H7.15889C6.63293 1 6.19462 1.32482 6.10696 1.73084L5.84398 2.70528C5.66866 3.35492 5.14269 3.76093 4.44141 3.76093"
                            stroke="#FF8980" stroke-miterlimit="10" stroke-linecap="square"
                            stroke-linejoin="round"/>
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
            <?php endforeach;?>
          </div>
          <div class="basket-final">
            <div class="basket-line">
              <span><?php echo Loc::getMessage("SHOP_CART_SUMM_ORDER");?></span>
              <span>
                <b class="shop_cart_summ_input"><?php echo swf_util::get_num_form_2($sum_cart);?></b> <?php echo Loc::getMessage("CURR_RUB");?>
              </span>
            </div>
            <div class="basket-line">
              <span><?php echo Loc::getMessage("SHOP_CART_SKIDKA");?></span>
              <span>
                <b>0</b> <?php echo Loc::getMessage("CURR_RUB");?>
              </span>
            </div>
            <div class="basket-line">
              <span><?php echo Loc::getMessage("SHOP_CART_BALL");?></span>
              <span>
                <b>0</b> <?php echo Loc::getMessage("CURR_RUB");?>
              </span>
            </div>
            <div class="basket-line">
              <span><?php echo Loc::getMessage("SHOP_CART_DELIV");?></span>
              <span>
                <b>0</b> <?php echo Loc::getMessage("CURR_RUB");?>
              </span>
            </div>
            <div class="basket-line__final">
              <span class="fw-600"><?php echo Loc::getMessage("SHOP_CART_ITOG");?></span>
              <span>
                <b class="shop_cart_summ_input"><?php echo swf_util::get_num_form_2($sum_full);?> </b> <?php echo Loc::getMessage("CURR_RUB");?>
              </span>
            </div>
            <?php
              if ($USER->IsAuthorized()) {
                $tmp_but_class="basket_form_submit_action";
              } else {
                $tmp_but_class="auth-event";
              }
            ?>
            <a href="" class="btn btn_basket btn_basket_desktop <?php echo $tmp_but_class;?>"><?php echo Loc::getMessage("SHOP_CART_EXEC_ORDER");?></a>
          </div>
        </div>
      </div>
    </div>
    <div class="new-image">
      <div class="container">
        <?php
          //Дополните свой образ
          $APPLICATION->IncludeComponent(
            "swf:shop",
            "slider_1",
            [
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
              "NO_LINK_CATALOG_TITLE"=>"Y",
              "SLIDER_TITLE"=>Loc::getMessage("SHOP_SLIDER_1_IN_CART"),
              "SLIDER_LIMIT"=>rand(3,10),
              "ALL_CATALOG_CAST_TITLE"=>"NO_TEXT",
              "BUTT_CENTER"=>"N",
            ],
          );
        ?>
      </div>
    </div>
  <?php else:?>
    <?php //Пустая корзина?>
    <div class="basket-top">
      <div class="container">
        <div class="basket-container">
          <div class="basket-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="120" viewBox="0 0 80 120" fill="none">
              <path d="M53.8285 38.1496C53.8285 30.68 54.1502 23.0816 52.9062 15.6764C52.0054 10.3532 49.9679 4.79396 44.9492 2.06799C42.2468 0.608408 39.1584 0.0718009 36.1129 0.00740776C32.9601 -0.0569854 29.743 0.286445 26.8261 1.50991C21.7431 3.65635 19.1694 8.42144 18.0326 13.6158C16.2954 21.622 16.9174 30.079 16.9174 38.214C16.9174 38.7506 17.9683 38.6003 17.9683 38.1281C17.9683 31.1093 17.6251 23.9831 18.5045 17.0072C19.1479 11.8987 20.6278 6.275 25.1747 3.24853C27.6626 1.59577 30.6866 0.973304 33.625 0.801589C36.7992 0.629874 40.1021 0.887445 43.0404 2.13238C48.1234 4.27882 50.5041 9.30148 51.5765 14.4315C53.185 22.1801 52.7775 30.3366 52.7561 38.214C52.7775 38.7721 53.8285 38.6218 53.8285 38.1496Z"
                  fill="#263740"/>
              <path d="M1.00024 112.042V27H10.6731V36.2941L7.11277 117.708L5.39697 113.609L1.00024 112.042Z"
                  fill="#B3A8A4"/>
              <path d="M2.95508 108.553V31.5172C2.95508 29.2634 4.77811 27.439 7.0301 27.439H10.9121V36.4755L7.54484 115.765L6.55825 111.772L4.49929 110.914C3.5556 110.506 2.95508 109.583 2.95508 108.553Z"
                  fill="#F2F4F7"/>
              <path d="M1.7541 112.33C1.7541 109.519 1.7541 106.707 1.7541 103.895C1.7541 97.1336 1.7541 90.3938 1.7541 83.6325C1.7541 75.4117 1.7541 67.2123 1.7541 58.9914C1.7541 51.9297 1.7541 44.8464 1.7541 37.7846C1.7541 35.445 1.7541 33.1269 1.7541 30.7873C1.7541 30.0575 1.7541 29.3277 1.7541 28.5979C1.7541 28.2759 1.86134 27.7608 1.7541 27.4603C1.73266 27.4174 1.7541 27.353 1.7541 27.31C1.47529 27.4174 1.17502 27.5247 0.896205 27.6535C2.54766 27.6535 4.19912 27.6535 5.85057 27.6535C6.94439 27.6535 8.05966 27.6535 9.15348 27.6535C9.49664 27.6535 9.86125 27.6749 10.2259 27.6535C10.2902 27.6535 10.4403 27.632 10.5047 27.6535C10.7191 27.7393 10.3974 27.4603 10.4189 27.632C10.5476 28.2115 10.4189 28.9413 10.4189 29.5209C10.4189 30.6799 10.4189 31.839 10.4189 32.9981C10.4189 34.3074 10.4403 35.6167 10.4189 36.9046C10.3116 41.1116 10.0543 45.3186 9.86124 49.5257C9.47519 58.4548 9.08913 67.384 8.68163 76.3132C8.27413 85.4355 7.88808 94.5579 7.48058 103.68C7.33045 106.9 7.20176 110.12 7.05163 113.361C7.00873 114.391 6.96584 115.443 6.92294 116.473C6.9015 116.967 6.77281 117.611 6.8586 118.104C6.88004 118.169 6.8586 118.255 6.8586 118.319C7.20176 118.233 7.54492 118.126 7.88808 118.04C7.58782 117.332 7.28755 116.602 6.98728 115.893C6.77281 115.378 6.55833 114.305 6.12938 113.919C5.70044 113.532 4.56372 113.361 4.02754 113.168C3.25543 112.888 2.48332 112.631 1.73265 112.352C1.45384 112.245 0.703175 112.674 0.74607 112.695C1.45384 112.953 2.14016 113.189 2.84793 113.447C3.34122 113.618 3.85596 113.811 4.34925 113.983C4.54227 114.048 4.97122 114.112 5.1428 114.262C5.48596 114.584 5.78623 115.786 5.97926 116.28C6.25807 116.967 6.55834 117.654 6.83716 118.319C6.92295 118.534 7.86663 118.255 7.86663 118.04C8.01676 114.756 8.14545 111.45 8.29558 108.166C8.63874 100.525 8.96045 92.8622 9.30361 85.2209C9.68967 76.5708 10.0543 67.9206 10.4403 59.2705C10.7191 52.9814 10.998 46.6709 11.2553 40.3818C11.4269 36.4753 11.4269 32.5903 11.4269 28.6838C11.4269 28.233 11.4269 27.8037 11.4269 27.353C11.4269 27.2886 11.2553 27.2886 11.2553 27.2886C8.01676 27.2886 4.79964 27.2886 1.56108 27.2886C1.3895 27.2886 0.703179 27.3744 0.703179 27.632C0.703179 30.4438 0.703179 33.2557 0.703179 36.0675C0.703179 42.8288 0.703179 49.5686 0.703179 56.3299C0.703179 64.5507 0.703179 72.7501 0.703179 80.971C0.703179 88.0327 0.703179 95.116 0.703179 102.178C0.703179 104.517 0.703179 106.836 0.703179 109.175C0.703179 109.905 0.703179 110.635 0.703179 111.365C0.703179 111.665 0.595941 112.245 0.703179 112.502C0.724626 112.545 0.703179 112.609 0.703179 112.652C0.724626 112.738 1.7541 112.588 1.7541 112.33Z"
                  fill="#263740"/>
              <path d="M7.11255 36.2939C35.0586 42.4113 80.3771 37.5818 78.5326 36.2939V117.708C78.5326 117.708 54.8117 121.271 7.11255 117.708V36.2939Z"
                  fill="#B3A8A4"/>
              <path d="M13.0569 37.1622C52.799 41.7556 78.7719 36.7114 78.7719 36.7114V113.447C78.7719 114.949 77.6138 116.194 76.1124 116.323C67.5549 117.01 39.759 118.877 14.9657 116.666C11.7915 116.387 9.36792 113.726 9.36792 110.527V40.4462C9.36792 38.4715 11.0837 36.9261 13.0569 37.1622Z"
                  fill="white"/>
              <path d="M7.0302 36.9478C19.6413 38.7937 32.4883 39.2015 45.2281 39.18C55.0296 39.1586 64.9598 38.9654 74.7184 37.8707C75.8766 37.7419 77.0776 37.6131 78.2143 37.3126C78.3859 37.2697 79.7157 36.8834 79.2438 36.5185C79.0293 36.3468 78.2358 36.5185 78.2358 36.8404C78.2358 39.5449 78.2358 42.228 78.2358 44.9325C78.2358 51.4147 78.2358 57.8755 78.2358 64.3577C78.2358 72.1922 78.2358 80.0267 78.2358 87.8612C78.2358 94.644 78.2358 101.427 78.2358 108.209C78.2358 110.442 78.2358 112.696 78.2358 114.928C78.2358 115.636 78.2358 116.344 78.2358 117.031C78.2358 117.31 78.1285 117.868 78.2358 118.126C78.2572 118.169 78.2358 118.233 78.2358 118.276C78.4288 118.147 78.6433 118.019 78.8363 117.89C72.3163 118.856 65.6461 119.092 59.0618 119.285C50.8045 119.543 42.5687 119.5 34.3114 119.285C28.8423 119.135 23.3946 118.899 17.947 118.577C14.9443 118.405 11.9417 118.212 8.93903 117.997C8.72455 117.976 7.90955 118.062 7.8452 117.954C7.82376 117.89 7.86665 117.783 7.8452 117.718C7.65218 116.967 7.8452 115.937 7.8452 115.164C7.8452 113.554 7.8452 111.944 7.8452 110.334C7.8452 105.462 7.8452 100.568 7.8452 95.6957C7.8452 83.504 7.8452 71.3122 7.8452 59.1204C7.8452 54.248 7.8452 49.3542 7.8452 44.4817C7.8452 41.9919 8.01678 39.4376 7.8452 36.9478C7.8452 36.8404 7.8452 36.7116 7.8452 36.5829C7.8452 36.3253 6.81573 36.497 6.81573 36.8619C6.81573 39.5664 6.81573 42.2495 6.81573 44.954C6.81573 51.4362 6.81573 57.897 6.81573 64.3792C6.81573 72.2137 6.81573 80.0482 6.81573 87.8827C6.81573 94.6654 6.81573 101.448 6.81573 108.231C6.81573 110.463 6.81573 112.717 6.81573 114.949C6.81573 115.658 6.81573 116.366 6.81573 117.053C6.81573 117.353 6.70849 117.847 6.81573 118.147C6.83717 118.19 6.81573 118.255 6.81573 118.298C6.81573 118.362 6.96586 118.405 7.00875 118.405C21.9576 119.521 36.9709 120.144 51.9626 119.972C59.7052 119.865 67.4692 119.586 75.1903 118.813C76.3484 118.706 77.5066 118.577 78.6647 118.405C78.8363 118.384 79.2653 118.276 79.2653 118.019C79.2653 115.314 79.2653 112.631 79.2653 109.927C79.2653 103.444 79.2653 96.9836 79.2653 90.5014C79.2653 82.6669 79.2653 74.8324 79.2653 66.9979C79.2653 60.2151 79.2653 53.4324 79.2653 46.6496C79.2653 44.4174 79.2653 42.1636 79.2653 39.9313C79.2653 39.223 79.2653 38.5146 79.2653 37.8278C79.2653 37.5273 79.3511 37.0336 79.2653 36.7331C79.2438 36.6902 79.2653 36.6258 79.2653 36.5829C78.9221 36.6902 78.6004 36.7975 78.2572 36.9048C78.2358 36.8834 78.4717 36.819 78.3216 36.819C78.2572 36.819 77.8283 36.9478 77.5924 36.9907C76.4771 37.2053 75.3404 37.3341 74.2251 37.4414C70.3217 37.8493 66.3968 38.0854 62.4719 38.2571C50.8688 38.7937 39.2228 38.8366 27.6198 38.2785C20.9496 37.9566 14.2794 37.42 7.67363 36.4541C7.41626 36.4111 6.47257 36.8834 7.0302 36.9478Z"
                  fill="#263740"/>
              <path d="M78.7718 36.7113L62.6434 30.2505L72.1017 27.4387C72.1017 27.4387 42.0323 25.464 1.23926 27.4387L10.9335 30.6369L7.37323 36.7113C47.9089 42.0559 78.7718 36.7113 78.7718 36.7113Z"
                  fill="#B3A8A4"/>
              <path d="M79.1793 36.4539C73.796 34.3074 68.4341 32.1395 63.0508 29.9931C62.9436 30.1648 62.8149 30.3365 62.7076 30.5082C65.8604 29.5638 69.0132 28.6408 72.166 27.6964C72.4877 27.5891 72.8737 27.1598 72.2947 27.1383C68.0695 26.8593 63.8443 26.709 59.6192 26.5802C48.5094 26.2368 37.3782 26.1724 26.2469 26.3441C17.9253 26.4729 9.6037 26.7305 1.28209 27.1383C1.00327 27.1598 0.381294 27.5461 0.896033 27.7179C4.1346 28.7911 7.35172 29.8643 10.5903 30.916C10.5259 30.8087 10.4831 30.7229 10.4187 30.6156C9.2391 32.6332 8.03804 34.6723 6.85843 36.69C6.77264 36.8402 6.85843 36.969 7.03001 36.9905C20.9065 38.8149 34.9117 39.5877 48.8955 39.3301C57.3887 39.1798 65.9033 38.6647 74.3536 37.6129C75.7906 37.4412 77.249 37.248 78.686 36.9905C79.1793 36.9046 79.5439 36.2821 78.8147 36.4109C74.611 37.1407 70.3429 37.5271 66.0963 37.892C55.0509 38.8149 43.9411 39.0081 32.8742 38.5574C24.4454 38.2139 16.0165 37.5056 7.65199 36.4109C7.71633 36.5183 7.75922 36.6041 7.82356 36.7114C9.00317 34.6938 10.2042 32.6547 11.3838 30.637C11.4696 30.4653 11.3624 30.3794 11.2123 30.3365C7.9737 29.2633 4.75658 28.1901 1.51801 27.1383C1.38932 27.3315 1.26064 27.5247 1.13196 27.7179C15.0299 27.0525 28.9279 26.7734 42.8473 26.8593C51.1474 26.9237 59.4691 27.0954 67.7692 27.5032C69.1419 27.5676 70.5145 27.632 71.8657 27.7179C71.9086 27.5247 71.9515 27.3315 71.9944 27.1598C68.8416 28.1042 65.6888 29.0272 62.5361 29.9716C62.4074 30.0145 61.8283 30.3365 62.1929 30.4868C67.5762 32.6332 72.9381 34.8011 78.3214 36.9475C78.686 37.0978 79.6082 36.6256 79.1793 36.4539Z"
                  fill="#263740"/>
              <path d="M72.1021 27.4175L62.6438 30.2293L72.1021 34.05V27.4175Z" fill="#EFEFEF"/>
              <path d="M72.016 27.1167C68.8632 28.0612 65.7104 28.9841 62.5576 29.9286C62.2574 30.0144 61.8928 30.4008 62.3432 30.5725C65.4959 31.8389 68.6487 33.1053 71.8015 34.3717C72.0374 34.4576 72.6379 34.3073 72.6379 34.0068C72.6379 31.796 72.6379 29.6066 72.6379 27.3958C72.6379 26.9021 71.587 27.0738 71.587 27.5031C71.587 29.7139 71.587 31.9033 71.587 34.1141C71.8658 33.9853 72.1447 33.8566 72.4235 33.7492C69.2707 32.4828 66.1179 31.2164 62.9651 29.95C62.9008 30.1647 62.815 30.3793 62.7507 30.594C65.9035 29.6495 69.0562 28.7266 72.209 27.7821C72.8095 27.5675 72.6379 26.9236 72.016 27.1167Z"
                  fill="#263740"/>
              <path d="M60.52 46.6922C60.52 39.1797 60.8632 31.5169 59.5763 24.0903C58.6541 18.7456 56.5094 13.2508 51.3834 10.6536C48.6167 9.25839 45.4854 8.8291 42.4184 8.8291C39.3728 8.8291 36.2844 9.21546 33.4748 10.4175C28.3703 12.5854 25.818 17.329 24.7242 22.5448C23.0513 30.5081 23.6304 38.9007 23.6518 46.9713C23.6518 47.143 24.6813 46.9928 24.6813 46.6922C24.6813 39.6734 24.3382 32.5472 25.2175 25.5713C25.8609 20.4199 27.3837 14.7533 31.952 11.7053C34.5472 9.98818 37.657 9.38718 40.724 9.27985C43.8983 9.17253 47.2441 9.4945 50.1395 10.8897C55.0509 13.2293 57.3244 18.2305 58.3324 23.339C59.8981 31.0662 59.4906 39.1583 59.4906 46.9927C59.4906 47.1215 60.52 46.9928 60.52 46.6922Z"
                  fill="#263740"/>
              <path d="M25.2173 48.5382C25.1744 49.1392 24.8313 49.8904 24.1021 49.7616C23.4801 49.6329 23.0511 49.0104 23.0511 48.3879C23.0511 47.7225 23.5444 47.0142 24.2736 47.2503C24.8956 47.4435 25.1959 48.023 25.2173 48.624C25.2388 48.9889 26.2683 48.7743 26.2468 48.345C26.1181 45.7907 21.9788 46.1556 21.9788 48.5811C21.9788 51.1568 26.1181 50.8349 26.2468 48.4309C26.2897 47.9586 25.2388 48.1518 25.2173 48.5382Z"
                  fill="#263740"/>
              <path d="M61.0992 48.538C61.0563 49.1605 60.7131 49.9117 59.9839 49.7615C59.3405 49.6327 58.933 48.9673 58.933 48.3663C58.933 47.7009 59.4263 46.9711 60.1555 47.2072C60.7775 47.4004 61.0777 48.0014 61.1206 48.6024C61.1421 48.9244 62.1716 48.7097 62.1501 48.3234C62.0214 45.7906 57.9035 46.1769 57.8821 48.5595C57.8821 51.1137 62.0214 50.7489 62.1501 48.3878C62.1501 48.0014 61.1206 48.2161 61.0992 48.538Z"
                  fill="#263740"/>
              <path d="M30.5658 72.8905C30.8422 71.7134 30.1128 70.5349 28.9366 70.2583C27.7605 69.9816 26.5829 70.7116 26.3064 71.8887C26.03 73.0658 26.7594 74.2443 27.9356 74.5209C29.1118 74.7976 30.2893 74.0676 30.5658 72.8905Z"
                  fill="#263740"/>
              <path d="M60.2463 71.7873C60.5673 70.6216 59.8834 69.4163 58.7187 69.095C57.554 68.7737 56.3495 69.4582 56.0285 70.6238C55.7075 71.7894 56.3914 72.9948 57.5561 73.3161C58.7209 73.6374 59.9253 72.9529 60.2463 71.7873Z"
                  fill="#263740"/>
              <path d="M34.6198 88.8826C35.9731 87.4441 37.983 86.4003 39.8992 85.8402C43.4098 84.8091 47.3358 85.3182 50.5115 87.0622C51.1681 87.4186 51.8246 87.8387 52.374 88.3352C52.5214 88.4752 53.1244 88.2461 52.977 88.1061C51.3155 86.5785 48.8768 85.6492 46.6525 85.2419C42.9676 84.5672 39.122 85.3182 36.0267 87.3168C35.3166 87.7751 34.6064 88.2843 34.0302 88.8953C33.856 89.0608 34.4858 89.0099 34.6198 88.8826Z"
                  fill="#263740"/>
            </svg>
          </div>
          <div class="basket-title"><?php echo Loc::getMessage("SHOP_CART_NULL");?></div>
          <a href="<?php echo $arParams["LINK_CATALOG"]?><?php echo $arParams["SECTION_CODE_PRINT"];?>/" class="btn">
            <?php echo Loc::getMessage("SHOP_CART_GO_CATALOG");?>
          </a>
        </div>
      </div>
    </div>
    <div class="container">
      <?php
        //Новинки
        $APPLICATION->IncludeComponent(
          "swf:shop",
          "slider_1",
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
            "SLIDER_LIMIT"=>rand(3,10),
            "ALL_CATALOG_CAST_TITLE"=>"SHOP_SLIDER_1_NEWS_ALL",
            "BUTT_CENTER"=>"Y",
            "FILTER_NEW"=>"Y",
          ],
        );
        
        //Хиты продаж
        $APPLICATION->IncludeComponent(
          "swf:shop",
          "slider_1",
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
            "SLIDER_TITLE"=>Loc::getMessage("SHOP_SLIDER_1_HIT"),
            "SLIDER_LIMIT"=>rand(3,10),
            "ALL_CATALOG_CAST_TITLE"=>"SHOP_SLIDER_1_HIT_ALL",
            "BUTT_CENTER"=>"Y",
            "FILTER_HIT"=>"Y",
          ],
        );
      ?>
    </div>
  <?php endif;?>
</main>