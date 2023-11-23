<?php
include '../../../config/connect.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['email'])  && isset($_POST['username']) && isset($_POST['pass'])) {

        // tim kiếm trong bảng user xem nó tồn tại hay chưa ?
        $query1 = "SELECT * FROM user";
        $kq = $pdo->prepare($query1);
        $kq->execute([]);
        while($row1 = $kq->fetch()){
            if($_POST['email'] == $row1['email']){
                header("Location:http://NLdemo.localhost/public/register.php?error=Account already exists !!!");
                return;
            }           
        }

        // mã hóa mật khẩu để tăng bảo mật 
        $mk = $_POST['pass'];
        $mk_mahoa = password_hash($mk, PASSWORD_DEFAULT);
        
        // chèn 3 biến này vào bảng user nếu như tài khoản chưa tồn tại
        $query = 'INSERT INTO user (email , pass , username) VALUES (?,?,?)';
        $sth = $pdo->prepare($query);
        $sth->execute([
            $_POST['email'],
            // $_POST['pass'],
            $mk_mahoa ,
            $_POST['username']
        ]);
        header("Location:http://NLdemo.localhost/public/login.php");




    } else {
        echo "Nhập dữ liệu !!! ";
    }
}
