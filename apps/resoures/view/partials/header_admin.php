<nav class="navbar navbar-expand-lg navbar-light bg-light">
  
  <div class="container">

    <div class="">
      <a href="../public/main_admin.php"><img class="img_logo" src="https://hapotravel.com/wp-content/uploads/2023/04/tong-hop-25-mau-logo-hoa-sen-dep-va-y-nghia_3.jpg" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>

    <div class="navbar-nav" style="margin: 0px 30px">
      <a class="nav-link active" aria-current="page" href="../public/add_sp.php">
        <button class="btn btn-light rounded-pill " style="height: 50px; min-width: 100px;">
          <b>Thêm sản phẩm mới</b>
        </button>
      </a>
    </div>

    <div class="navbar-nav" style="margin: 0px 30px">
      <a class="nav-link active " aria-current="page" href="../public/quanly.php">
        <button class="btn btn-light rounded-pill " style="height: 50px; min-width: 100px;">
          <b>Quản lý sản phẩm</b>
        </button>
      </a>
    </div>

    <div class="navbar-nav" style="margin: 0px 30px">
      <a class="nav-link active" aria-current="page" href="../public/comment_sp.php">
        <button class="btn btn-light rounded-pill " style="height: 50px; min-width: 100px;">
          <b>Quản lý đánh giá</b>
        </button>
      </a>
    </div>


    <ul class="navbar-nav" style="margin-right: 25px;">
      <button class="btn btn-light rounded-pill">
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle active text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <?php
                if (isset($_SESSION['username'])) {
                  echo "
                    <span class=\"text-success\"><b>{$_SESSION['username']}</b></span>
                  ";
                }
              ?>
          </a>
          <ul class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="login.php"><b>Đăng nhập</b></a></li>
            <li><a class="dropdown-item" href="../apps/resoures/view/authentication/submit_logout.php"><b>Đăng xuất</b></a></li>
          </ul>
        </li>
      </button>
    </ul>
  </div>
</nav>