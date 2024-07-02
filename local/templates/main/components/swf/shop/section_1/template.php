<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php
  use Bitrix\Main\Localization\Loc;

  //Проверяем поиск или нет
  if (isset($_GET["search"])) {
    $poisk=true;
  } else {
    $poisk=false;
  }
  //Настраиваем текущие значения фильтров
    //Цена
    $filter_price_start_def=0;
    $filter_price_end_def=30000;
    
    $filter_price_start=$filter_price_start_def;
    $filter_price_end=$filter_price_end_def;
    if (isset($arResult["FILTER"]["price_start"])) {
      $filter_price_start=$arResult["FILTER"]["price_start"];
    }
    if (isset($arResult["FILTER"]["price_end"])) {
      $filter_price_end=$arResult["FILTER"]["price_end"];
    }
    //Определяем применен ли фильтр Цена, отличный от дефолта
    if ($filter_price_start==$filter_price_start_def AND $filter_price_end==$filter_price_end_def) {
      $view_price_filter_use=false;
    } else {
      $view_price_filter_use=true;
    }
    //Размер
    $filter_size=[];
    if (isset($arResult["FILTER"]["size"])) {
      $filter_size=$arResult["FILTER"]["size"];
    }     
    //Цвет
    $filter_color=[];
    if (isset($arResult["FILTER"]["color"])) {
      $filter_color=$arResult["FILTER"]["color"];
    }     
    //Модель (Коллекция)
    $filter_ar_models=[];
    if (isset($arParams["arSettings"])) {
      $filter_ar_models=$arParams["arSettings"]["MODEL_1"];
    }
    $filter_collect=[];
    if (isset($arResult["FILTER"]["collect"])) {
      $filter_collect=$arResult["FILTER"]["collect"];
    }
    //Дополнительно клеим модель из гета, если она есть
    if ($_GET["model"]!="") {
      if (!in_array($_GET["model"],$filter_collect)) {
        $filter_collect[]=$_GET["model"];
      }
    }
?>
<main>
  <?php //Страница каталога?>
  <?php if(!$poisk):?>
    <?php
      // $print_name_section=$arParams["SECTION_NAME_PRINT"];
      // if ($print_name_section=="") {
      //   $print_name_section="Купальники";
      // }
      // $data_img["bg"]="/img/catalog/bg.jpg";
      // $data_img["bg-tablet"]="/img/catalog/bg-tablet.jpg";
      // $data_img["bg-mobile"]="/img/catalog/bg-mobile.jpg";
      // if ($_GET["vid"]=="Купальник женский слитный") {
      //   $print_name_section="Слитные купальники";
      //   $data_img["bg"]="/img/catalog/bg-one-piece-tablet.jpg";
      //   $data_img["bg-tablet"]="/img/catalog/bg-one-piece-tablet.jpg";
      //   $data_img["bg-mobile"]="/img/catalog/bg-one-piece-mobile.jpg";
      // }
      // if ($_GET["vid"]=="Купальник женский раздельный") {
      //   $print_name_section="Раздельные купальники";
      //   $data_img["bg"]="/img/catalog/bg-two-piece-tablet.jpg";
      //   $data_img["bg-tablet"]="/img/catalog/bg-two-piece-tablet.jpg";
      //   $data_img["bg-mobile"]="/img/catalog/bg-two-piece-mobile.jpg";
      // }
      // if ($_GET["new"]=="Y") {
      //   $print_name_section="Новинки";
      // }
      // if ($_GET["hit"]=="Y") {
      //   $print_name_section="Хиты продаж";
      //   $data_img["bg"]="/img/catalog/bg-hit-tablet.jpg";
      //   $data_img["bg-tablet"]="/img/catalog/bg-hit-tablet.jpg";
      //   $data_img["bg-mobile"]="/img/catalog/bg-hit-mobile.jpg";
      // }
      // if ($_GET["sale"]=="Y") {
      //   $print_name_section="Купальники со скидками";
      //   $data_img["bg"]="/img/catalog/bg-sale-tablet.jpg";
      //   $data_img["bg-tablet"]="/img/catalog/bg-sale-tablet.jpg";
      //   $data_img["bg-mobile"]="/img/catalog/bg-sale-mobile.jpg";
      // }
      // if ($_GET["model"]!="") {
      //   $print_name_section="Купальники ".$_GET["model"];
      // }
    ?>
    <div class="catalog-container" style="background-image: url('<?php echo SITE_TEMPLATE_PATH.$data_img["bg"];?>')">
      <div class="catalog-container__tablet" style="background-image: url('<?php echo SITE_TEMPLATE_PATH.$data_img["bg-tablet"];?>')"></div>
      <div class="catalog-container__mobile" style="background-image: url('<?php echo SITE_TEMPLATE_PATH.$data_img["bg-mobile"];?>')"></div>
      <div class="container">
        <?php
        if($print_name_section=="Купальники" || $_GET["model"]!="")
        {
          $breadcrumbs = [
            [
              "NAME"=>"Главная",
              "LINK"=>"/",
            ],
            [
              "NAME"=>"Каталог",
              "LINK"=>"",
            ]
          ];
        }
        else
        {
          $breadcrumbs = [
              [
                "NAME"=>"Главная",
                "LINK"=>"/",
              ],
              [
                "NAME"=>"Каталог",
                "LINK"=>"/catalog/kupalniki/",
              ]
              ,
              [
                "NAME"=>$print_name_section,
                "LINK"=>"",
              ]
            ];
          }
          //Хлебные крошки
          $APPLICATION->IncludeComponent(
            "swf:breadcrumbs",
            "main_1",
            [
              "ITEMS"=> $breadcrumbs,
            ],
          );
        ?>
      </div>
      <!-- <div class="container">
        <div class="article-page__title"><?php echo $print_name_section;?></div>
      </div> -->
    </div>
  <?php endif;?>
  <div class="container">
    <?php //Страница поиска?>
    <?php if($poisk):?>
      <?php
        $count_search=count($arResult["ITEMS"]);
        $arCountNames=[
          "товар",
          "товара",
          "товаров",
        ];
      ?>
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
              "NAME"=>"Результаты поиска",
              "LINK"=>"",
            ]
            ],
          ],
        );
      ?>
      <div class="search-head">
        <h1>Результаты поиска</h1>
        <div class="search-head__count">Найдено: <?php echo swf_util::num_word($count_search,$arCountNames);?></div>
      </div>
    <?php endif;?>
    <div class="catalog-block">
      <?php if($arParams["USE_FILTER"]=="Y"):?>
        <div class="filter-mobile">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
            <path d="M6.82221 17L10.6444 15.2222V10.5111L16.6 4.46667C16.8667 4.2 16.9555 3.93333 16.9555 3.57778V2.24444C16.9555 1.62222 16.4222 1.08889 15.8 1H2.19999C1.57777 1 1.04443 1.53333 1.04443 2.24444V3.57778C1.04443 3.84444 1.13332 4.2 1.39999 4.37778L6.9111 10.4222L6.82221 17Z" stroke="#263740" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
          Фильтры
        </div>
        <div class="catalog-filter">
          <div class="filter-default">
            <div class="filter-mobile__block">
              Фильтры
              <div class="filter-close">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                  <path d="M1 1L17 17" stroke="#263740" stroke-linecap="square"/>
                  <path d="M17 1L1 17" stroke="#263740" stroke-linecap="square"/>
                </svg>
              </div>
            </div>
            <div class="left-block">
              <div class="filter-item" > 
                <span class="cast_local_caption_div">
                  Цена&nbsp;
                  <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L5 5L9 1" stroke="#263740" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                  <div class="filter-menu">
                    <div class="filter-menu__content">
                      <div class="filter-menu__price">
                        <input type="number" placeholder="От">
                        <span>-</span>
                        <input type="number" placeholder="До">
                      </div>
                    </div>
                  </div>
                </span>
                <!-- <span class="id_filter_val_span__price" data-attr="price">
                  <?php if($view_price_filter_use):?>
                    <?php echo swf_util::get_num_form_2($filter_price_start);?> - <?php echo swf_util::get_num_form_2($filter_price_end);?>&nbsp;<?php echo Loc::getMessage("CURR_RUB");?>
                  <?php endif;?>
                </span> -->
              </div>
              <div class="filter-item" >
                <span class="cast_local_caption_div">
                  Размер&nbsp;
                  <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L5 5L9 1" stroke="#263740" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                  <div class="filter-menu">
                    <div class="filter-menu__content">
                      <div class="filter-menu__size menu-size">
                          <div class="menu-size__head">
                              <span>rus</span>
                              <span>int</span>
                          </div>
                      </div>
                    </div>
                  </div>
                </span>
                <!-- <span class="id_filter_val_span__size" data-attr="size">
                  <?php $sch_100=0;?>
                  <?php foreach($filter_size AS $key_100=>$val_100):?>
                    <?php echo trim(strtoupper($val_100));?><?php if($sch_100+1!=count($filter_size)){echo ",";}?>
                    <?php $sch_100++;?>
                  <?php endforeach;?>
                </span> -->
              </div>
              <div class="filter-item" >
                <span class="cast_local_caption_div">
                  Цвет
                </span>
                <!-- <span class="id_filter_val_span__color" data-attr="color">
                  <?php foreach($filter_color AS $key_100=>$val_100):?>
                    <div class="color_filter_use_1">
                      <div class="color_filter_use_1_center" style="background-color: <?php echo $arParams["arSettings"]["COLOR_1"][$val_100];?>">
                      </div>
                    </div>
                  <?php endforeach;?>
                </span> -->
              </div>
            </div>
            
            
            
            <?php 
              if (count($filter_collect)>0) {
                $dop_text="&nbsp;(".count($filter_collect).")";
              } else {
                $dop_text="";
              }
            ?>
            <div class="right-block">
              <div class="filter-item " >
                <span class="cast_local_caption_div">
                  Коллекция
                </span>
                <!-- <span class="id_filter_val_span__collect"><?php echo $dop_text;?></span> data-attr="collection"  <?php echo $dop_class;?>-->
              </div>
              <div class="filter-send btn btn-mobile cast_filter_send_mobile_action">Применить</div>
              <div class="filter-reset btn">Очистить</div>
            </div>
           
            
          </div>
          <div class="filter-container" data-id="price">
            <div class="filter-head">
              Цена
              <div class="filter-close">
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                  <path d="M1 1L9 9" stroke="#263740" stroke-linecap="round"/>
                  <path d="M9 1L1 9" stroke="#263740" stroke-linecap="round"/>
                </svg>
              </div>
            </div>
            <div class="filter-price">
              <div class="filter-price__input">
                <input type="text" class="filter-price__input_start" placeholder="0" value="<?php echo $filter_price_start;?>">
                <div class="filter-price__delimiter">-</div>
                <input type="text" class="filter-price__input_end" placeholder="12000" value="<?php echo $filter_price_end;?>">
              </div>
              <div id="slider"></div>
            </div>
            <div class="btn_final">
              <a href="#" class="btn">Готово</a>
            </div>
          </div>
          <div class="filter-container" data-id="size">
            <div class="filter-head">
              Размер
              <div class="filter-close">
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                  <path d="M1 1L9 9" stroke="#263740" stroke-linecap="round"/>
                  <path d="M9 1L1 9" stroke="#263740" stroke-linecap="round"/>
                </svg>
              </div>
            </div>
            <div class="filter-size">
              <div class="filter-size__tr filter-size__tr-head">
                <div class="filter-size__td">
                </div>
                <div class="filter-size__td">RUs</div>
                <div class="filter-size__td">INT</div>
                <div class="filter-size__td">обхват груди, см</div>
                <div class="filter-size__td">обхват талии, см</div>
                <div class="filter-size__td">обхват бедер, см</div>
              </div>
              
              <div class="filter-size__tr">
                <div class="filter-size__td">
                  <div class="filter-size__input">
                    <?php
                      $t_check="";
                      if (in_array("xs",$filter_size)) {
                        $t_check="checked";
                      }
                    ?>
                    <input type="checkbox" class="filter_size_class" size-val="xs" <?php echo $t_check;?>>
                    <span class="filter-size__icon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="9" height="7" viewBox="0 0 9 7" fill="none">
                        <path d="M8.14286 1L3.40525 6L1 3.53846" stroke="#263740" stroke-width="1.4" stroke-miterlimit="10" stroke-linejoin="round"/>
                      </svg>
                    </span>
                  </div>
                </div>
                <div class="filter-size__td">42</div>
                <div class="filter-size__td">xs</div>
                <div class="filter-size__td">84</div>
                <div class="filter-size__td">66</div>
                <div class="filter-size__td">90</div>
              </div>
              <div class="filter-size__tr">
                <div class="filter-size__td">
                  <div class="filter-size__input">
                    <?php
                      $t_check="";
                      if (in_array("s",$filter_size)) {
                        $t_check="checked";
                      }
                    ?>
                    <input type="checkbox" class="filter_size_class" size-val="s" <?php echo $t_check;?>>
                    <span class="filter-size__icon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="9" height="7" viewBox="0 0 9 7" fill="none">
                        <path d="M8.14286 1L3.40525 6L1 3.53846" stroke="#263740" stroke-width="1.4" stroke-miterlimit="10" stroke-linejoin="round"/>
                      </svg>
                    </span>
                  </div>
                </div>
                <div class="filter-size__td">44</div>
                <div class="filter-size__td">s</div>
                <div class="filter-size__td">88</div>
                <div class="filter-size__td">70</div>
                <div class="filter-size__td">94</div>
              </div>
              <div class="filter-size__tr">
                <div class="filter-size__td">
                  <div class="filter-size__input">
                    <?php
                      $t_check="";
                      if (in_array("m",$filter_size)) {
                        $t_check="checked";
                      }
                    ?>
                    <input type="checkbox" class="filter_size_class" size-val="m" <?php echo $t_check;?>>
                    <span class="filter-size__icon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="9" height="7" viewBox="0 0 9 7" fill="none">
                        <path d="M8.14286 1L3.40525 6L1 3.53846" stroke="#263740" stroke-width="1.4" stroke-miterlimit="10" stroke-linejoin="round"/>
                      </svg>
                    </span>
                  </div>
                </div>
                <div class="filter-size__td">46</div>
                <div class="filter-size__td">m</div>
                <div class="filter-size__td">92</div>
                <div class="filter-size__td">74</div>
                <div class="filter-size__td">98</div>
              </div>
              <div class="filter-size__tr">
                <div class="filter-size__td">
                  <div class="filter-size__input">
                    <?php
                      $t_check="";
                      if (in_array("l",$filter_size)) {
                        $t_check="checked";
                      }
                    ?>
                    <input type="checkbox" class="filter_size_class" size-val="l" <?php echo $t_check;?>>
                    <span class="filter-size__icon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="9" height="7" viewBox="0 0 9 7" fill="none">
                        <path d="M8.14286 1L3.40525 6L1 3.53846" stroke="#263740" stroke-width="1.4" stroke-miterlimit="10" stroke-linejoin="round"/>
                      </svg>
                    </span>
                  </div>
                </div>
                <div class="filter-size__td">48</div>
                <div class="filter-size__td">l</div>
                <div class="filter-size__td">96</div>
                <div class="filter-size__td">78</div>
                <div class="filter-size__td">102</div>
              </div>
              <div class="filter-size__tr">
                <div class="filter-size__td">
                  <div class="filter-size__input">
                    <?php
                      $t_check="";
                      if (in_array("xl",$filter_size)) {
                        $t_check="checked";
                      }
                    ?>
                    <input type="checkbox" class="filter_size_class" size-val="xl" <?php echo $t_check;?>>
                    <span class="filter-size__icon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="9" height="7" viewBox="0 0 9 7" fill="none">
                        <path d="M8.14286 1L3.40525 6L1 3.53846" stroke="#263740" stroke-width="1.4" stroke-miterlimit="10" stroke-linejoin="round"/>
                      </svg>
                    </span>
                  </div>
                </div>
                <div class="filter-size__td">50</div>
                <div class="filter-size__td">xl</div>
                <div class="filter-size__td">100</div>
                <div class="filter-size__td">82</div>
                <div class="filter-size__td">106</div>
              </div>
              <div class="filter-size__tr">
                <div class="filter-size__td">
                  <div class="filter-size__input">
                    <?php
                      $t_check="";
                      if (in_array("xxl",$filter_size)) {
                        $t_check="checked";
                      }
                    ?>
                    <input type="checkbox" class="filter_size_class" size-val="xxl" <?php echo $t_check;?>>
                    <span class="filter-size__icon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="9" height="7" viewBox="0 0 9 7" fill="none">
                        <path d="M8.14286 1L3.40525 6L1 3.53846" stroke="#263740" stroke-width="1.4" stroke-miterlimit="10" stroke-linejoin="round"/>
                      </svg>
                    </span>
                  </div>
                </div>
                <div class="filter-size__td">52</div>
                <div class="filter-size__td">xxl</div>
                <div class="filter-size__td">104</div>
                <div class="filter-size__td">86</div>
                <div class="filter-size__td">110</div>
              </div>
            </div>
            <div class="btn_final">
              <a href="#" class="btn">Готово</a>
            </div>
          </div>
          <div class="filter-container" data-id="color">
            <div class="filter-head">
              Цвет
              <div class="filter-close">
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                  <path d="M1 1L9 9" stroke="#263740" stroke-linecap="round"/>
                  <path d="M9 1L1 9" stroke="#263740" stroke-linecap="round"/>
                </svg>
              </div>
            </div>
            <div class="filter-color">
              <?php foreach($arParams["arSettings"]["COLOR_1"] AS $key_2=>$val_2):?>
                <?php if(in_array($key_2,$arResult["COLOR_FOR_FILTER"])):?>
                  <div class="filter-color__item">
                    <?php
                      $t_check="";
                      if (in_array($key_2,$filter_color)) {
                        $t_check="checked";
                      }
                    ?>
                    <input type="checkbox" class="filter_color_class" color-val="<?php echo $key_2;?>" <?php echo $t_check;?>>
                    <div class="filter-color__element">
                      <span style="background: <?php echo $val_2;?>"></span>
                      <?php echo $key_2;?>
                    </div>
                  </div>
                <?php endif;?>
              <?php endforeach;?>
            </div>
            <div class="btn_final">
              <a href="#" class="btn">Готово</a>
            </div>
          </div>
          <div class="filter-container" data-id="collection">
            <div class="filter-head">
              Коллекция
              <div class="filter-close">
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                  <path d="M1 1L9 9" stroke="#263740" stroke-linecap="round"/>
                  <path d="M9 1L1 9" stroke="#263740" stroke-linecap="round"/>
                </svg>
              </div>
            </div>
            <div class="filter-color">
              <?php foreach($filter_ar_models AS $key_5=>$val_5):?>
                <div class="filter-color__item">
                  <?php
                    $t_check="";
                    if (in_array($val_5,$filter_collect)) {
                      $t_check="checked";
                    }
                  ?>
                  <input type="checkbox" class="filter_collect_class" collect-val="<?php echo $val_5;?>" <?php echo $t_check;?>>
                  <div class="filter-color__element">
                    <?php echo $val_5;?>
                  </div>
                </div>
              <?php endforeach;?>
            </div>
            <div class="btn_final">
              <a href="#" class="btn">Готово</a>
            </div>
          </div>
        </div>
      <?php endif;?>
      <div class="blackout"></div>
      <div class="catalog-items">
        <?php if(count($arResult["ITEMS"])>0):?>
          <?php foreach($arResult["ITEMS"] AS $key=>$val):?>
            <?php
              //Обнуляем подобные 1
              $tmpArPodob_1=[];
              $ex_name=explode($arParams["GROUP_PODOB_1_RAZD"],$val["arFields"]["NAME"]);
              $tmpArPodob_1=$arResult["ITEMS_PODOB_1"][$ex_name[0]];
              
              
              //Грузим карточку
              $APPLICATION->IncludeComponent(
                "swf:catalog.card",
                "card_1",
                [
                  "BASKET"=>$arResult["BASKET"],
                  "arParamsDef"=>$arParams,
                  "tmpArPodob_1"=>$tmpArPodob_1,
                  "val"=>$val,
                  "HIDE_PODOB_CLASS"=>"",
                  "arResult"=>$arResult,
                ],
              );
              
              
              
              //Грузим карточки подобных
              foreach ($tmpArPodob_1 AS $key_p1=>$val_p1) {
                $APPLICATION->IncludeComponent(
                  "swf:catalog.card",
                  "card_1",
                  [
                    "BASKET"=>$arResult["BASKET"],
                    "arParamsDef"=>$arParams,
                    "tmpArPodob_1"=>$tmpArPodob_1,
                    "val"=>$val_p1,
                    "HIDE_PODOB_CLASS"=>"cast_hide",
                    "val_general"=>$val,
                    "arResult"=>$arResult,
                  ],
                );
              }
            ?>
          <?php endforeach;?>
        <?php else:?>
          <div class="cast_no_fined_search">
            <p>По вашему запросу ничего не найдено</p>
          </div>
        <?php endif;?>
      </div>
      <div class="pagination">
        <div class="pagination__main-buttons">
          <div class="pagination__prev-button">
            <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M9.56193 10.9386L4.60103 5.99996L9.56065 1.06008" stroke="#263740"/>
            </svg>
          </div>
          <div class="pagination__button pagination__active-button">1</div>
          <div class="pagination__button">2</div>
          <div class="pagination__next-button">
            <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M5.43807 10.9386L10.399 5.99996L5.43935 1.06008" stroke="#263740"/>
            </svg>
          </div>
        </div>
        <div class="pagination__show-more">
          <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1.41466 11.4596C2.25477 12.9373 3.60383 14.0589 5.21014 14.6149C6.81646 15.1709 8.57026 15.1235 10.1442 14.4814C11.718 13.8393 13.0045 12.6465 13.7635 11.1255C14.5224 9.60452 14.702 7.85934 14.2687 6.21567C13.8354 4.57199 12.8189 3.14216 11.4087 2.19299C9.99859 1.24382 8.29128 0.840176 6.60539 1.05742C4.9195 1.27466 3.37027 2.09786 2.24682 3.3735C1.12337 4.64915 0.50246 6.29007 0.5 7.98989" stroke="#263740" stroke-linecap="square" stroke-linejoin="round"/>
            <path d="M4.94485 11.2778H1.22559V14.9971" stroke="#263740" stroke-linecap="square" stroke-linejoin="round"/>
          </svg>
          Показать еще
        </div>
      </div>
    </div>
    <?php //Страница поиска?>
    <?php if($poisk):?>
      <div class="block-flex">
        <div class="loyalty">
          <h2>Программа лояльности</h2>
          <div class="block-text">
            Вступайте в <span class="fw-600">SerpentClub</span> и при покупе данного товара Вам начислится
            500 баллов, которые можно будет потратить на следующие покупки.
            <br>Что бы подключиться к программе лояльности
          </div>
          <div class="block-btn">
            <?php if($USER->IsAuthorized()):?>
              <a href="/cabinet/page_order/" class="btn">Перейти в личный кабинет</a>
            <?php else:?>
              <a href="#" class="btn auth-event">Войдите</a>
              <div class="btn-or">
                <img src="<?php echo SITE_TEMPLATE_PATH;?>/img/btn-or.svg" alt="">
              </div>
              <a href="#" class="btn auth-event btn_black_b">Зарегистируйтесь</a>
            <?php endif;?>
          </div>
        </div>
        <?php
          $APPLICATION->IncludeComponent(
            "swf:forms",
            "form_3",
            [
            ],
          );
        ?>
      </div>
    <?php endif;?>
  </div>
</main>