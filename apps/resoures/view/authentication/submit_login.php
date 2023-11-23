
<?php
include_once "../../../config/connect.php";
session_start();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['email']) && isset($_POST['pass'])) {
        // lay du lieu tu form login.php
        $email = $_POST['email'];
        $pass = $_POST['pass'];


        // lay du lieu tu sql
        $query = "SELECT * FROM user ";
        $sth = $pdo->prepare($query);
        $sth->execute([]);
        while ($row = $sth->fetch()) {
            // nếu email và pass mà người dùng nhập giống vs dữ liệu thì đăng nhập
            if ($row['email'] == $email && password_verify($pass, $row['pass'])) {
                $_SESSION['username']= $row['username'];
                $_SESSION['id']= $row['id'];

                if($row['email']=='admin@gmail.com'){  
                    header("Location:http://NLdemo.localhost/public/main_admin.php ");
                    return;
                }else{
                    header("Location: http://NLdemo.localhost/public/trangchu.php");
                    return;
                }
            }
            header("Location: http://NLdemo.localhost/public/login.php?er=Incorrect account or password !!!");
        }
    }
}

?>