<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php
  $arGal=$arParams["arGal"];
?>
<div class="showroom-slider swiper">
    <div class="swiper-wrapper">
        <?php foreach ($arGal as $key=>$val): ?>
        <div class="swiper-slide">
            <a href="<?php echo $val; ?>" data-fancybox="gallery">
                <img src="<?php echo $val; ?>" alt="Описание фото">
            </a>
        </div>
        <?php endforeach; ?>
    </div>
</div>