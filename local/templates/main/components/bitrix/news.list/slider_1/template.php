<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php if(count($arResult["ITEMS"])>0):?>
<div class="slider-index swiper">
  <div class="swiper-wrapper">
    <?php foreach($arResult["ITEMS"] AS $key=>$val):?>
    <div class="swiper-slide">
      <div class="slider-index__item" style="background-image: url('<?php echo $val["DETAIL_PICTURE"]["SRC"];?>')">
        <div class="slider-index__item__bg-tablet" style="">
          <img src="<?php echo $val["PREVIEW_PICTURE"]["SRC"];?>" />
          <div class="container">
            <?php echo htmlspecialcharsBack($val["DETAIL_TEXT"]);?>
          </div>
        </div>
      </div>
    </div>
    <?php endforeach;?>
  </div>
  <?php if(count($arResult["ITEMS"])>1):?>
    <div class="slider-index__event">
      <div class="container">
        <div class="index-arrow index-arrow__left">
          <svg xmlns="http://www.w3.org/2000/svg" width="62" height="14" viewBox="0 0 62 14" fill="none">
            <path d="M2.17688 7.41162C1.90074 7.41162 1.67688 7.18776 1.67688 6.91162C1.67688 6.63548 1.90074 6.41162 2.17688 6.41162L2.17688 7.41162ZM2.17688 6.41162L62 6.41162L62 7.41162L2.17688 7.41162L2.17688 6.41162Z"
                fill="white"/>
            <path d="M8.1021 12.9863L1.99994 6.91156L8.10052 0.83526" stroke="white" stroke-width="2"/>
          </svg>
        </div>
        <div class="index-navigation"></div>
        <div class="index-arrow index-arrow__right">
          <svg xmlns="http://www.w3.org/2000/svg" width="62" height="14" viewBox="0 0 62 14" fill="none">
            <path d="M59.8232 7.41162C60.0994 7.41162 60.3232 7.18776 60.3232 6.91162C60.3232 6.63548 60.0994 6.41162 59.8232 6.41162L59.8232 7.41162ZM59.8232 6.41162L0.000120207 6.41162L0.000120119 7.41162L59.8232 7.41162L59.8232 6.41162Z"
                fill="white"/>
            <path d="M53.8979 12.9863L60.0001 6.91156L53.8995 0.83526" stroke="white" stroke-width="2"/>
          </svg>
        </div>
      </div>
    </div>
  <?php endif;?>
</div>
<?php endif;?>