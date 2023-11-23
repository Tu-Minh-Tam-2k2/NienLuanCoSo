<?php

    include '../../../config/connect.php';
    session_start();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        // lấy dữ liệu dừ form về nội dung comment , ai comment , comment vào cuốn sách nào ?
        if(isset($_POST['noidung']) && isset($_GET['id'])  && isset($_SESSION['id'])){

            $noidung = $_POST['noidung'];
            $id_sach = $_GET['id'];
            $id_user = $_SESSION['id'];
        // kiểm tra thông tin đầy đủ sau đó chèn vào bảng COMMENT
            $query = 'INSERT INTO comment (id_sp ,id_user , noidung) VALUES (?,?,?)' ;
                $sth = $pdo->prepare($query);
                $sth->execute([
                    $_GET['id'],
                    $_SESSION['id'],
                    $_POST['noidung']
                ]);
                header("Location: ".$_SERVER['HTTP_REFERER']."");


        }else{
            echo "Nhập dữ liệu !!!";
        }
    }

    
?>

