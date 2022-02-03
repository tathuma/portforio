<?php 
require_once 'config.php';


// require_once SOURCE . 'db/user.query.php';

// partsの読み込み
require_once SOURCE . 'parts/header.php';

if(isset($_SESSION['username'])) {
    echo ('<h1>ようこそ' . $_SESSION['username'] . 'さん</h1>');
}

$path = str_replace('/', '', $_SERVER['REQUEST_URI']);

$method = $_SERVER['REQUEST_METHOD'];
echo $method;

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