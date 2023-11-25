<!DOCTYPE html>
<html>
<!-- icons -->
<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- icons -->
<style>
    * {
        margin: 0;
        padding: 0;
        font-family: 'Anek Malayalam', sans-serif;
    }

    /* navbar */
    /* #navbar-color{
    background-color: rgb(255, 255, 255);
    box-shadow: 0px -11px 4px 10px black;
} */
    /* #navbar{
    width: 90%;
} */
    #logo {
        font-size: 25px;
        color: black;
        text-shadow: 1px 1px 1px black;
    }

    #logo img {
        margin-bottom: 10px;
    }

    #logo span {
        color: #0ea10e;
    }

    .navbar-nav {
        margin-left: 70px;
        margin-right: 70px;

    }

    .nav-link {
        color: black;
        font-size: 18px;
        font-weight: bold;
        margin-left: 10px;
        transition: 0.6s ease;
    }

    .nav-link:hover {
        background-color: #0ea10e;
        color: white;
        border-radius: 5px;
    }

    #btn,
    #icons {
        padding-top: 9px;

    }

    #btn a {
        text-decoration: none;
    }

    #icons i {
        text-decoration: none;
        color: black;
    }

    /* #btn input{
    width: 150px;
    height: 30px;
    font-size: 16px;
    text-align: center;
    color: #000000;
    border: 2px solid #ff00dd;
    background: transparent;
    border-radius: 5px;
    transition: 0.5s ease;
    cursor: pointer;
} */

    /* #btn .search {
    width: 60px;
    height: 30px;
    font-size: 16px;
    color: #0ea10e;
    border: 2px solid #0ea10e;
    background: transparent;
    border-radius: 5px;
    transition: 0.5s ease;
    cursor: pointer;
} */
    #btn button:hover {
        background-color: #0ea10e;
        color: white;
    }

    /* @media screen and (max-width:1000px){
    .navbar-nav{
        margin-left: 10px;
    }
}
@media screen and (max-width:1338px){

    .nav-link{
        font-size: 14px;
    } 
}  */
    /* navbar */
    /* home section */
    .home {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
        position: relative;
        z-index: 0;
    }

    .home .img {
        flex: 1 1 400px;
    }

    .home .img img {
        width: 100%;
        padding-top: 5rem;
    }

    .home .content {
        flex: 1 1 400px;
    }

    .content h3 {
        margin-left: 130px;
        font-size: 60px;
        color: #fff;
        text-shadow: 4px 1px 9px rgb(0, 255, 0);
    }

    .content p {
        margin-left: 130px;
        color: white;
    }

    .content .btn {
        margin-left: 130px;
        width: 100px;
        height: 35px;
        background-color: #0ea10e;
        color: white;
    }

    @media screen and (max-width:800px) {
        .content h3 {
            margin-left: 50px;
            font-size: 40px;
        }

        .content p {
            margin-left: 50px;
        }

        .content .btn {
            margin-left: 50px;
        }
    }

    @media screen and (max-width:570px) {
        .content h3 {
            margin-left: 20px;
        }

        .content p {
            margin-left: 20px;
        }

        .content .btn {
            margin-left: 20px;
        }
    }

    /* home section */

    /* footer */

    #footer {
        padding: 0 0 30px 0;
        color: #d0d0d0;
        font-size: 14px;
        background: #111111;
    }

    #footer .footer-top {
        padding: 60px 0 30px;
        background: #a9a9a947;
        color: #fff;
    }

    #footer .footer-top .footer-contact h3 {
        color: #0ea10e;
        text-shadow: 1px 1px 1px black;
    }

    #footer .footer-top .footer-contact h4 {
        font-size: 22px;
        margin: 0 0 30px 0;
        padding: 2px 0 2px 0;
        line-height: 1;
        font-weight: 700;
    }

    #footer .footer-top .footer-contact p {
        font-size: 14px;
        margin: 0;
        line-height: 1;
        font-weight: 700;
        color: white;
    }

    #footer .footer-top h4 {
        font-size: 16px;
        font-weight: bold;
        position: relative;
        padding-bottom: 12px;
    }

    #footer .footer-top .footer-links {
        margin-bottom: 30px;
    }

    #footer .footer-top .footer-links ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    #footer .footer-top .footer-links ul li {
        padding-right: 2px;
        color: #0ea10e;
        font-size: 18px;
        line-height: 1;
    }

    #footer .footer-top .footer-links ul li {
        padding-right: 10px 0;
        display: flex;
        align-items: center;
    }

    #footer .footer-top .footer-links ul li:first-child {
        padding-top: 0;
    }

    #footer .footer-top .footer-links ul li a {
        color: white;
        transition: 0.3s ease;
        display: inline-block;
        line-height: 2;
        text-decoration: none;
    }

    #footer .footer-top .footer-links ul li a:hover {
        text-decoration: none;
        color: #0ea10e;
    }

    #footer .footer-top .socail-links a {
        font-size: 18px;
        display: inline-block;
        background: #373737;
        color: #fff;
        line-height: 1;
        padding: 8px 0;
        padding-right: 4px;
        border-radius: 50px;
        text-align: center;
        width: 36px;
        height: 36px;
        transition: 0.3s ease;
    }

    #footer .footer-top .socail-links a:hover {
        background: #0ea10e;
        color: white;
        text-decoration: none;
    }

    #footer .copyright {
        text-align: center;
        float: left;
    }

    #footer .credits {
        float: right;
        text-align: center;
    }

    html {
        scroll-behavior: smooth;
    }

    .arrow {
        position: fixed;
        background-color: #0ea10e;
        border-radius: 50px;
        height: 50px;
        bottom: 40px;
        right: 50px;
        text-decoration: none;
        text-align: center;
        line-height: 50px;
    }
</style>

<body>
    <footer id="footer" style="margin-top: 50px;" data-aos="fade-up" data-aos-duration="1500">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 footer-contact">
                        <h3>DongThap's Specialty</h3>
                        <p>
                            Cao Lãnh<br><br>
                            Lai Vung <br><br>
                            Lấp Vò <br><br>
                        </p>
                        <strong>Phone: <strong>(+84)xxxxx</strong></strong><br>
                        <strong>Email: <strong>DongThapSpecialty@gmail.com</strong></strong>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4>Chuyển trang</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"><a href="/public/sp_nongsan.php">Nông sản</a></i></li>
                            <li><i class="bx bx-chevron-right"><a href="/public/sp_chebien.php">Sản phẩm chế biến</a></i></li>
                            <li><i class="bx bx-chevron-right"><a href="/public/sp_mynghe.php.php">Đồ mỹ nghệ</a></i></li>
                        </ul>
                    </div>


                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4>DongThap's Specialty</h4>
                        <p>DongThap's Specialty là chợ trực tuyến đánh dấu một kỷ nguyên mới trong việc bán đặc sản bằng cách thu hút nông dân tương tác xã hội trực tuyến mạnh mẽ với khách hàng</p>
                        <div class="socail-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-google-plus"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container py-4">
            <div class="copyright">
                &copy; Copyright <strong><span>DongThap's Specialty</span></strong>. Tu_Minh_Tam
            </div>
        </div>
    </footer>
</body>

</html>