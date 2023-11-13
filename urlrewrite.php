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
      'CONDITION' => '#^/catalog/([a-zA-Z0-9-_]+)/.*#',
      'RULE' => 'SECTION_CODE=$1',
      'ID' => '',
      'PATH' => '/catalog/index.php',
      'SORT' => 100,
    ),
);
