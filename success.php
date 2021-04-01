<?php session_start(); ?>
<?php require_once 'emails.php'; ?>
<?php
if (isset($_GET['pyiDs'])) {
  if ($_GET['pyiDs']==$_SESSION['razorpay_payment_id']) {
    $razorpay_payment_id = $_GET['pyiDs'];
  }
}else if (isset($_GET['pyiDsone']) && isset($_GET['pyiDstwo'])) {
  if ($_GET['pyiDsone']==$_GET['pyiDstwo']) {
    $DI = $_GET['pyiDsone'];
  }
}else{
  header("location:appointment.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<!-- Begin Head -->
<head>
<title>Confirm Booking | Astrology</title>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta name="description" content="Astrology">
<meta name="keywords" content="Astrology, signs, gemstones, tarot, horoscopes, cards, numerology, Zodiac">
<meta name="author" content="hsoft" >
<meta name="MobileOptimized" content="320">
<!--Srart Style -->
<link rel="stylesheet" type="text/css" href="css/animate.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="css/fonts.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Favicon Link -->
<link rel="shortcut icon" type="image/png" href="images/header/favicon.png">
</head>
<body>

  

  <noscript></noscript>

<!-- Header Start --> 
<?php require_once('include/header.php'); ?>
<!-- Header End -->  
<!--Breadcrumb start-->
<div class="ast_pagetitle" style="background-image: url('images/banner/Home-banner.jpeg'); background-size: cover;">
<div class="ast_img_overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="page_title">
          <h2>Booking Successful</h2>
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <ul class="breadcrumb">
          <li><a href="index.php">home</a></li>
          <li>//</li>
          <li><a href="appointment.php">Go Back</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!--Breadcrumb end-->
<!--Journal Start-->
<div class="ast_journal_wrapper ast_toppadder70 ast_bottompadder70">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="ast_journal_info">
          <center>
           <div class="alert alert-success" style="height: 156px;" role="alert">
  <h2 class="alert-heading">Congratulations !</h2>
  <p style="font-family: coop black; font-weight: bold; color: #8C4005;">Aww yeah, your appointment is successfully scheduled for further details check your email.</p>
  <hr>
</div>
          </center>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Journal End-->
<!-- Download wrapper start-->
<div class="ast_download_wrapper">
  
</div>
<!-- Download wrapper End-->
<!-- Footer wrapper start-->
<div class="ast_footer_wrapper ast_toppadder70 ast_bottompadder20">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">
        <div class="ast_footer_info">
          <img src="images/header/logo.png" alt="Logo">
          <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
          <ul>
            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>          
            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>         
            <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>         
            <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>         
            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>         
          </ul>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="widget text-widget">
          <h4 class="widget-title">our newsletter</h4>
          <div class="ast_newsletter">
            <p>Making it look like readable English.The point of using Lorem Ipsum is that it has a more-or less normal distribution of letters.</p>
            <div class="ast_newsletter_box">
              <input type="text" placeholder="Email">
              <button type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>           
            </div>
          </div>        
        </div>      
      </div>
      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
        <div class="widget text-widget">
          <h4 class="widget-title">our services</h4>
          <div class="ast_servicelink">
            <ul>
              <li><a href="horoscopes.php">horoscopes</a></li>
              <li><a href="#">gemstones</a></li>
              <li><a href="numerology.php">numerology</a></li>
              <li><a href="#">tarot cards</a></li>
              <li><a href="#">Birth journal</a></li>
            </ul>
          </div>        
        </div>      
      </div>
      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
        <div class="widget text-widget">
          <h4 class="widget-title">quick links</h4>
          <div class="ast_sociallink">
            <ul>
              <li><a href="about.php">about</a></li>
              <li><a href="blog.php">blog</a></li>
              <li><a href="#">Astrologers</a></li>
              <li><a href="#">404 error</a></li>
              <li><a href="contact.php">contact</a></li>
            </ul>
          </div>        
        </div>      
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="widget text-widget">
          <h4 class="widget-title">get in touch</h4>
          <div class="ast_gettouch">
            <ul>
              <li><i class="fa fa-home" aria-hidden="true"></i> <p>2794, Hayhurst Lane Bloomfield Township, MI 48302</p></li>
              <li><i class="fa fa-at" aria-hidden="true"></i> <a href="#">support@website.com</a><a href="#">info@website.com</a></li>
              <li><i class="fa fa-phone" aria-hidden="true"></i> <p>+1800 326 3264</p><p>+1800 326 3234</p></li>
            </ul>
          </div>        
        </div>      
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="ast_copyright_wrapper">
          <p>&copy; Copyright 2018, All Rights Reserved, <a href="#">astrology</a></p>        
        </div>      
      </div>  
    </div>  
  </div>
</div>
<!-- Footer wrapper End-->

<script type="text/javascript" src="js/jquery.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
<script type="text/javascript" src="js/owl.carousel.js"></script>
<script type="text/javascript" src="js/jquery.countTo.js"></script>
<script type="text/javascript" src="js/jquery.appear.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<!--Main js file End-->
</body>
</html>