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
    <!--begin HEADER -->
    <?php include_once "../apps/resoures/view/partials/header.php"; ?>
    <?php include '../apps/config/connect.php'; ?>
    <!--end   HEADER -->
    <div class="container-fluid">
        <div class=" min_height">
            <!-- backgournd -->
            <div class="row">
                <div class="text-center">
                    <div class="slider">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="https://afamilycdn.com/150157425591193600/2023/7/9/5-loai-trai-cay-danh-cho-nguoi-gay-nguoi-muon-giam-can-tranh-xa-1845-1688901557091-1688901557407423768471.jpg" style="width: 100%; height: 550px;" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="https://cdn.nhathuoclongchau.com.vn/unsafe/https://cms-prod.s3-sgn09.fptcloud.com/nhung_cong_dung_tuyet_voi_cua_trai_cay_co_mui_u_Yi_Ha_1669106222_2d8d43cbb4.jpg" style="width: 100%; height: 550px;" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="https://dulichvietnam.com.vn/vnt_upload/news/07_2021/Ve_dep_cua_hoa_sen_1.png" style="width: 100%; height: 550px;" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Hiển thị Lish Sach  -->
            <div class="row mt-3">
                <div class="col-3  mt-3">
                    <div class="box border border-warning mt-3 m-auto" style="width: 90%;">
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
                    <div class="row text-center m-auto" style="width: 98%;">
                        <button class="btn btn-success">
                            <b>Nông sản</b>
                        </button>
                    </div>
                    <div class="row">
                        <?php
                        $query = "SELECT * FROM sanpham WHERE phanloai=? ";
                        $sth = $pdo->prepare($query);
                        $sth->execute([
                            'nông sản'
                        ]);
                        while ($row = $sth->fetch()) {
                            echo "
                                <div class=\"card p-0 mx-4 mt-3 mb-3 hover_large\" style=\"width: 13rem;\">
                                    <a href=\"show_sp.php?id={$row['id_sp']}\"><img class=\"card-img-top img_sp \" src=\"{$row['link']}\"></a>
                                    <div class=\"card-body  border border-warning text-center bg_f5f2f2\">
                                        <h5 class=\"card-title  \">{$row['tensp']}</h5>
                                    </div>
                                </div>
                                
                            ";
                        }
                        ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--footer-->
    <?php include_once "../apps/resoures/view/partials/footer.php"; ?>

</body>
<!--    link js bootstrap    -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>