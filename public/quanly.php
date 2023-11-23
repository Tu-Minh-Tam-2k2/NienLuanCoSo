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
    <?php include_once "../apps/resoures/view/partials/header_admin.php"; ?>
    <?php include '../apps/config/connect.php'; ?>
    <!--end   HEADER -->

    <div class=" container min_height">
        <span class="" style="position: absolute; top: 110px; left: 140px;">
            <a href="http://localhost/thuvien/public/main_admin.php">
                <i class="fa-solid fa-arrow-left-long fa-beat fa-2xl" style="color: #73ff00;"></i>
            </a>
        </span>
        <div class="row">
            <div class="box mt-3 border border-warning bg-warning" style="width: 98%; margin-left: 13px;">
                <div class="tieude text-center ">
                    <h3 class="">Quản Lí Sản Phẩm</h3>
                </div>
            </div>
        </div>
        <table class="table table-bordered  mt-1 text-center bg-light">
            <thead>
                <tr class="bg-success text-white">
                    <th scope="col">STT</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Phân loại</th>
                    <th scope="col">Giá</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM sanpham";
                $sth = $pdo->prepare($query);
                $sth->execute([]);
                $i=0;
                while ($row = $sth->fetch()) {
                    $i++;
                    echo "
                            <tr>
                                <th class=\"\">$i</th>
                                <td>{$row['tensp']}</td>
                                <td>{$row['phanloai']}</td>
                                <td>{$row['gia']}</td>
                                <td><a class=\"text-decoration-none text-success\" href=\"Edit_sp.php?id={$row['id_sp']}\">
                                    <i class=\"fa-solid fa-pen-to-square fa-beat\" style=\"color: #161dd4;\"></i>
                                </td>
                                <td><a href=\"\" data-id=\"{$row['id_sp']}\" data-bs-toggle=\"modal\" data-bs-target=\"#delete_novel\" class=\"text-decoration-none text-danger\">
                                    <i class=\"fa-solid fa-trash fa-bounce\" style=\"color: #f40101;\"></i>
                                </a></td>
                            </tr>

                            <div class=\"modal fade\" id=\"delete_novel\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                                <div class=\"modal-dialog\">
                                    <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Xóa sản phẩm ?</h5>
                                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                    </div>
                                    <div class=\"modal-body\">
                                        <p><b>Bạn chắc chắn muốn xóa sản phẩm này ?</b></p>
                                    </div>
                                    <di class=\"modal-footer\">
                                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Hủy</button>
                                        <button type=\"button\" class=\"btn btn-danger\" id=\"btn-delete-cart\" >Xóa</button>
                                    </div>
                                </div>
                            </div>
                        ";
                }
                ?>
            </tbody>
        </table>
    </div>


    <!-- Modal -->


    <form name="delete-form" method="POST"></form>
    <!-- Bootstrap JavaScript Libraries -->
    <script>
        var delete_novel = document.getElementById('delete_novel')
        var id_novel
        var deleteForm = document.forms['delete-form'];
        var btnDeleteCart = document.getElementById('btn-delete-cart');
        delete_novel.addEventListener('show.bs.modal', event => {
            // Button that triggered the modal
            var button = event.relatedTarget
            // Extract info from data-bs-* attributes
            id_novel = button.getAttribute('data-id')
        })
        btnDeleteCart.onclick = function() {
            deleteForm.action = '../apps/resoures/view/book/delete_book.php?id=' + id_novel;
            deleteForm.submit();
        }
    </script>



    <!--begin FOOTER  -->
    <?php include_once "../apps/resoures/view/partials/footer.php"; ?>
    <!-- end  FOOTER  -->
</body>
<!-- {{!-- link js bootstrap  --}} -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>