<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php
  session_start();
?>
<main>
  <div class="container">
  <?php
  //Хлебные крошки
  $APPLICATION->IncludeComponent(
    "swf:breadcrumbs",
    "main_1",
    [
      "ITEMS"=>[
        [
          "NAME"=>"Главная",
          "LINK"=>"/",
        ],
        [
          "NAME"=>"Часто задаваемые вопросы",
          "LINK"=>"",
        ]
       ],
    ],
  );
  ?>
  </div>
  <div class="container container-logo">
    <h1>Часто задаваемые вопросы</h1>
      <div class="accordion">
        <?php if(count($arResult["arEl"])>0):?>
          <?php foreach($arResult["arEl"] AS $key=>$val):?>
            <?php
              $rid=swf_util::rand_hash_1();
            ?>
            <div id="<?php echo $rid;?>" class="accordion-item">
              <div class="accordion-head">
                <?php echo $val["arFields"]["NAME"];?>
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="7" viewBox="0 0 12 7" fill="none">
                    <path d="M10.9888 0.438554L6.05025 5.39945L1.11037 0.439838" stroke="#263740"/>
                </svg>
              </div>
              <div class="accordion-content">
                <div class="accordion-content__block">
                  <?php echo $val["arFields"]["PREVIEW_TEXT"];?>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
  </div>
</main>