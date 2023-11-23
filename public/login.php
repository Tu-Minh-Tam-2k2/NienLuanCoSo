
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
    <?php include_once "../apps/resoures/view/partials/header_index.php"; ?>    
    <?php include '../apps/config/connect.php'; ?>
    <!--end   HEADER -->

    <!-- begin MAIN  -->
    <section class="vh-75">
      <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-md-9 col-lg-6 col-xl-5">
            <img src="https://mnyetkieu.edu.vn/uploads/mnyetkieu/news/2020_06/trai-cay-sach3.jpg"
              class="img-fluid" alt="Sample image">
          </div>
          <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1 mt-4">
            <form method="POST" action="../apps/resoures/view/authentication/submit_login.php">
              <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                <p class="lead fw-normal mb-0 me-3"><b>Đăng nhập với Email :</b></p>
              </div>

              <!-- Email input -->
              <div class="form-outline mb-4 mt-4">
                <label class="form-label" for="email"><b>Địa chỉ Email :</b></label>
                <input type="email" id="email" name="email" class="form-control form-control-lg"
                  placeholder="Xin vui lòng nhập Email" required />
              </div>

              <!-- Password input -->
              <div class="form-outline mb-3">
                <label class="form-label" for="pass"><b>Mật khẩu :</b></label>
                <input type="password" id="pass" name="pass" class="form-control form-control-lg"
                  placeholder="Xin vui lòng nhập mật khẩu" required/>
              </div>

              <div class="d-flex justify-content-between align-items-center">
                <!-- Checkbox -->
                <div class="form-check mb-0">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                  <label class="form-check-label" for="form2Example3">
                    Remember me
                  </label>
                </div>
                <a href="#!" class="text-body">Quên mật khẩu?</a>
              </div>

              <!-- Sai tai khoan -->
              <div class="form-outline mt-3">
                <label class="form-label" for="pass">
                  <?php
                    if(isset($_GET['er'])){
                      echo "
                        <b class=\"text-danger mt-3\">{$_GET['er']}</b>
                      ";
                    }
                  ?>
                </label>
              </div>

              <div class="text-center text-lg-start mt-4 pt-2">
                <button type="submit" class="btn btn-primary btn-lg"
                  style="padding-left: 2.5rem; padding-right: 2.5rem;">Đăng nhập</button>
                <p class="small fw-bold mt-2 pt-1 mb-0">Không có tài khoản? <a href="./register.php"
                    class="link-danger">Đăng ký</a></p>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div>
        <!-- Right -->
        <div>
          <a href="#!" class="text-white me-4">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="#!" class="text-white me-4">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#!" class="text-white me-4">
            <i class="fab fa-google"></i>
          </a>
          <a href="#!" class="text-white">
            <i class="fab fa-linkedin-in"></i>
          </a>
        </div>
        <!-- Right -->
      </div>
    </section>
    <!-- end MAIN  -->
    
    <!--begin FOOTER  -->
    <?php include_once "../apps/resoures/view/partials/footer.php"; ?>    
    <!-- end  FOOTER  -->
</body>
<!-- {{!-- link js bootstrap  --}} -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>


