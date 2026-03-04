<?php
defined("APP") or die ("Access denied");
error_reporting(E_ALL & ~E_NOTICE); // контроль ошибок (E_ALL & ~E_NOTICE);
//====================//
$PatternArray = [
    'int' => '[0-9]+',
    'string' => '[a-zA-Z\.\-_%]+',
    'all' => '[a-zA-Z0-9\.\-_%]+'
];
//====================//
