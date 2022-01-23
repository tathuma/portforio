<?php 
require_once 'config.php';
require_once SOURCE . 'db/db.login.php';

require_once SOURCE . 'controllers/login.php';

$path = BASE_PASS;

$method = $_SERVER['REQUEST_METHOD'];
echo $method;



if(BASE_PASS === '/login') {
    require_once 'php/views/login.php';
} elseif(BASE_PASS === '/register') {
    require_once 'php/views/register.php';
} elseif(BASE_PASS === '/') {
    require_once 'php/views/home.php';
}

?>