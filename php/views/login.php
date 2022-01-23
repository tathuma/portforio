<h1>ログイン</h1>
    <form action="<?php echo SOURCE?>controllers/login.php" method="post">
    <div>
        id:<input type="text" name="id"><br>
    </div>
    <div>
        パスワード:<input type="password" name="pwd">
    </div>
    <div>
        <input type="submit" value="ログイン">
    </div>
    
    
    </form>

    <script src="<?php echo BASE_JS_PASS ?>"></script>
</body>
</html>