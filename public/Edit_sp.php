<?php
include '../apps/config/connect.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DongThap's Specialty</title>
    <link rel="shortcut icon" type="images" href="https://img3.thuthuatphanmem.vn/uploads/2019/10/17/hinh-anh-logo-hoa-sen-png_102723080.png">
    <!-- link bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--    link jquery    -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!--    link font awesome    -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <!-- link css  -->
    <link rel="stylesheet" href="../apps/resoures/css/style.css">
</head>

<body>
    <!-- header -->
    <?php include_once "../apps/resoures/view/partials/header_admin.php"; ?>

    <div class=" min_height mt-5">
        <?php
        $query = "SELECT * FROM sanpham WHERE id_sp = ? ";
        $sth = $pdo->prepare($query);
        $sth->execute([
            $_GET['id']
        ]);
        while ($row = $sth->fetch()) {
            if (!empty($row)) {
                echo "
                        <div class=\"row\">
                            <div class=\"col-5 text-center\"> 
                                <img class=\"img_update_sp\" src=\"{$row['link']}\">
                            </div>

                            <div class=\"col-7 \">
                                <form action=\"../apps/resoures/view/sanpham/update_sp.php?id={$row['id_sp']}\" method=\"POST\">
                                    <div class=\"mb-3\">
                                        <label for=\"id\" class=\"form-label\"><b>ID sản phẩm :</b></label>
                                        <input type=\"\" class=\"form-control\" id=\"id\" name=\"id_sp\" value=\"{$row['id_sp']} \">
                                    </div>

                                    <div class=\"mb-3\">
                                        <label for=\"tensp\" class=\"form-label\"><b>Tên sản phẩm :</b></label>
                                        <input type=\"\" class=\"form-control\" id=\"tensp\" name=\"tensp\" value=\"{$row['tensp']} \">
                                    </div>
                        
                                    <div class=\"mb-3\">
                                        <label for=\"phanloai\" class=\"form-label\"><b>Phân loại :</b> </label>
                                        <input type=\"\" class=\"form-control\" id=\"phanloai\" name=\"phanloai\" value=\"{$row['phanloai']} \">
                                    </div>

                                    <div class=\"mb-3\">
                                        <label for=\"link\" class=\"form-label\"><b>Link ảnh :</b> </label>
                                        <input type=\"\" class=\"form-control\" id=\"link\" name=\"link\" value=\"{$row['link']} \">
                                    </div>
                        
                                    <div class=\"mb-3\">
                                        <label for=\"noidung\" class=\"form-label\"><b>Xuất xứ :</b></label>
                                        <textarea class=\"form-control\" id=\"noidung\" rows=\"5\" name = \"noidung\"> {$row['noidung']} </textarea>
                                    </div>  
                        
                                    <div class=\"mb-3\">
                                        <label for=\"actor\" class=\"form-label\"><b>Giá tiền :</b> </label>
                                        <input type=\"\" class=\"form-control\" id=\"gia\" name=\"gia\" value=\"{$row['gia']} \" >
                                    </div>
                        
                                    <div class=\"mb-3 text-center\">
                                        <button class=\"btn btn-success w-25\" >Sửa</button>                                        
                                    </div>
                                </form>
                            </div>
                        </div>
                    ";
            }
        }
        ?>
    </div>
    <!--footer-->
    <?php include_once "../apps/resoures/view/partials/footer.php"; ?>

</body>
<!--    link js bootstrap    -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>