<?php
$arUrlRewrite=array (
  0 =>
    array (
      'CONDITION' => '#^/articles/([a-zA-Z0-9-_]+)/.*#',
      'RULE' => 'ELEMENT_CODE=$1',
      'ID' => '',
      'PATH' => '/articles/index.php',
      'SORT' => 100,
    ),
  1 =>
    array (
      'CONDITION' => '#^/catalog/([a-zA-Z0-9-_]+)/([a-zA-Z0-9-_]+)/.*#',
      'RULE' => 'SECTION_CODE=$1&ELEMENT_CODE=$2',
      'ID' => '',
      'PATH' => '/catalog/index.php',
      'SORT' => 50,
    ),
  2 =>
    array (
      'CONDITION' => '#^/catalog/([a-zA-Z0-9-_]+)/.*#',
      'RULE' => 'SECTION_CODE=$1',
      'ID' => '',
      'PATH' => '/catalog/index.php',
      'SORT' => 100,
    ),
  3 =>
    array (
      'CONDITION' => '#^/cabinet/([a-zA-Z0-9-_]+)/.*#',
      'RULE' => 'SECTION_CODE=$1',
      'ID' => '',
      'PATH' => '/cabinet/index.php',
      'SORT' => 50,
    ),
    4 => 
    array (
      'CONDITION' => '#^/rest/#',
      'RULE' => '',
      'ID' => NULL,
      'PATH' => '/bitrix/services/rest/index.php',
      'SORT' => 10,
    ),
);
