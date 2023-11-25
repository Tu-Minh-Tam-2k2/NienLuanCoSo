<?php
    include '../../../config/connect.php';

    if(isset($_GET['id']) && is_numeric($_GET['id']) && ($_GET['id'] > 0)){

            $query = " DELETE FROM sanpham WHERE id_sp=?";
            $sth = $pdo->prepare($query);
            $sth->execute([
                $_GET['id']
            ]);
            header("Location:http://NLdemo.localhost/public/quanly.php");
    }    
?>