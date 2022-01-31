<?php 
require_once 'config.php';


// partsの読み込み
require_once SOURCE . 'parts/header.php';

$path = str_replace('/', '', $_SERVER['REQUEST_URI']);

$method = $_SERVER['REQUEST_METHOD'];

path($path, $method);

/*どのファイルを読み込むか*/
function path($path, $method) {
    if($path === '') {
    $path = 'home';
}

$targetfile = SOURCE . "controllers/{$path}.php";

if(!file_exists($targetfile)) {
    /* ファイルが見つからなかったら404 */
    require_once SOURCE . 'views/404.php';
} else {
require_once $targetfile;
}

$fn = "\\controller\\{$path}\\{$method}";

$fn();
}

require_once SOURCE . 'parts/footer.php';




?>