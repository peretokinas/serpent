<?php include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');?>
<?php
CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");
?>
404 страница
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>