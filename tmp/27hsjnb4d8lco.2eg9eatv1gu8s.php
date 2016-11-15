<!DOCTYPE html>
<html lang="en">

<head>	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>InteriorDesigning</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="<?php echo $ASSETS['site']; ?>/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo $ASSETS['site']; ?>/css/bootstrap.min.css">

	<!-- User Stylesheets -->
	<link rel="stylesheet" href="<?php echo $ASSETS['site']; ?>/css/mystyle.css">
	<link rel="stylesheet" href="<?php echo $ASSETS['site']; ?>/css/hover.css">
	<link rel="stylesheet" href="<?php echo $ASSETS['site']; ?>/css/feedback.css">
</head>
<body>
	<div class="headertop"></div>

	<!-- ========banner======== -->
	<div id="banner">
	  <div class="container">
	    <div class="col-md-6 col-xs-6 col-sm-6">
	      <img src="img/logo.jpg" class="img-responsive" alt="">
	    </div>

	    <div class="col-md-6 col-xs-6 col-sm-6 call text-right" id="bannertop">
	      <p>talk to real person <br><span id="zero">+44 1273 235354</span></p>
	    </div>
	  </div>
	</div>

	<!-- ==========navigation========= -->
	<nav id="nav_bar" class="navigation">
	  <div class="container">
	    <nav> <a id="resp-menu" class="responsive-menu" href="#"><i class="fa fa-reorder"></i> Menu</a>
	      <ul class="menu">
	        <li><a class="hvr-underline-from-left " href="<?php echo $BASE.$ALIASES['home_index']; ?>"> HOME</a></li>
	        <li><a class="hvr-underline-from-left" href="<?php echo $BASE.$ALIASES['home_about']; ?>">ABOUT US</a>
	              <ul class="sub-menu">
	                  <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Text1</a>
	                    <ul>
	                      <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Text</a></li>
	                      <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Text</a></li>
	                      <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Text</a></li>
	                      <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Text</a></li>
	                    </ul>
	                  </li>
	                  <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Text2</a>
	                    <ul>
	                      <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Text</a></li>
	                      <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Text</a></li>
	                    </ul>
	                  </li>
	                </ul>
	              </li> 
	              <li><a class="hvr-underline-from-left" href="<?php echo $BASE.$ALIASES['home_courses']; ?>">COURSES</a></li>
	              <li><a class="hvr-underline-from-left" href="<?php echo $BASE.$ALIASES['home_fees']; ?>">TUITION FEE</a></li>
	              <li><a class="hvr-underline-from-left" href="#">FREE</a></li>
	              <li><a class="hvr-underline-from-left" href="<?php echo $BASE.$ALIASES['home_contact']; ?>">CONTACT US</a></li>

	              <div class="nav navbar-nav navbar-right col-md-4 col-xs-12 col-sm-6 account text-right" id="bannertop">
	              <a href="<?php echo $BASE.$ALIASES['student_login']; ?>" class="btn btn-default">login / register</a>
	          </div>
	        </nav>
	        </div>  <!-- container -->
	      <div class="clearfix"></div>
	    </nav>