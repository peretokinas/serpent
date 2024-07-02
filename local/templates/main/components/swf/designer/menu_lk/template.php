<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php
  $fullUrl = basename($_SERVER['REQUEST_URI']);
  $position = strpos($fullUrl, '=');
  $newUrl = "cabinet/".substr($fullUrl, $position);
  
  //Определяем кол-во объектов внутри для считаемых пунктов
    //Текущие заказы
    $count_nf=0;
    if (count($arParams["ORDER_USER_LIST"])>0) {
      foreach ($arParams["ORDER_USER_LIST"] AS $key=>$val) {
        if ($val["STATUS_ID"]!="F") {
          $count_nf++;
        }
      }
    }
    
    //Прошлые заказы
    $count_f=0;
    if (count($arParams["ORDER_USER_LIST"])>0) {
      foreach ($arParams["ORDER_USER_LIST"] AS $key=>$val) {
        if ($val["STATUS_ID"]=="F") {
          $count_f++;
        }
      }
    }
    
    //Избранные товары
    $count_fav=0;
    if (isset($arParams["FAVORITES"])) {
      if (is_array($arParams["FAVORITES"])) {
        $count_fav=count($arParams["FAVORITES"]);
      }
    }
  
?>
<?php if(count($arResult["arTree"])>0):?>
  <nav class="sidebar-menu">
    <ul class="sidebar-menu__items">
      <?php foreach($arResult["arTree"] AS $key=>$val):?>
        <?php
        if($newUrl == $val["CODE"])
          $tag_active = "active";
        else
          $tag_active ="";
        
        $dop_data="";
        if ($val["CODE"]=="cabinet/page_order") {
          $dop_data="<span>{$count_nf}</span>";
        }
        if ($val["CODE"]=="cabinet/page_order_last") {
          $dop_data="<span>{$count_f}</span>";
        }
        if ($val["CODE"]=="cabinet/page_favorites") {
          $dop_data="<span>{$count_fav}</span>";
        }
        
        ?>
        <li class="sidebar-menu__item">
          <a href="/<?php echo $val["CODE"];?>/" class="sidebar-menu__link <?php echo $tag_active;?>"><?php echo htmlspecialcharsBack($val["NAME"]);?><?php echo $dop_data;?></a>
        </li>
      <?php endforeach;?>
    </ul>
  </nav>
<?php endif;?>