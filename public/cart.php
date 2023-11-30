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
    <!--    link jquery    -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!--    link font awesome    -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <!-- link css  -->
    <link rel="stylesheet" href="../apps/resoures/css/style.css">
    <style>
        #success_message {
            display: none;
        }
    </style>

</head>

<body>
    <!--header-->
    <?php include_once "../apps/resoures/view/partials/header.php"; ?>
    <?php include '../apps/config/connect.php'; ?>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form class="well form-horizontal" action=" " method="post" id="contact_form" style="border: 2px;">
                    <fieldset>
                        <!-- Form Name -->
                        <legend style="margin-left: 23%; margin-top: 10px"><b>Thông tin địa chỉ</b></legend>

                        <!-- Text input-->

                        <div class="form-group mb-3">
                            <label class="col-md-4 control-label"><b>Họ tên</b></label>
                            <div class="col-md-9 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input name="first_name" placeholder="Vui lòng nhập Họ tên" class="form-control" type="text">
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label class="col-md-4 control-label"><b>Email</b></label>
                            <div class="col-md-9 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                    <input name="email" placeholder="Vui lòng nhập địa chỉ Email" class="form-control" type="text">
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label class="col-md-4 control-label"><b>Số điện thoại</b></label>
                            <div class="col-md-9 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                    <input name="phone" placeholder="" class="form-control" type="text">
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label class="col-md-4 control-label"><b>Địa chỉ giao hàng</b></label>
                            <div class="col-md-9 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                    <textarea name="address" id="" cols="90" rows="3"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-4 mt-md-3">
                                    <button type="submit" class="btn btn-warning">Send <span class="glyphicon glyphicon-send"></span></button>
                                </div>
                            </div>
                    </fieldset>
                </form>
            </div>
            <div class="col-md-6">

                <legend style="margin-left: 43%; margin-top: 10px"><b>Giỏ hàng</b></legend>

                <table class="table-bordered col-md-12 text-center">
                    <tr>
                        <th>STT</th>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Giá</th>
                    </tr>
                    <?php
                    $query = "SELECT * FROM sanpham";
                    $sth = $pdo->prepare($query);
                    $sth->execute([]);
                    $i = 0;
                    while ($row = $sth->fetch()) {
                        $i++;
                        echo "
                            

                            
                        ";
                    }
                    ?>

                </table>
            </div>
        </div>

    </div>
    <!--footer -->
    <?php include_once "../apps/resoures/view/partials/footer.php"; ?>

</body>


<!--    link js bootstrap    -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>