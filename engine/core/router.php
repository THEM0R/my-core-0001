<?php defined("APP") or die ("Access denied");

# адрес сайта
# $_SERVER['HTTP_HOST']
# скрипт рхп которий виполнил ету страницу
# $_SERVER['PHP_SELF']

// http://ajax.load/index.php
$DOMEN = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'];
// $DOMEN = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
$DOMEN = $DOMEN . $_SERVER['PHP_SELF'];


// регулярним виражением вирезаем все с конца строки до слеша /  получяем http://ajax.load/ из http://ajax.load/index.php
// ищем все што не является слешам + и ето должно находится с позиции коца строки
$DOMEN = preg_replace('#[^/]+$#', '', $DOMEN);

// var $DOMEN = define DOMEN
define("DOMEN", $DOMEN);
// http://ajax.load/page/news
$URL = DOMEN . $_SERVER['REQUEST_URI'];
// убираем доменное имя
$URL = str_replace(DOMEN, '', $URL);
// обрезаем /
$URL = rtrim($URL,'/');
// foreach route
foreach ($ROUTS as $route)
{
    $pattern = '#^'. $route['url'] . '$#i';
    $pattern = convertPattern( $pattern );

	if( preg_match($pattern, $URL, $match) )
	{
        $view = $route['view'];
        $action = $route['action'];
		break;
	}
}

if(empty($match))NotFound();

extract($match);
require_once 'controller/controller_'.$view.'.php';
//= Роутинг ====================//
