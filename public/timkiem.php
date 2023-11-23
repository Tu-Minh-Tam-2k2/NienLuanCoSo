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
    <!-- {{!-- link jquery  --}} -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!-- {{!-- link font awesome  --}} -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <!-- link css  -->
    <link rel="stylesheet" href="../apps/resoures/css/style.css">
</head>

<body>
    <!--begin HEADER -->
    <?php include_once "../apps/resoures/view/partials/header.php"; ?>
    <?php include '../apps/config/connect.php'; ?>
    <!--end   HEADER -->
    <div class="container-fluid">
    <div class=" min_height">
        <!-- backgournd -->
        <!-- <div class="row">
            <div class="text-center">
                <p class="thuviensachonline" style="position:absolute; top: 90px; left: 2%; font-size: 60px; text-align:center;"><b> Tìm kiếm sản phẩm... </b></p>
                <img style="width: 100%; height: 350px;" src="https://duhocchaudaiduong.edu.vn/hinh-nen-cho-slide-powerpoint/imager_47_2865_700.jpg" alt="">
            </div>
        </div> -->


        <!-- Hiển thị Lish Sach  -->
        <div class="row mt-3">
            <div class="col-3  mt-3">
                <div class="box border border-warning mt-3 m-auto" style="width: 90%; background-color: white;">
                    <div class="tieude text-center">
                        <p class="border border-warning text-success"><b>Danh mục</b></p>
                    </div>
                    <div class="noidung">
                        <ul class="">
                            <li class=""><a href="./sp_mynghe.php" class="text-decoration-none "><b>Đồ mỹ nghệ</b></a></li>
                            <li class=""><a href="./sp_nongsan.php" class="text-decoration-none "><b>Nông sản</b></a></li>
                            <li class=""><a href="./sp_chebien.php" class="text-decoration-none "><b>Sản phẩm chế biến</b></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-9">
                <div class="row">
                    <?php
                    // lấy bién tìm kiếm từ form sau đó dùng câu lệnh tìm kiếm trong bảng BOOK và hiện ra;
                    if (!empty($_POST['timkiem'])) {
                        $timkiem = $_POST['timkiem'];
                        $query = "SELECT * FROM sanpham WHERE tensp like '%$timkiem%'";
                        $sth = $pdo->prepare($query);
                        $sth->execute([
                            
                        ]);
                        while ($row = $sth->fetch()) {
                            echo "
                                    <div class=\"card p-0 mx-4 mt-3 mb-3 hover_large\" style=\"width: 13rem;\">
                                        <a href=\"show_book.php?id={$row['id_sp']}\"><img class=\"card-img-top img_book \" src=\"{$row['link']}\"></a>
                                        <div class=\"card-body  border border-warning text-center bg_f5f2f2\">
                                            <h5 class=\"card-title  \">{$row['tensp']}</h5>
                                        </div>
                                    </div>
                                ";
                        }
                    }

                    ?>
                </div>

            </div>
        </div>
    </div>
    </div>
    <!--begin FOOTER  -->
    <?php include_once "../apps/resoures/view/partials/footer.php"; ?>
    <!-- end  FOOTER  -->
</body>
<!-- {{!-- link js bootstrap  --}} -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>