<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php if(count($arResult["arTree"])>0):?>
  <nav class="header-menu">
    <ul class="header-menu__items">
      <?php foreach($arResult["arTree"] AS $key=>$val):?>
        <li class="header-menu__item">
          <a href="/<?php echo $val["CODE"];?>/" class="header-menu__link <?php echo $val["CLASS_CSS"];?>"><span><?php echo $val["NAME"];?></span>
           <?php if(!empty($val["CLASS_CSS"])):?>
              <span class="tag"><?php echo $val["DOP_TITLE"];?></span>
           <?php endif;?>
          </a>
        </li>
      <?php endforeach;?>
    </ul>
  </nav>
<?php endif;?>
