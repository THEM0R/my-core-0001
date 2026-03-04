<?php defined("APP") or die ("Access denied");
require_once 'controller_all.php';
require_once "model/model_{$view}.php";
/**/
$title = META_TITLE;
$keywords = KEYWORDS;
$description = DESCRIPTION;
/**/
require_once TEMPLATE . $view .'.php';
