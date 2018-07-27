<!-- Include all files for customer pages-->
<?php require_once 'header.php'; ?>

<?php
if(file_exists('includes/ClassUser.php'))require 'includes/ClassUser.php';
if(file_exists('includes/ClassAdminsCreate.php'))require 'includes/ClassAdminsCreate.php';
if(file_exists('includes/ClassPrice.php'))require 'includes/ClassPrice.php';
if(file_exists('includes/ClassContactForm.php'))require 'includes/ClassContactForm.php';
if(file_exists('includes/ClassImage.php'))require 'includes/ClassImage.php';
if(file_exists('includes/ClassPagination.php'))require 'includes/ClassPagination.php';
?>

<?php include 'parts/slider.php'; ?>
<?php include 'parts/aboutAs.php'; ?>
<?php include 'parts/services.php'; ?>
<?php include 'parts/galery.php'; ?>
<?php include 'parts/priceList.php'; ?>
<?php include 'parts/contact.php'; ?>

<?php require_once 'footer.php'; ?>

