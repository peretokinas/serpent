<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php $countProducts = 11; ?>
<?php if(count($arResult["arTree"])>0):?>
  <div class="header-event">
    <?php foreach($arResult["arTree"] AS $key=>$val):?>
      <a href="/<?php echo $val["CODE"];?>/" class="header-event__link <?php echo $val["CLASS_CSS"];?>">
        <?php echo file_get_contents($_SERVER["DOCUMENT_ROOT"].$arResult["arTree"][$key]["IMG"]); ?>
          <?php if($val["NAME"]=="Избранное" && $countProducts>0): ?>
            <span class="header-event__count"><?php echo $countProducts; ?></span>
          <?php endif;?>
      </a>
    <?php endforeach;?>
  </div>
<?php endif;?>
