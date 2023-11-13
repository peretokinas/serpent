<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<nav class="breadcrumbs">
  <ul class="breadcrumb-items">
    <?php foreach($arParams["ITEMS"] AS $key=>$val):?>
      <li class="breadcrumb-item">
        <?php if ($val["LINK"]!=""):?>
          <a href="<?php echo $val["LINK"];?>"><?php echo $val["NAME"];?></a>
        <?php else:?>
          <span><?php echo $val["NAME"];?></span>
        <?php endif;?>
      </li>
    <?php endforeach;?>
  </ul>
</nav>