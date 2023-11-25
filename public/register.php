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
    <!--header-->
    <?php include_once "../apps/resoures/view/partials/header_index.php"; ?>    
    <?php include '../apps/config/connect.php'; ?>

    <div class="container">
      <section class="" style="background-color: #eee;">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
              <div class="card text-black" style="border-radius: 25px;">
                <div class="card-body p-md-5">
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                      <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 ">Đăng ký</p>

                      <form class="mx-1 mx-md-4 " method="POST" action="../apps/resoures/view/authentication/submit_register.php">
                        <!--    Email    -->
                        <div class="d-flex flex-row align-items-center mb-4">
                          <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="email"><b>Email người dùng : </b></label>
                            <input type="email" id="email" class="form-control" name="email" required/>
                          </div>
                        </div>

                        <!-- username  -->
                        <div class="d-flex flex-row align-items-center mb-4">
                          <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="username"><b>Tên người dùng</b> </label>
                            <input type="" id="username" class="form-control" name="username" required/>
                          </div>
                        </div>

                        

                        <!-- Password  -->
                        <div class="d-flex flex-row align-items-center mb-4">
                          <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="pass"><b>Mật khẩu</b></label>
                            <input type="password" id="pass" class="form-control" name="pass" required />
                          </div>
                        </div>

                        <!-- error -->
                        <div class="d-flex flex-row align-items-center mb-4 ">
                          <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="pass">
                              <b class="text-danger mx-5">
                                <?php
                                  if(isset($_GET['error'])){
                                    echo $_GET['error'];
                                  }
                                ?>
                              </b>
                            </label>
                          </div>
                        </div>


                        <div class="form-check d-flex justify-content-center mb-5">
                          <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                          <label class="form-check-label" for="form2Example3">
                            Tôi đồng ý tất cả các điều khoản <a href="./login.php">Đăng nhập</a>
                          </label>
                        </div>

                        <div class="d-flex justify-content-center mb-3 mb-lg-4">
                          <button type="submit" class="btn btn-primary btn-lg">Đăng ký</button>
                        </div>

                      </form>

                    </div>
                    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                      <img src="https://image.phunuonline.com.vn/fckeditor/upload/2021/20210121/images/6772_product4743.jpg" class="img-fluid" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    
    <!--footer-->
    <?php include_once "../apps/resoures/view/partials/footer.php"; ?>

</body>
<!--    link js bootstrap    -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>


