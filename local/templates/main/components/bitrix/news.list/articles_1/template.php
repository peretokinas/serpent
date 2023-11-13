<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php if(count($arResult["ITEMS"])>0):?>
<div class="journal-slider swiper">
  <div class="swiper-wrapper">
  <?php foreach($arResult["ITEMS"] AS $key=>$val):?>
      <div class="swiper-slide">
          <a href="<?php echo $val["DETAIL_PAGE_URL"];?>" class="journal-slide">
            <span class="journal-slide__pic">
               <img src="<?php echo $val["PREVIEW_PICTURE"]["SRC"];?>" alt="">
            </span>
              <span class="journal-slide__flex">
                <span class="journal-slide__date"><?php echo $val["ACTIVE_FROM"];?></span>
                <span class="journal-slide__tag">ПОЛЕЗНАЯ ИНФОРМАЦИЯ</span>
            </span>
              <span class="journal-slide__title"><?php echo htmlspecialcharsBack($val["NAME"]);?></span>
          </a>
      </div>
  <?php endforeach; ?>
      <a href="#" class="swiper-slide swiper-slide__all" style="background-image: url('<?=SITE_TEMPLATE_PATH;?>/img/main/swim-t-9.jpg')">
             <span class="link-circle">
             <span class="link-circle__text">
                 все модели
             </span>
             <span class="link-circle__arrow">
             <svg xmlns="http://www.w3.org/2000/svg" width="32" height="31" viewBox="0 0 32 31" fill="none">
               <path d="M29.1713 16.0006L-0.000242786 16.002" stroke="#263740" stroke-linejoin="round"></path>
               <path d="M23.8977 9.88823L29.9998 15.963L23.8992 22.0393" stroke="#263740" stroke-width="2"></path>
             </svg>
          </span>
       </span>
      </a>
  </div>
</div>
<?php endif;?>