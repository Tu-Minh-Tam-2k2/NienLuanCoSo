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
    <!--    link jquery  --}} -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!--    link font awesome  --}} -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <!-- link css  -->
    <link rel="stylesheet" href="../apps/resoures/css/style.css">
</head>

<body>
    <!--header-->
    <?php include_once "../apps/resoures/view/partials/header.php"; ?>
    <?php include '../apps/config/connect.php'; ?>

    <div class='container-fluid'>
        <div class=" min_height ">
            <!-- Hiển thị sản phẩm và nội dung bởi id trên URL -->
            <?php
            $query = "SELECT * FROM sanpham WHERE id_sp=?";
            $sth = $pdo->prepare($query);
            $sth->execute([
                $_GET['id']
            ]);
            while ($row = $sth->fetch()) {
                echo "
                        <div class=\"row\">
                            <div class=\"col-md-6 col-12 text-center \">
                                <img class=\" height_315 hover_large mt-5 max_width_315 \" src=\"{$row['link']}\"> 
                            </div>
                
                            <div class=\"col-md-6 col-12 mt-5\">
                                <div class=\"row\">
                                    <h2>{$row['tensp']}</h2>
                                    <p class=\"mt-5\">
                                        <b>Giá: </b>
                                        {$row['gia']}
                                    </p> 
                                    <p>
                                        <b>Xuất xứ:</b>
                                        {$row['noidung']}
                                    </p>
                                    <p>
                                </div>
                                <div class=\"row\">
                                    <p>
                                        Đã bán 19 sản phẩm | 
                                        <img class=\"start\" src=\"https://cuagonhua.com/wp-content/uploads/2020/05/icon-ngoi-sao-400x400.png\">
                                        <img class=\"start\" src=\"https://cuagonhua.com/wp-content/uploads/2020/05/icon-ngoi-sao-400x400.png\">
                                        <img class=\"start\" src=\"https://cuagonhua.com/wp-content/uploads/2020/05/icon-ngoi-sao-400x400.png\">
                                        <img class=\"start\" src=\"https://cuagonhua.com/wp-content/uploads/2020/05/icon-ngoi-sao-400x400.png\">
                                        <img class=\"start\" src=\"https://cuagonhua.com/wp-content/uploads/2020/05/icon-ngoi-sao-400x400.png\">
                                    </p>
                                </div>
                            </div>
                        </div>
                    ";
                }
            ?>
            <div>
                <button class="btn btn-primary btn-md btn-danger" style="margin-left: 50%">
                <form action="cart.php?id_sp=<?php echo $_GET['id_sp']; ?>" method="get" name="addcart" type="hidden">
                    <a href="cart.php" style="text-decoration:none; color:white">Thêm vào giỏ</a></form>
                     
                </button>
            </div>
           

            <!-- phần comment  -->
            <hr>
            <div class="row  my-2">
                <div class="col-4">
                    <div class="text-center">
                        <img style="height: 300px ;" class=" w-100 mx-2" src="https://images.pexels.com/photos/1179860/pexels-photo-1179860.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
                    </div>
                </div>
                <div class="col-8   ">
                    <h2 class="text-center"><b>Đánh giá</b></h2>
                    <!-- FORM chứa comment đc gởi đi cùng với id của cuốn sách và id của người comment -->
                    <form action="../apps/resoures/view/sanpham/comment_sp.php?id=<?php echo $_GET['id']; ?> " method="POST" name="form" class="form-inline d-flex ">
                        <textarea class="border border-success" required name="noidung" cols="100" rows="2" placeholder="Đánh giá của bạn về sản phẩm" class="mr-10 hover_large border"></textarea>
                        <button style="margin-left:20px;" type="submit" class="btn btn-success  ">Đăng</button>
                    </form>
                    <?php
                    $query = "SELECT *  FROM user , comment  WHERE user.id=comment.id_user AND comment.id_sp=? ORDER BY created_at DESC";

                    $sth = $pdo->prepare($query);
                    $sth->execute([
                        $_GET['id']
                    ]);
                    while ($row = $sth->fetch()) {
                        echo "
                        <div class=\"border border-warning max_width_758  mt-3 rounded min_height_50 word_wrap hover_large\" style=\"min-height: 80px;\">
                            <div class=\"d-flex justify-content-between\">
                                <div class=\"mx-2\"><b>{$row['username']}</b></div>   
                                <div class=\"\">{$row['created_at']}</div>
                            </div>
                            
                            <p class=\"mx-2 mt-3\">{$row['noidung']}</p>
                        </div>
                    ";
                    }
                    ?>
                    <div class="mt-3"></div>
                </div>
            </div>

            <!-- sản phẩm lien quan  -->
            <div class="row border text-center justify-content-center">
                <p class="mt-3"><b>Sản phẩm liên quan</b></p>
                <div class="card p-0 mx-4 mt-3 mb-3 hover_large" style="width: 10rem;">
                    <a href=""><img class="card-img-top  " src="https://fruitstt.vn/wp-content/uploads/2019/12/nhan-xuong-loai-2-Fruits-tt.jpg"></a>
                    <div class="mx-1">
                        <p class="card-title">25.000đ</p>
                        <p>Đã mua 19 <img class="start" src="https://cuagonhua.com/wp-content/uploads/2020/05/icon-ngoi-sao-400x400.png" alt=""></p>
                    </div>
                </div>

                <div class="card p-0 mx-4 mt-3 mb-3 hover_large" style="width: 10rem;">
                    <a href=""><img class="card-img-top  " src="https://goce.vn/files/product/62a440e8655b627c62fc7a728195ea26.jpg"></a>
                    <div class="mx-1">
                        <p class="card-title">35.000đ</p>
                        <p>Đã mua 18 <img class="start" src="https://cuagonhua.com/wp-content/uploads/2020/05/icon-ngoi-sao-400x400.png" alt=""></p>
                    </div>
                </div>

                <div class="card p-0 mx-4 mt-3 mb-3 hover_large" style="width: 10rem;">
                    <a href=""><img class="card-img-top  " src="https://www.conngongvang.com/wp-content/uploads/2019/03/chanh_khong_hat_huu_co.jpg"></a>
                    <div class="mx-1">
                        <p class="card-title">55.000đ</p>
                        <p>Đã mua 3 <img class="start" src="https://cuagonhua.com/wp-content/uploads/2020/05/icon-ngoi-sao-400x400.png" alt=""></p>
                    </div>
                </div>

                <div class="card p-0 mx-4 mt-3 mb-3 hover_large" style="width: 10rem;">
                    <a href=""><img class="card-img-top  " src="https://lzd-img-global.slatic.net/g/ff/kf/S7a86a332c0de473c8f9d66c0e8adaf101.jpg_720x720q80.jpg"></a>
                    <div class="mx-1">
                        <p class="card-title">82.000đ</p>
                        <p>Đã mua 5 <img class="start" src="https://cuagonhua.com/wp-content/uploads/2020/05/icon-ngoi-sao-400x400.png" alt=""></p>
                    </div>
                </div>

                <div class="card p-0 mx-4 mt-3 mb-3 hover_large" style="width: 10rem;">
                    <a href=""><img class="card-img-top  " src="https://tinhdauhoanen.com/wp-content/uploads/2021/11/BAC-HA-100.png"></a>
                    <div class="mx-1">
                        <p class="card-title">29.000đ</p>
                        <p>Đã mua 15 <img class="start" src="https://cuagonhua.com/wp-content/uploads/2020/05/icon-ngoi-sao-400x400.png" alt=""></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--footer-->
    <?php include_once "../apps/resoures/view/partials/footer.php"; ?>

</body>
<!--    link js bootstrap  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>