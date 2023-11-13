<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php
  session_start();

  $PREVIEW_PICTURE = CFile::GetPath($val["arFields"]["PREVIEW_PICTURE"]);

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
            "NAME"=>"Журнал",
            "LINK"=>"",
          ]
        ],
      ],
     );
    ?>
  </div>
  <div class="container">
    <?php
      $sch_1=0;
      $count_slide=0;
    ?>
    <h1>Журнал</h1>
    <div class="article-items">
      <?php if(count($arResult["arEl"])>0):?>
        <?php foreach($arResult["arEl"] AS $key=>$val):?>
          <div class="article-item">
            <a href="<?php echo $val["arFields"]["DETAIL_PAGE_URL"];?>" class="article-item__pic">
              <img src="<?php echo CFile::GetPath($val["arFields"]["PREVIEW_PICTURE"]);?>" alt="">
            </a>
            <div class="article-item__date"><?php echo $val["arFields"]["ACTIVE_FROM"];?></div>
            <a href="<?php echo $val["arFields"]["DETAIL_PAGE_URL"];?>" class="article-item__title"><?php echo $val["arFields"]["NAME"];?></a>
            <div class="article-item__description"><?php echo $val["arFields"]["PREVIEW_TEXT"];?></div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
    <div class="navigation-container">
       <nav class="navigation">
          <ul class="navigation-items">
              <li class="navigation-item">
                  <a href="#" class="navigation-item__link">
                      <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12" fill="none">
                          <path d="M6.06193 10.9386L1.10103 5.99996L6.06065 1.06008" stroke="#263740"/>
                      </svg>
                  </a>
              </li>
              <li class="navigation-item">
                  <a href="#" class="navigation-item__link active">1</a>
              </li>
              <li class="navigation-item">
                  <a href="#" class="navigation-item__link">2</a>
              </li>
              <li class="navigation-item">
                  <a href="#" class="navigation-item__link">3</a>
              </li>
              <li class="navigation-item">
                  <a href="#" class="navigation-item__link">..</a>
              </li>
              <li class="navigation-item">
                  <a href="#" class="navigation-item__link">8</a>
              </li>
              <li class="navigation-item">
                  <a href="#" class="navigation-item__link">
                      <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12" fill="none">
                          <path d="M0.938066 10.9386L5.89897 5.99996L0.93935 1.06008" stroke="#263740"/>
                      </svg>
                  </a>
              </li>
          </ul>
       </nav>
       <a href="#" class="btn btn_gray">
           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
               <path d="M1.91466 11.4596C2.75477 12.9373 4.10383 14.0589 5.71014 14.6149C7.31646 15.1709 9.07026 15.1235 10.6442 14.4814C12.218 13.8393 13.5045 12.6465 14.2635 11.1255C15.0224 9.60452 15.202 7.85934 14.7687 6.21567C14.3354 4.57199 13.3189 3.14216 11.9087 2.19299C10.4986 1.24382 8.79128 0.840176 7.10539 1.05742C5.4195 1.27466 3.87027 2.09786 2.74682 3.3735C1.62337 4.64915 1.00246 6.29007 1 7.98989" stroke="#263740" stroke-linecap="square" stroke-linejoin="round"/>
               <path d="M5.44387 11.2778H1.72461V14.9971" stroke="#263740" stroke-linecap="square" stroke-linejoin="round"/>
           </svg>
           Показать еще
       </a>
    </div>
  </div>
</main>