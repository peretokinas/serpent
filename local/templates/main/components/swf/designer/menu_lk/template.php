<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php
  $fullUrl = basename($_SERVER['REQUEST_URI']);
  $position = strpos($fullUrl, '=');
  $newUrl = "cabinet/".substr($fullUrl, $position);
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
        ?>
        <li class="sidebar-menu__item">
          <a href="/<?php echo $val["CODE"];?>/" class="sidebar-menu__link <?php echo $tag_active;?>"><?php echo htmlspecialcharsBack($val["NAME"]);?></a>
        </li>
      <?php endforeach;?>
    </ul>
  </nav>
<?php endif;?>