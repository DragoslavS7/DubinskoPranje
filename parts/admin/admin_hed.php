<?php if(file_exists('../../includes/ClassUser.php'))require '../../includes/ClassUser.php';
if(file_exists('../../includes/ClassSession.php'))require '../../includes/ClassSession.php';
if(file_exists('../../includes/ClassAdminsCreate.php'))require '../../includes/ClassAdminsCreate.php';
if(file_exists('../../includes/ClassPrice.php'))require '../../includes/ClassPrice.php';
if(file_exists('../../includes/ClassImage.php'))require '../../includes/ClassImage.php';
$Session->start(); $Session->redirectAdmin('admin','../../loginForm.php');
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
    <link href="../../img/favicon.png" rel="icon">
    <link href="../../img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../../vendor/animate/animate.min.css" rel="stylesheet">
    <link href="../../vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../../vendor/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../../vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="../../vendor/ionicons/css/ionicons.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link rel="stylesheet" href="../../vendor/css/style.css">

</head>

<body id="body">
<div id="google-map" data-latitude="45.267136" data-longitude="19.833549" style="display: none;"></div>

<header id="header">
    <div class="container">

        <div id="logo" class="pull-left">
            <h1><a href="#body" class="scrollto">Admin<span>Panel</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-active"><a href="admin_home.php"><i class="ion-ios-home"> Sve </i></a></li>
                <li><a href="admin_price.php"><i class="ion-ios-pulse"></i> Promena cena </a></li>
                <li><a href="admin_img.php"><i class="ion-images"></i> Promena slike</a></li>
                <li class="menu-has-children"><a href="#">Profil</a>
                    <ul>
                        <li><a href="#"><?php echo $user->profile('name'); ?></a></li>
                        <li><a href="#"><?php echo $user->profile('pass'); ?></a></li>
                        <li><a href="#"><?php echo $user->profile('create_at'); ?></a></li>
                        <li><a href="#" class="delete_session btn btn-outline-dark mb-2" id="delete_session">Izloguj se</a></li>
                        <li><a href="../../" class="btn btn-outline-dark">Korisnik strana</a></li>
                    </ul>
                </li>
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->