<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DongThap's Specialty</title>
    <link rel="shortcut icon" type="images" href="https://img3.thuthuatphanmem.vn/uploads/2019/10/17/hinh-anh-logo-hoa-sen-png_102723080.png">
    <!-- link css  -->
    <link rel="stylesheet" href="../apps/resoures/css/style.css">
    <!-- link bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- link jquery    -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!-- link font awesome    -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Red+Hat+Display:900&display=swap');

        .black-lives-matter {
            font-size: 5vw;
            line-height: 8vw;
            margin: 0;
            font-family: 'Red Hat Display', sans-serif;
            font-weight: 900;
            background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(208, 2, 187, 1) 52%, rgba(0, 212, 255, 1) 100%);

            background-size: 40%;
            background-position: 50% 50%;
            -webkit-background-clip: text;
            color: rgba(0, 0, 0, 0.08);
            animation: zoomout 10s ease 500ms forwards;
        }

        @keyframes zoomout {
            from {
                background-size: 60%;
            }

            to {
                background-size: 5%;
            }
        }
    </style>
</head>

<body>
    <!--header-->
    <?php include_once "../apps/resoures/view/partials/header_index.php"; ?>
    <?php include '../apps/config/connect.php'; ?>

    <div class="container-fluid">
        <div class="row " style="min-height: 375px;">
            <!-- background -->
            <div class="col-9">
                <div class=" mt-5 pos_relative m-auto " style="width: 90%;">
                    <div class="col">
                        <img src="https://img5.thuthuatphanmem.vn/uploads/2021/12/27/background-trai-cay-giau-vitamin_044214215.jpg" alt="" class="w-100 position-relative" style="height: 400px;">
                        <h1 class="position-relative text-center black-lives-matter " style="bottom: 230px">Đặc sản Đồng Tháp</h1>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="box border mt-5" style="width: 95%;">
                    <div class="tieude text-center bg-warning " style="height: 35px;">
                        <p><b>Điều hướng</b></p>
                    </div>
                    <div class="noidung">
                        <ul>
                            <li>
                                <a href="" class="text-decoration-none">Trang cá nhân</a>
                            </li>
                            <li>
                                <a href="" class="text-decoration-none">Chào mừng bạn đến với Đặc sản Đồng Tháp</a>
                            </li>
                            <li>
                                <a href="" class="text-decoration-none">Thông tin trang web</a>
                            </li>
                            <li>
                                <a href="" class="text-decoration-none">Tin tức về nông sản</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-->
    <?php include_once "../apps/resoures/view/partials/footer.php"; ?>

</body>
<!--    link js bootstrap    -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>