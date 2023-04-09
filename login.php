<?php 
    include './connect.php';
?>
<!doctype html>
<html lang="zxx">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Smobile</title>
    <link rel="icon" href="img/logos.png">
   
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/animate.css">
  
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    
    <link rel="stylesheet" href="css/all.css">
 
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/themify-icons.css">
   
    <link rel="stylesheet" href="css/magnific-popup.css">
   
    <link rel="stylesheet" href="css/slick.css">

    <link rel="stylesheet" href="css/style.css">
</head>

<style>
.header_bg {
    background-color: #ecfdff;
    height: 230px;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.padding_top1{
    padding-top:20px;
}
.a1{
    padding-top:130px;
}

.a2{
    height: 230px;

}
</style>

<body>

    <?php include 'header.php';?>

 
  <section class="breadcrumb header_bg">
        <div class="container">
            <div class="row justify-content-center a2">
                <div class="col-lg-8 a2">
                        <div class="a1">
                            <h2>Đăng Nhập</h2>
                        </div>
                </div>
            </div>
        </div>
    </section>
 
    <section class="login_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_text text-center">
                        <div class="login_part_text_iner">
                            <h2>WELCOME</h2>
                            <p>Đăng ký tài khoản để có trải nghiệm tốt nhất.</p>
                            <a href="register.php" class="btn_3">Đăng ký</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            <h3>WELCOME ! <br> Đăng Nhập Ngay</h3>
                            <?php
                                if (isset($_POST["dangnhap"])) {
                                    $email = ($_POST["email"]);
                                    $matkhau = ($_POST["matkhau"]);
                                    if (rowCount("SELECT * FROM taikhoan WHERE taikhoan='$email' && matkhau='$matkhau' && status =0") == 1) {
                                        setcookie('user', $email, time() + (86400 * 30), "/");
                                        header('location:index.php');
                                    } 
                                    else if (rowCount("SELECT * FROM taikhoan WHERE status =1") == 1){
                                        $error = 'Tài khoản của bạn đã bị khóa. Vui lòng liên hệ admin';
                                    }
                                    else{
                                        $error = 'Tài khoản hoặc mật khẩu không chính xác. Vui lòng kiểm tra lại';
                                    }
                                }
                            ?>
                            <form class="row contact_form" action="" method="post" novalidate="novalidate">
                                <?php
                                    if (isset($error)) {
                                    ?>
                                        <p class="text-danger ml-3 mb-3"><?= $error ?></p>
                                    <?php
                                    }
                                ?>
                                <div class="col-md-12 form-group p_star exampleInputName1">
                                    <input type="text" class="form-control"  name="email" value="" required placeholder="Tài khoản (Email)">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="password" class="form-control" name="matkhau" value="" required placeholder="Mật khẩu">
                                </div>
                                <div class="col-md-12 form-group">
                                   
                                    <button type="submit" name="dangnhap" class="btn_3">
                                        đăng nhập
                                    </button>
                                    
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  
    <?php 
        include 'footer.php';
    ?>
    
    <script src="js/jquery-1.12.1.min.js"></script>
  
    <script src="js/popper.min.js"></script>
    
    <script src="js/bootstrap.min.js"></script>

    <script src="js/jquery.magnific-popup.js"></script>
   
    <script src="js/swiper.min.js"></script>
 
    <script src="js/masonry.pkgd.js"></script>
   
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
   
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/stellar.js"></script>
    <script src="js/price_rangs.js"></script>
   
    <script src="js/custom.js"></script>
</body>

</html>