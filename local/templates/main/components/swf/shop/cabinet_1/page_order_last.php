<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php
  //Фильтруем заказы по статусу (Только выполненные)
  if (count($arResult["ORDER_USER_LIST"])>0) {
    $tmpArNew=[];
    foreach ($arResult["ORDER_USER_LIST"] AS $key=>$val) {
      if ($val["STATUS_ID"]=="F") {
        $tmpArNew[]=$val;
      }
    }
    $arResult["ORDER_USER_LIST"]=$tmpArNew;
  }
?>
<div class="lk-content lk-content__flex lk-order">
  <?php if(count($arResult["ORDER_USER_LIST"])>0):?>
    <?php foreach($arResult["ORDER_USER_LIST"] AS $key=>$val):?>
      <div class="lk-order__item">
        <div class="lk-order__head">
          <?php
            $date_obj=$val["DATE_INSERT"];
            $date_print=$date_obj->format("d.m.Y");
            
            $date_deliv=$date_print;
            
            $status_print=$arParams["arSettings"]["SHOP"]["ORDER_STATUS"][$val["STATUS_ID"]];
            
            $prod_count=0;
            foreach ($val["ITEMS"] AS $key_1=>$val_1) {
              $prod_count=$prod_count+$val_1["QUA"];
            }
            $prod_count=round($prod_count);
            
            if ($val["PAYED"]=="Y") {
              $pay_sum=swf_util::get_num_form_2($val["PRICE"]);
            } else {
              $pay_sum=swf_util::get_num_form_2(0);
            }
          ?>
          <div class="lk-order__title">
            Заказ
            <span>№<?php echo $val["ID"];?></span>
          </div>
          <div class="lk-order__date"><?php echo $date_print;?></div>
        </div>
        <div class="lk-order__info">
          <span class="lk-order__info-column">
            Оплачено:
            <span class="fw-600"><?php echo $pay_sum;?> ₽ </span>
          </span>
          <span class="lk-order__info-column">
            Товаров:
            <span class="fw-600"><?php echo $prod_count;?> шт.</span>
          </span>
          <span class="lk-order__info-column">
            Статус:
            <span class="fw-600"><?php echo $status_print;?></span>
          </span>
          <span class="lk-order__info-column">
            Дата доставки:
            <span class="fw-600"><?php echo $date_deliv;?></span>
          </span>
        </div>
        <div class="order-list">
          <div class="order-list__container">
            <?php foreach ($val["ITEMS"] AS $key_1=>$val_1):?>
              <?php
                $arProd_off=$arResult["ITEMS_ON_ID"][$val_1["PROD_ID"]];
                $arProd=$arResult["ITEMS_ON_ID"][$arProd_off["arProps"]["CML2_LINK"]["VALUE"]];
                
                $p_name=$arProd_off["arFields"]["NAME"];
                
                $arPhoto=$arProd["arPhotos"];
                if (count($arPhoto)>0) {
                  $p_photo=$arPhoto[0];
                } else {
                  $p_photo=SITE_TEMPLATE_PATH."/img/no-photo.jpg";
                }
                
                $p_link=$arProd["arFields"]["DETAIL_PAGE_URL"];
                
                $p_razmer=$arProd_off["arProps"]["RAZMER"]["VALUE"];
                
                $p_color=$arParams["arSettings"]["COLOR_1"][$arProd["arProps"]["TSVET"]["VALUE"]];
                
                $p_price=swf_util::get_num_form_2($val_1["PRICE"]);
              ?>
              <div class="basket-item">
                <a href="<?php echo $p_link;?>" class="basket-item__pic">
                  <img src="<?php echo $p_photo;?>" alt="">
                </a>
                <div class="basket-item__content">
                  <a href="<?php echo $p_link;?>" class="basket-item__title"><?php echo $p_name;?></a>
                  <div class="basket-item__info">
                    <div class="basket-item__size">
                      Размер:
                      <span> <?php echo $p_razmer;?></span>
                    </div>
                    <div class="basket-item__color">
                      Цвет:
                      <div class="product-slide__color-item">
                        <input type="radio" name="color-1" disabled="">
                        <span class="product-slide__color-circle">
                          <span style="background: <?php echo $p_color;?>"></span>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="basket-price"><span><?php echo $p_price;?></span> ₽</div>
                </div>
              </div>
            <?php endforeach;?>
          </div>
        </div>
        <div class="order-event">
          <div class="order-event__btn">
            <a href="#" class="btn" data-modal-trigger="modal-reviews-order-<?php echo $val["ID"];?>">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 18 16" fill="none">
                <path d="M11.2637 1.01904H4.69796C2.4339 1.01904 1 2.60388 1 4.86794V11.0564C1 13.3204 2.4339 14.9807 4.69796 14.9807H16.2446C18.5087 14.9807 14.9617 13.3959 14.9617 11.0564V4.86794C14.9617 2.60388 13.5278 1.01904 11.2637 1.01904Z" stroke="white" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M4.62242 8.36789C4.37028 8.36789 4.2168 8.2144 4.2168 7.96226C4.2168 7.71013 4.37028 7.55664 4.62242 7.55664C4.87456 7.55664 5.02804 7.71013 5.02804 7.96226C5.02804 8.18786 4.8264 8.36789 4.62242 8.36789Z" fill="white" stroke="white"/>
                <path d="M8.0189 8.36789C7.76677 8.36789 7.61328 8.2144 7.61328 7.96226C7.61328 7.71013 7.76677 7.55664 8.0189 7.55664C8.27104 7.55664 8.42453 7.71013 8.42453 7.96226C8.42453 8.18786 8.22288 8.36789 8.0189 8.36789Z" fill="white" stroke="white"/>
                <path d="M11.3392 8.36789C11.0871 8.36789 10.9336 8.2144 10.9336 7.96226C10.9336 7.71013 11.0871 7.55664 11.3392 7.55664C11.5914 7.55664 11.7448 7.71013 11.7448 7.96226C11.7448 8.2144 11.5914 8.36789 11.3392 8.36789Z" fill="white" stroke="white"/>
              </svg>
              Оставить отзыв
            </a>
          </div>
          <div class="order-event__link">
            Состав заказа
          </div>
        </div>
        <?php
          //Отзывы
          $APPLICATION->IncludeComponent(
            "swf:catalog.reviews",
            "order_rew_1",
            [
              "IB"=>$arParams["arSettings"]["IB"]["reviews_order"],
              "ORDER_ID"=>$val["ID"],
            ],
          );
        ?>
      </div>
    <?php endforeach;?>
  <?php else:?>
    <div class="no_found_prod_on_lk">Прошлых заказов - не найдено</div>
  <?php endif;?>
</div>