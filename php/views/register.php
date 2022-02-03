<?php 
session_start();

?>
    <h1 class="color">
        登録ページ
    </h1>

    <form action="<?php echo BASE_PASS ?>" method="POST">

    お名前:<input type="text" name="name" required>
    
    パスワード: <input type="text" name="pwd" required>
    <input type="submit" value="登録">

    <p><a href="/">homeに戻る</a></p>
    </form>
