<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php $countElements = 5; ?>
<?php if(count($arResult["arTree"])>0):?>
  <nav class="footer-menu">
    <?php foreach($arResult["arTree"] AS $key=>$val):?>
      <?php if($key%5 == 0):?>
        <ul class="footer-menu__items">
      <?php endif;?>
      <li class="footer-menu__item">
        <?php
        if(strpos($val["CODE"],"#") !== false)
          $dop_slash = "";
        else
          $dop_slash = "/";
        ?>
        <a href="/<?php echo $val["CODE"];?><?php echo $dop_slash;?>" class="footer-menu__link <?php echo $val["CLASS_CSS"];?>"><?php echo htmlspecialcharsBack($val["NAME"]);?></a>
      </li>
      <?php if(($key+1)%5 == 0):?>
        </ul>
      <?php endif;?>
    <?php endforeach;?>
  </nav>
<?php endif;?>