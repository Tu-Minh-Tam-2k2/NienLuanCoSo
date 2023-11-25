<?php
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
    <!-- link jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!-- link font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <!-- link css  -->
    <link rel="stylesheet" href="../apps/resoures/css/style.css">
</head>

<body>
    <!--header -->
    <?php include_once "../apps/resoures/view/partials/header_admin.php"; ?>
    <?php include '../apps/config/connect.php'; ?>

    <div class="container  ">
        <section class="" style="background-color: #eee; ">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-lg-12 col-xl-11">
                        <div class="card text-black" style="border-radius: 25px;">
                            <div class="card-body p-md-5">
                                <div class="row justify-content-center">
                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 text-success">Thêm sản phẩm mới</p>
                                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                        <span class="" style="position: absolute; top: 15px;">
                                            <a href="http://NLdemo.localhost/public/main_admin.php">
                                                <i class="fa-solid fa-arrow-left-long fa-beat fa-2xl" style="color: #73ff00;"></i>
                                            </a>
                                        </span>
                                        <!-- FORM lấy dữ liệu để POST đi xử lý -->
                                        <form class="mx-1 mx-md-4 " method="POST" action="../apps/resoures/view/sanpham/xuli_add_sp.php">
                                            <!-- Tên sản phẩm -->
                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <div class="form-outline flex-fill mb-0">
                                                    <label class="form-label" for="tensp"><b>Tên sản phẩm</b> </label>
                                                    <input autocomplete="off" type="text" name="tensp" class="form-control hover_large border" name="tensach" required />
                                                </div>
                                            </div>

                                            <!-- Phân loại  -->
                                            <br>
                                            <div class="d-flex flex-row align-items-center mb-4 ">
                                                <div class="form-outline flex-fill mb-0">
                                                    <label class="form-label" for="phanloai"><b>Phân loại</b> </label>
                                                    <input autocomplete="off" type="text" name="phanloai" class="form-control hover_large border" name="theloai" required />
                                                </div>
                                            </div>

                                            <!-- Link ảnh -->
                                            <br>
                                            <div class="d-flex flex-row align-items-center mb-4 ">
                                                <div class="form-outline flex-fill mb-0">
                                                    <label class="form-label" for="link"><b>Link ảnh</b> </label>
                                                    <input autocomplete="off" type="text" name="link" class="form-control hover_large border" name="link" required />
                                                </div>
                                            </div>

                                            <!-- Xuất xứ -->
                                            <br>
                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <div class="form-outline flex-fill mb-0">
                                                    <label class="form-label" for="xuatxu"><b>Xuất xứ </b></label>
                                                    <input autocomplete="off" type="text" name="noidung" class="form-control hover_large border" name="actor" required />
                                                </div>
                                            </div>

                                            <!-- Giá -->
                                            <br>
                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <div class="form-outline flex-fill mb-0">
                                                    <label class="form-label" for="gia"><b>Giá </b></label>
                                                    <input autocomplete="off" type="text" name="gia" class="form-control hover_large border" name="actor" required />
                                                </div>
                                            </div>
                                            <br>


                                            <div class=" mb-3 mb-lg-4">
                                                <button type="submit" class="btn btn-primary btn-lg ">Thêm</button>
                                            </div>

                                        </form>

                                    </div>
                                    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                                        <img src="https://www.bigc.vn/files/blog/thumb/742x0/calo-trong-trai-cay-03-01-02.png" style="width: 47%; top: 100px; position: absolute;" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- footer  -->
    <?php include_once "../apps/resoures/view/partials/footer.php"; ?>

</body>
<!--    link js bootstrap    -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>