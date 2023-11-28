<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>
<?php
//Конструктор страниц
$APPLICATION->IncludeComponent(
  "swf:designer",
  "page_agreement",
  [
  ],
);
?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>