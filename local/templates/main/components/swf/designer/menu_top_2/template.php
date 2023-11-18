<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php 
  $countProducts = 0;
  
  global $USER;
?>
<?php if(count($arResult["arTree"])>0):?>
  <div class="header-event">
    <?php foreach($arResult["arTree"] AS $key=>$val):?>
      <?php
        $tmp_link="";
        $tmp_class_css=$val["CLASS_CSS"];
        if ($val["NAME"]!="Авторизация") {
          $tmp_link="/".$val["CODE"]."/";
          $tmp_class_css="";
        } else {
          if ($USER->IsAuthorized()) {
            $tmp_link="/".$val["CODE"]."/";
            $tmp_class_css="";
          }
        }
      ?>
      <a href="<?php echo $tmp_link;?>" class="header-event__link <?php echo $tmp_class_css;?>">
        <?php echo file_get_contents($_SERVER["DOCUMENT_ROOT"].$arResult["arTree"][$key]["IMG"]); ?>
        <?php if($val["NAME"]=="Избранное" && $countProducts>0): ?>
          <span class="header-event__count"><?php echo $countProducts; ?></span>
        <?php endif;?>
      </a>
    <?php endforeach;?>
  </div>
<?php endif;?>
