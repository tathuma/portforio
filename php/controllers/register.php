<?php 

    require_once SOURCE . 'views/register.php';




/*設定*/
// $user = 'host';
// $password = 'password';
// $host = 'localhost';
// $dbname = 'portforioapp';


// $name = $_POST['name'];
// $pwd = password_hash($_POST['pwd'], PASSWORD_BCRYPT);
// $dsn = "mysql:{$host};port=3306;dbname={$dbname} cherset=utf8_general_ci";
// $connect = new PDO($dsn, $user, $password);

// /*登録されているかのチェック*/
// $check = "SELECT * FROM users WHERE name = :name";
// $set = $connect->prepare($check);
// $set->bindValue(':name', $name);
// $set->execute();
// $usercheck = $set->fetch();

// if($usercheck['name'] === $name) {
//     $msg = '既に使われている名前です';
// } 
// /*登録されていなかったら*/
// else 
// {
//     $check = "INSERT INTO users(name, pwd) VALUES (:name, :pwd)";
//     $set = $connect->prepare($check);
//     $set->bindValue(':name', $name);
//     $set->bindValue(':pwd', $pwd);
//     $set->execute();
//     $msg = '会員登録に成功しました';

// }
//  $pst = $connect->query('select * from users');

//  $result = $pst->fetchAll();





