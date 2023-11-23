
<?php
session_start();
    // nếu tài khoản tồn tìa thì xóa tài khoản
    if (isset($_SESSION['username']) && isset($_SESSION['id'])) {
        unset($_SESSION['username']);
        unset($_SESSION['id']);
        header("Location: http://NLdemo.localhost/public/login.php");
    } else {
        header("Location: http://NLdemo.localhost/public/login.php");
    }
?>