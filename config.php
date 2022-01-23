<?php  
/*定数ファイル*/

define('BASE_PASS', $_SERVER['REQUEST_URI']);
define('BASE_CSS_PASS', BASE_PASS . 'css/');
define('BASE_JS_PASS', BASE_PASS . 'js/');

/*phpフォルダまでのパス*/
define('SOURCE', __DIR__ . '/php/');
