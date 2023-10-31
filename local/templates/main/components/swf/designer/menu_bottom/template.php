<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php $countElements = 3; ?>
<?php if(count($arResult["arTree"])>0):?>
  <nav class="footer-menu">
      <?php foreach($arResult["arTree"] AS $key=>$val):?>
        <?php if($key%3 == 0):?>
          <ul class="footer-menu__items">
        <?php endif;?>
            <li class="footer-menu__item">
              <a href="/<?php echo $val["CODE"];?>/" class="footer-menu__link <?php echo $val["CLASS_CSS"];?>"><?php echo htmlspecialcharsBack($val["NAME"]);?></a>
            </li>
        <?php if(($key+1)%3 == 0):?>
          </ul>
        <?php endif;?>

      <?php endforeach;?>
  </nav>
<?php endif;?>