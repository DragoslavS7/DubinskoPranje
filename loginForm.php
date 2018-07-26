<?php if(file_exists('includes/ClassSession.php'))require 'includes/ClassSession.php';
$Session->start(); $Session->redirect('admin','parts/admin/admin_home.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Presenting Repertoir</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta name="Description" content="Dubinsko Pranje">

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="vendor/animate/animate.min.css" rel="stylesheet">
    <link href="vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="vendor/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="vendor/ionicons/css/ionicons.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link rel="stylesheet" href="vendor/css/style.css">

</head>

<body id="body">
<!--==========================
  Top Bar
============================-->
<section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
        <div class="contact-info float-left">
            <i class="fa fa-envelope-o"></i> <a href="mailto:stolestole990@gmail.com">stolestole990@gmail.com</a>
            <i class="fa fa-phone"></i> (+381) 64/ 068 - 80 - 40
        </div>
        <div class="social-links float-right">
            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
        </div>
    </div>
</section>
<!--==========================
  Login Section
============================-->

<section id="contact" class="wow fadeInUp">
    <div class="container">
        <div class="box mb-2">
            <div class="section-header text-center">
                <h2>Login Admin</h2>
            </div>
        </div>
    </div>
    <div id="google-map" data-latitude="45.267136" data-longitude="19.833549" style="display: none;"></div>
    <div id='loader'><div class="text-center"><img src="img/preloader.gif" class="load_hidden"></div></div>
    <div class="container">
        <div class="box">
            <div class="form">
                <div id="sendmessage">Succesful registration. Thank you!</div>
                <div id="errormessage"></div>
                <form action="" method="POST" role="form" class="contactForm">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="text" name="log_name" class="form-control" id="log_name" placeholder="Your Name" data-rule="minlen:4"/>
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group text-center col-md-12">
                            <input type="password" class="form-control" name="log_pass" id="log_pass" placeholder="Your password" data-rule="password"/>
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="text-center"><button type="submit" name="btn_login" id="btn_login">Login</button></div>
                </form>
            </div>
        </div>
    </div>

</section><!-- #contact -->

<!-- JavaScript Libraries -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/jquery/jquery-migrate.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/easing/easing.min.js"></script>
<script src="vendor/superfish/hoverIntent.js"></script>
<script src="vendor/superfish/superfish.min.js"></script>
<script src="vendor/wow/wow.min.js"></script>
<script src="vendor/owlcarousel/owl.carousel.min.js"></script>
<script src="vendor/magnific-popup/magnific-popup.min.js"></script>
<script src="vendor/sticky/sticky.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBpaEm090qRksmEKqPojjfA9ub5KOxXiP4"></script>

<!-- Template Main Javascript File -->
<script src="vendor/js/main.js"></script>
<script src="vendor/js/script.js"></script>

</body>
</html>