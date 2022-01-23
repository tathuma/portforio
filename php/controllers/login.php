<?php  
function post() {
    echo $_POST['id'], $_POST['pwd'];
    echo 'post受け取り';
}

post();