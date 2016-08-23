<!DOCTYPE HTML>

<html>
	<head>
		<title>BrajMaya Foundation</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="index.html">BrajMaya Foundation</a></h1>
					<nav id="nav">
						<ul>
							<li><a href="about.html">About Us</a></li>
							<li><a href="mission.html">Our Mission</a></li>
							<li><a href="contact.html">Contact Us</a></li>
							<li><a href="result.html">Result</a></li>
							<li><a href="register.html">Register</a></li>
							<li><a href="https://www.facebook.com/brajmayafoundation" class="button special">FB Page</a></li>
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<div id="main" class="wrapper style1">
					<div class="container">
						

						<!-- Content -->
							<section id="content">
								<?php
if (isset($_REQUEST['submitted'])) {
// Initialize error array.
  $errors = array();
  
  // Check for a proper  name
  if (!empty($_REQUEST['name'])) {
  $name = $_REQUEST['name'];
  $pattern = "/^[a-zA-Z0-9\_]{2,20}/";// This is a regular expression that checks if the name is valid characters
  if (preg_match($pattern,$name)){ $name = $_REQUEST['name'];}
  else{ $errors[] = 'Invalid name';}
  } else {$errors[] = 'No name provided';}

// Check for a proper email
  if (!empty($_REQUEST['email'])) {
  $email = $_REQUEST['email'];
  $pattern = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/";
// This is a regular expression that checks if the name is valid characters
  if (preg_match($pattern,$email)){ $email = $_REQUEST['email'];}
  else{ $errors[] = 'Invalid email ID';}
  } else {$errors[] = 'No email ID provided';}
  
  // Check for a proper contact
  if (!empty($_REQUEST['mobile'])) {
  $mobile = $_REQUEST['mobile'];
  } else {$errors[] = 'No Contact Number provided';}
  

// Check for a proper message
  if (!empty($_REQUEST['message'])) {
  $message = $_REQUEST['message'];
  } else {$errors[] = 'No message body';}


}
$email=   $_POST['email'];
$message= $_POST['message'];  
$mobile= $_POST['mobile'];
$name= $_POST['name'];
$category= $_POST['category'];

$to = "csa.manoj@gmail.com";
$to1 = "brajmayafoundation@gmail.com";
$from = "From: BrajMaya Foundation (Contact Us)"; 


if (empty($errors)) {    
  $mail = "Message from " . $name . " \nEmail: " . $email . " \ncategory: " . $category . " \nContact: " . $mobile . " \nMessage: " . $message ;
  mail($to,$subject,$mail,$from);
  mail($to1,$subject,$mail,$from);
  }

if (isset($_REQUEST['submitted'])) {
  // Print any error messages. 
  if (!empty($errors)) { 
  echo '<hr /><h3>The following errors occurred:</h3><ul>'; 
  // Print each error. 
  foreach ($errors as $msg) { echo '<li>'. $msg . '</li>';}
  echo '</ul><h3><a href="contact.html">Back</a></h3><hr />';}
  else{header( 'Location: ../sent.html' ) ;
  }
  }

/*header( 'Location: ../index.php' ) ;*/
?>
							</section>

					</div>
				</div>

			<!-- Footer -->
				<footer id="footer" style="padding:2.5em 0">
					<ul class="copyright" style="color:white">
						&copy; <a href="index.html" style="color:white">BrajMaya Foundation</a>. All rights reserved.<br/><br/><br/>Website by <a href="http://abhinavagrawal.in" style="color:white">Abhinav Agrawal</a>. abi123
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>