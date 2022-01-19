<?php 
require_once 'config.php';

if($uri === '/login') {
    require_once 'php/views/login.php';
} elseif($uri === '/register') {
    require_once 'php/views/register.php';
} elseif($uri === '/') {
    require_once 'php/views/home.php';
}

