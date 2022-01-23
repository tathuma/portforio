<?php  

$user = 'host';
$pwd = 'password';
$host = 'localhost';
$dbname = 'portforioapp';

$dsn = "mysql:{$host};port=3306;dbname={$dbname}";

$connect = new PDO($dsn, $user, $pwd);

$pst = $connect->query('select * from users');

$result = $pst->fetchAll();

// print_r($result);