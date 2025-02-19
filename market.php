<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("111");
CopyDirFiles($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/rest/install/public", $_SERVER["DOCUMENT_ROOT"]."/", true, true);
\Bitrix\Main\UrlRewriter::add("s1", array(
"CONDITION" => "#^/marketplace/#",
"RULE" => "",
"ID" => "bitrix:rest.marketplace",
"PATH" => "/marketplace/index.php",
));
\Bitrix\Main\UrlRewriter::add("s1", array(
"CONDITION" => "#^/marketplace/local/#",
"RULE" => "",
"ID" => "bitrix:rest.marketplace.localapp",
"PATH" => "/marketplace/local/index.php",
));
\Bitrix\Main\UrlRewriter::add("s1", array(
"CONDITION" => "#^/marketplace/app/#",
"RULE" => "",
"ID" => "bitrix:app.layout",
"PATH" => "/marketplace/app/index.php",
));
\Bitrix\Main\UrlRewriter::add("s1", array(
"CONDITION" => "#^/marketplace/hook/#",
"RULE" => "",
"ID" => "bitrix:rest.hook",
"PATH" => "/marketplace/hook/index.php",
));
?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
