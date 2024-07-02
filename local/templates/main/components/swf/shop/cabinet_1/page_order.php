<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php
  //Фильтруем заказы по статусу (Все, кроме выполненных)
  if (count($arResult["ORDER_USER_LIST"])>0) {
    $tmpArNew=[];
    foreach ($arResult["ORDER_USER_LIST"] AS $key=>$val) {
      if ($val["STATUS_ID"]!="F") {
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
    <?php endforeach;?>
  <?php else:?>
    <div class="no_found_prod_on_lk">Текущих заказов - не найдено</div>
  <?php endif;?>
</div>