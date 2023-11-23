<?php
session_start();
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- logo -->
  <a href="trangchu.php"><img class="img_logo" src="https://hapotravel.com/wp-content/uploads/2023/04/tong-hop-25-mau-logo-hoa-sen-dep-va-y-nghia_3.jpg" alt=""></a>
  <a class="navbar-brand " href="trangchu.php" id="logo">
    DongThap
    <span>Specialty</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Danh mục -->
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav" style="margin-left:40px; margin-top:0px;">
      <li class="nav-item active">
        <a class="nav-link" href="../public/sp_nongsan.php">Nông sản </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../public/sp_chebien.php">Sản phẩm chế biến</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../public/sp_mynghe.php">Đồ mỹ nghệ</a>
      </li>

    </ul>
    <!-- Tìm kiếm -->
    <div class="navbar-nav" style="margin-left:0px; margin-top:0px;">
      <!-- form tìm kiếm nhập nội dung tìm kiếm để POST đi xử lí -->
      <form method="POST" action="../public/timkiem.php">
        <div class="d-flex">
          <input type="text" class="form-control " name="timkiem">
          <button class="btn">
            <i class="fa-solid fa-magnifying-glass fa-beat fa-2xl" style="color: #00ff11;"></i>
          </button>
        </div>

      </form>
    </div>


    <!-- đăng nhập/ đăng xuất -->
    <ul class="navbar-nav" style=" margin-right: 60px;">
      <div id="icons">
        <a class="cartshopping" href="cart.php" ><i class="fa-solid fa-cart-shopping fa-2x"></i></a>
      </div>
      <button class="btn btn-light rounded-pill">
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle active text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php
            if (isset($_SESSION['username'])) {
              echo "
                <span class=\"text-dark\"> <b>{$_SESSION['username']}</b></span>
              ";
            }
            ?>
          </a>
          <ul class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="login.php"><b>Sign in</b></a></li>
            <li><a class="dropdown-item" href="../apps/resoures/view/authentication/submit_logout.php"><b>Log out</b></a></li>
          </ul>
        </li>
      </button>
    </ul>
  </div>
</nav>