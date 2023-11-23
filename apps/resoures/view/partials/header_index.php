<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DongThap's Specialty</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <div class="">
        <a href=""><img class="img_logo" src="https://hapotravel.com/wp-content/uploads/2023/04/tong-hop-25-mau-logo-hoa-sen-dep-va-y-nghia_3.jpg" alt=""></a>
        <a class="navbar-brand " href="#" id="logo"><img src="/assets/images/logo.jpg" alt="" width="30px">
          DongThap
          <span>Specialty</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>

      <ul class="navbar-nav" style="margin-right: 25px;">
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
              <li><a class="dropdown-item" href="register.php"><b>Register</b></a></li>
              <li><a class="dropdown-item" href="login.php"><b>Sign in</b></a></li>
          </li>
        </button>
      </ul>
    </div>
  </nav>
</body>

</html>