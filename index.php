<?php 
require_once 'config.php';


// partsの読み込み
require_once SOURCE . 'parts/header.php';

$path = str_replace('/', '', $_SERVER['REQUEST_URI']);

path($path);

function path($path) {
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
}


require_once SOURCE . 'parts/footer.php';


$method = $_SERVER['REQUEST_METHOD'];
echo $method;




?>