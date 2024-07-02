<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php
  global $USER;
?>
<?php if(count($arResult["arTree"])>0):?>
  <div class="header-event">
    <?php foreach($arResult["arTree"] AS $key=>$val):?>
      <?php
        $tmp_link="";
        $tmp_class_css=$val["CLASS_CSS"];
        if ($val["NAME"]!="Авторизация" AND $val["NAME"]!="Избранное") {
          $tmp_link="/".$val["CODE"]."/";
          $tmp_class_css="";
          // if ($val["CODE"]=="") {
            $tmp_class_css=$val["CLASS_CSS"];
          // }
        } else {
          if ($USER->IsAuthorized()) {
            $tmp_link="/".$val["CODE"]."/";
            $tmp_class_css="";
          }
        }
      ?>
      <?php 
        if($val["CODE"]=="cart") {
          $id_elem="id_icon_head_cart";
        } else {
          $id_elem="";
        }
      ?>
      <a id="<?php echo $id_elem;?>" href="<?php echo $tmp_link;?>" class="header-event__link <?php echo $tmp_class_css;?>">
        <?php echo file_get_contents($_SERVER["DOCUMENT_ROOT"].$arResult["arTree"][$key]["IMG"]); ?>
        <?php if($val["NAME"]=="Избранное" && count($arResult["FAVORITES"])>0): ?>
          <span class="header-event__count"><?php echo count($arResult["FAVORITES"]); ?></span>
        <?php endif;?>
        <?php if($val["NAME"]=="Корзина" && count($arResult["BASKET"])>0): ?>
            <span class="header-event__count"><?php echo count($arResult["BASKET"]); ?></span>
        <?php endif;?>
      </a>
    <?php endforeach;?>
  </div>
<?php endif;?>
