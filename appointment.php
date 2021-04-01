
<!DOCTYPE html>
<html lang="en">
<!-- Begin Head -->
<head>
<title>Appointment | Astrology</title>
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
					<h2>appointment</h2>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12">
				<ul class="breadcrumb">
					<li><a href="index.php">home</a></li>
					<li>//</li>
					<li><a href="appointment.php">appointment</a></li>
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
					<h3>make your appointment to discuss any problem.</h3>
					<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
					<p>It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="ast_journal_box_wrapper">
					<form method="POST" action="processbooking.php" onsubmit="return formVal()">
						<h3>appointment form</h3>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<label>name <span style="color: red; font-size: 12px;" id="msgname">*</span></label>
							<input id="apname" name="apname" type="text" placeholder="Name">
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<label>email <span style="color: red; font-size: 12px;" id="msgemail">*</span></label>
							<input type="text" id="apemail" name="apemail" placeholder="Email">
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<label>Contact no <span style="color: red; font-size: 12px;" id="msgcontact">*</span></label>
							<input type="text" id="apcontact" name="apcontact" placeholder="Mobile Number">
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<label>gender <span style="color: red; font-size: 12px;" id="msggender">*</span></label>
							<select class="form-control" id="apgender" name="apgender">
								<option value="male">Male</option>
								<option value="female">Female</option>
							</select>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<label>Time of Birth <span style="color: red; font-size: 12px;" id="msgtimebirth">*</span></label>
							<input type="time" id="aptime" name="aptime" class="form-control">
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<label>Date of Birth <span style="color: red; font-size: 12px;" id="msgdatebirth">*</span></label>
							<input type="date" id="apdate" name="apdate" class="form-control">
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<label>Place of Birth <span style="color: red; font-size: 12px;" id="msgplacebirth">*</span></label>
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<input type="text" id="apcity" name="apcity" placeholder="City">
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<input type="text" id="apstate" name="apstate" placeholder="State">
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<input type="text" id="apcountry" name="apcountry" placeholder="Country">
								</div>
							</div>
						</div>

						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<label>Appointment Time <span style="color: red; font-size: 12px;" id="msgaptime">*</span></label>
							<input type="time" id="aptime2" name="aptime2" class="form-control">
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<label>Appointment Date <span style="color: red; font-size: 12px;" id="msgapdate">*</span></label>
							<input type="date" id="apdate2" name="apdate2" class="form-control">
						</div>


						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<label>Select Package <span id="msgpackage" style="color: red; font-size: 12px;">*</span></label>
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<select class="form-control" id="appackage" name="appackage">
										<option value="">--Select Package--</option>
										<option value="505">Free Astrology Consultation <b>Free</b></option>
										<option value="101">Vedic Astrology Consultation <b>$199</b></option>
										<option value="102">Vedic Vastu Consultation <b>$399</b></option>
										<option value="103">Match Making <b>$199</b></option>
									</select>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<button type="submit" name="submitbooknow" onclick="formVal()" class="ast_btn pull-right">Book Now</button>
						</div>
					</form>
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
<!--Main js file Style--> 
<script type="text/javascript">
	function formVal(){
		var status = false;

		var name,email,contact,gender,timebirth,datebirth,city,state,country,packag,time2,date2=null;
		name = document.getElementById('apname').value;
		email = document.getElementById('apemail').value;
		contact = document.getElementById('apcontact').value;
		gender = document.getElementById('apgender').value;
		timebirth = document.getElementById('aptime').value;
		datebirth = document.getElementById('apdate').value;
		city = document.getElementById('apcity').value;
		state = document.getElementById('apstate').value;
		country = document.getElementById('apcountry').value;
		packag = document.getElementById('appackage').value;

		time2 = document.getElementById('aptime2').value;
		date2 = document.getElementById('apdate2').value;

		if (name=="" || name.length<3) {
			status=false;
			document.getElementById('msgname').innerHTML="Please Enter Correct Name !";
		}else{
			status=true;
			document.getElementById('msgname').innerHTML="<i class='fa fa-check text-success'></i>";
		}

		if (email=="") {
			status=false;
			document.getElementById('msgemail').innerHTML="Please Enter Correct Email !";
		}else{
			status=true;
			document.getElementById('msgemail').innerHTML="<i class='fa fa-check text-success'></i>";
		}

		if (contact=="") {
			status=false;
			document.getElementById('msgcontact').innerHTML="Please Enter Correct Contact No !";
		}else{
			status=true;
			document.getElementById('msgcontact').innerHTML="<i class='fa fa-check text-success'></i>";
		}

		if (timebirth=="") {
			status=false;
			document.getElementById('msgtimebirth').innerHTML="Please Select Birth Time !";
		}else{
			status=true;
			document.getElementById('msgtimebirth').innerHTML="<i class='fa fa-check text-success'></i>";
		}

		if (datebirth=="") {
			status=false;
			document.getElementById('msgdatebirth').innerHTML="Please Select Birth Date !";
		}else{
			status=true;
			document.getElementById('msgdatebirth').innerHTML="<i class='fa fa-check text-success'></i>";
		}

		if (gender=="") {
			status=false;
			document.getElementById('msggender').innerHTML="Field Required !";
		}else{
			status=true;
			document.getElementById('msggender').innerHTML="<i class='fa fa-check text-success'></i>";
		}

		if (city==""|| state=="" || country=="") {
			status=false;
			document.getElementById('msgplacebirth').innerHTML="All Fields are Required !";
		}else{
			status=true;
			document.getElementById('msgplacebirth').innerHTML="<i class='fa fa-check text-success'></i>";
		}

		if (packag=="") {
			status=false;
			document.getElementById('msgpackage').innerHTML="Kindly Select Package !";
		}else{
			status=true;
			document.getElementById('msgpackage').innerHTML="<i class='fa fa-check text-success'></i>";
		}

		if (date2=="") {
			status=false;
			document.getElementById('msgapdate').innerHTML="Kindly Select Appointment Date !";
		}else{
			status=true;
			document.getElementById('msgapdate').innerHTML="<i class='fa fa-check text-success'></i>";
		}

		if (time2=="") {
			status=false;
			document.getElementById('msgaptime').innerHTML="Kindly Select Appointment Time !";
		}else{
			status=true;
			document.getElementById('msgaptime').innerHTML="<i class='fa fa-check text-success'></i>";
		}

		if (status==true && (date2!="" && time2!="")) {
			status=true;
		}else{
			status=false;
		}

		return status;
	}
</script>
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