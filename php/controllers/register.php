<?php 
namespace controller\register;

use PDO;
function get() {
    require_once SOURCE . 'views/register.php';
}

function post() {

    $host = 'localhost';
    $dbName = 'portforioapp';
    $username = 'host';
    $pwd = 'password';
    $port = '3306';
    if(isset($_POST['name'], $_POST['pwd']) && $_POST['name'] != '' && $_POST['pwd'] != '') {
        
        $dsn = "mysql:host={$host};port={$port};dbname={$dbName};"; 
        $pdo = new PDO($dsn, $username, $pwd);

        /*既に存在しているか*/ 
        $stmt = $pdo->prepare('select * from users where username=?');
        $stmt->bindValue(1, $_POST['name']);
        $stmt->execute();
        if(count($stmt->fetchAll())) {
            $_SESSION['register'] = '既に使われている名前です。';
            header('location:' . BASE_PASS);
            die();
        }

        /*新規データ追加*/
        $stmt = $pdo->prepare('insert into users (username, pwd) values (?, ?)');
        $stmt->bindValue(1, $_POST['name']);
        $stmt->bindValue(2, $_POST['pwd']);
        $stmt->execute();
        $_SESSION['register'] = '会員登録に成功しました';
        $_SESSION['username'] = $_POST['name'];
        header('location:' . '/');
}
}
/*設定*/


/*登録されているかのチェック*/





