<?php  
namespace controller\home;

function get() {
    require_once SOURCE . 'views/home.php';
}

function post() {
    echo '<h1>HOMEPOST</h1>';
}
