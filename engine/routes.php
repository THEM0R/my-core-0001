<?php defined("APP") or die ("Access denied");
//= ROUTS ====================//
$ROUTS = [
    ['url' => '', 'view' => 'home' ,'action' => 'home'],
//    ['url' => 'cats', 'view' => 'category', 'action' => 'test'],
    ['url' => '(url:string)/(alias:string)', 'view' => 'category', 'action' => 'test2']
	/* приоритет */
];
//= ROUTS ====================//

