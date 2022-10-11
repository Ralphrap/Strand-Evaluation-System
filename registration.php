<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Caloocan High School Strand Evaluation System</title>
	<link rel="stylesheet" type="text/css" href="css/landingpage.css">
	<!--PAGE TAB ICONS-->
	<link href="images/chslogo.png" rel="icon">
	<!--BOOTSTRAP ICON-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
	<!--FONTS-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
	<!--SWEETALERT 2 AND BOOTSTRAP THEME--->
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<section class="sub-header">
	<nav>
		<a href="index.php"><img src="images/chslogo.png"></a>
		<div class="nav-links" id="navLinks">
			<i class="fa-solid fa-xmark" onclick="hideMenu()"></i>
			<ul>
				<li><a href="index.php">HOME</a></li>
				<li><a href="about.php">ABOUT</a></li>
				<li><a href="">COURSE</a></li>
				<li><a href="">BLOG</a></li>
				<li><a href="">CONTACT</a></li>
			</ul>
		</div>
		<i class="fa-solid fa-bars" onclick="showMenu()"></i>
	</nav>
	<h1>Registration</h1>

</section>

<!--REGISTRATION FORM-->

<section class="registration">
		<div class="registration-col">
			<form class="registrationForm" id="registrationForm" autocomplete="off" action="controllers/registration.php" method="POST">
				<div class="form-control">
					<label for="firstName">First name</label>
					<input type="text" id="firstName" name="firstName">
				</div>
				<div class="form-control">
					<label for="middleName">Middle name</label>
					<input type="text" id="middleName" name="middleName">
				</div>
				<div class="form-control">
					<label for="lastName">Last name</label>
					<input type="text" id="lastName" name="lastName">
				</div>
				<div class="form-control">
					<label for="mobileNum">Mobile number</label>
					<input type="text" id="mobileNum" name="mobileNum">
				</div>
				<div class="form-control">
					<label for="emailAdd">Email Address</label>
					<input type="text" id="emailAdd" name="emailAdd">
				</div>
				<div class="form-control">
					<label for="password">Password</label>
					<input type="password" id="password" name="password">
				</div>
				<div class="form-control">
					<label for="confirmPassword">Confirm Password</label>
					<input type="password" id="confirmPassword" name="confirmPassword">
				</div>
				<button type="submit" class="hero-btn green-btn-solid float-left">Register Now</button>
				<button type="button" class="hero-btn green-btn-solid float-right" id="cancelBtn">Cancel</button>
			</form>

			<label class="form-control-label">Already have an account? <a href="login.php">Log In here</a></label>
		</div>
</section>

<!--FONTAWESOME 6-->
<script src="https://kit.fontawesome.com/fe40695223.js" crossorigin="anonymous"></script>

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4 class="footer-contact-h4">Useful Links</h4>
            <ul>
              <li><i class="fa-solid fa-chevron-right"></i> <a href="/CHS_SES/">Home</a></li>
              <li><i class="fa-solid fa-chevron-right"></i> <a href="about.php">About us</a></li>
              <li><i class="fa-solid fa-chevron-right"></i> <a href="#">Link Here</a></li>
              <li><i class="fa-solid fa-chevron-right"></i> <a href="#">Link Here</a></li>
              <li><i class="fa-solid fa-chevron-right"></i> <a href="#">Link Here</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4 class="footer-contact-h4">Our Services</h4>
            <ul>
              <li><i class="fa-solid fa-chevron-right"></i> <a href="#">Link Here</a></li>
              <li><i class="fa-solid fa-chevron-right"></i> <a href="#">Link Here</a></li>
              <li><i class="fa-solid fa-chevron-right"></i> <a href="#">Link Here</a></li>
              <li><i class="fa-solid fa-chevron-right"></i> <a href="#">Link Here</a></li>
              <li><i class="fa-solid fa-chevron-right"></i> <a href="#">Link Here</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4 class="footer-contact-h4">Contact Us</h4>
            <p class="footer-contact-p">
              10th Avenue,<br>
              West Grace Park, 1400 Caloocan,<br>
              Philippines <br><br>
              <strong>Phone:</strong> +123456789<br>
              <strong>Email:</strong> email@gmail.com<br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h4 class="footer-contact-h4">About Us</h4>
            <p class="footer-contact-p">Caloocan High School (CHS) is a public junior to senior high learning facility managed and regulated by the Department of Education.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="fa-brands fa-twitter"></i></a>
              <a href="https://www.facebook.com/CalHighSchool" class="facebook"><i class="fa-brands fa-facebook-f"></i></a>
              <a href="#" class="instagram"><i class="fa-brands fa-instagram"></i></a>
              <a href="#" class="linkedin"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Caloocan Highschool</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Made with love &#10084;&#65039; <a href="#">Freaknaruto</a>
      </div>
    </div>
  </footer><!-- End Footer -->
  
<script src="jquery/jquery.min.js"></script>
<!-- jquery-validation -->
<script src="jquery-validation/jquery.validate.min.js"></script>
<script src="jquery-validation/additional-methods.min.js"></script>
<!--JS Functions-->
<script src="js/registration.js"></script>
</body>
</html>
