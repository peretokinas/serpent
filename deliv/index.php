<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>
<?php
//Конструктор страниц
$APPLICATION->IncludeComponent(
  "swf:designer",
  "page_deliv",
  [
  ],
);
?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>