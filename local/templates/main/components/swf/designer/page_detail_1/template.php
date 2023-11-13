<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php
  session_start();
  //Дергаем ссылки на картинки
  if ($arResult["arEl"]["arFields"]["DETAIL_PICTURE"]!="") {
    $src_detail_picture=CFile::GetPath($arResult["arEl"]["arFields"]["DETAIL_PICTURE"]);
  }

  if ($arResult["arEl"]["arFields"]["DETAIL_TEXT"]!="") {
    $detail_text=htmlspecialcharsBack($arResult["arEl"]["arFields"]["DETAIL_TEXT"]);
  }
  $name_detail=$arResult["arEl"]["arFields"]["NAME"];


  $tmp_ar=explode(" ", $arResult["arEl"]["arFields"]["ACTIVE_FROM"]);
  $date_create=$tmp_ar[0];
?>
<main>
    <div class="article-container" style="background-image: url('<?php echo $src_detail_picture; ?>')">
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
                    "LINK"=>"/articles",
                  ],
                  [
                    "NAME"=>$name_detail,
                    "LINK"=>"",
                  ],
                ],
              ],
          );
        ?>
      </div>
      <div class="container">
        <h1 class="article-page__title"><?php echo $name_detail?></h1>
        <div class="article-page__date"><?php echo $date_create?></div>
      </div>
    </div>
    <div class="article-content">
      <div class="container">
          <?php echo $detail_text?>
      </div>
    </div>
</main>