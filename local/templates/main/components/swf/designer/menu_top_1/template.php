<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php if(count($arResult["arTree"])>0):?>
  <nav class="header-menu">
    <ul class="header-menu__items">
      <?php foreach($arResult["arTree"] AS $key=>$val):?>
        <li class="header-menu__item">
          <?php
            if(strpos($val["CODE"],"#") !== false) {
              $dop_slash = "";
              if ($_SERVER["REQUEST_URI"]=="/") {
                $dop_slash_start = "";
              } else {
                $dop_slash_start = "/";
              }
            }
            else {
              $dop_slash = "/";
              $dop_slash_start = "/";
            }
            
            if (strpos($val["CODE"],"?")>0) {
              $dop_slash="";
            }
          ?>
          <a href="<?php echo $dop_slash_start;?><?php echo $val["CODE"];?><?php echo $dop_slash;?>" class="header-menu__link <?php echo $val["CLASS_CSS"];?>"><span><?php echo $val["NAME"];?></span>
           <?php if(!empty($val["CLASS_CSS"])):?>
              <span class="tag"><?php echo $val["DOP_TITLE"];?></span>
           <?php endif;?>
          </a>
        </li>
      <?php endforeach;?>
    </ul>
  </nav>
<?php endif;?>
