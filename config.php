<?php  
/*定数ファイル*/
$uri = $_SERVER['REQUEST_URI'];

define('BASE_PASS', $uri);
define('BASE_CSS_PASS', BASE_PASS . 'css/');
define('BASE_JS_PASS', BASE_PASS . 'js/');
