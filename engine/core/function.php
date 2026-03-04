<?php defined("APP") or die ("Access denied");

/**
 * @param $array
 */
function pr($array){
    echo "<pre>" . print_r($array, true) . "</pre>";
}

/**
 * @param $rout
 * @return mixed
 */
function convertPattern($rout)
{
    if(strpos($rout, '(') === false)
    {
        return $rout;
    }

    return preg_replace_callback('#\((\w+):(\w+)\)#', 'replacePattern', $rout);
}


/**
 * @param $matches
 * @return string
 */
function replacePattern($matches)
{
    global $PatternArray;
    return '(?<'.$matches[1].'>'.strtr($matches[2], $PatternArray ).')';
}

function NotFound()
{
    header("HTTP/1.1 404 Not Found");
    require_once TEMPLATE.'404.php';
    exit;
}