<?php
    include '../../../config/connect.php';

    if(isset($_GET['id']) && is_numeric($_GET['id']) && ($_GET['id'] > 0)){

        // try{
            $query = " DELETE FROM BOOK WHERE id_sach=?";
            $sth = $pdo->prepare($query);
            $sth->execute([
                $_GET['id']
            ]);
            header("Location: http://localhost/thuvien/public/teacher.php");
        // }catch(PROException $e){
        //     echo "Không thể xóa được";
        // }
    }    
?>