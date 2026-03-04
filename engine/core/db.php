<?php defined("APP") or die ("Access denied");
//= Константи ====================//
define("DBHOST", "localhost");
define("DBUSER", "root");
define("DBPASS", "");
define("DB", "okino.pp.ua");
//= Подключение к БД ====================//
$connection = @mysqli_connect(DBHOST, DBUSER, DBPASS, DB) or die("Нет соединения с БД");
mysqli_set_charset($connection, "utf8") or die("Не установлена кодировка соединения");

/*


всем привет с вами мор
и в этом видео мы начнем плейлист по созданию движка на пхп
по шаблону проектирования MVC
в процедурном стиле


*/