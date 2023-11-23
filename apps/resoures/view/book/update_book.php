<?php
    include '../../../config/connect.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(!empty($_POST['tensp']) && !empty($_POST['phanloai'])  && !empty($_POST['link'])  && !empty($_POST['noidung'])  && !empty($_POST['gia'])){
            $query = "UPDATE sanpham SET tensp=?, phanloai=?, link=?, noidung=?, gia=? WHERE id_sp = ?";
                $sth = $pdo->prepare($query);
                $sth->execute([
                    $_POST['tensp'],
                    $_POST['phanloai'],
                    $_POST['link'],
                    $_POST['noidung'],
                    $_POST['gia'],
                    $_POST['id_sp']
                ]);
                header("Location:http://NLdemo.localhost/public/main_admin.php");
        }else{
            echo "Nhập dữ liệu !!!";
        }
    }
?>