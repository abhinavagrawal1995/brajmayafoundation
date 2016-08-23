<!DOCTYPE HTML>

<html>
	<head>
		<title>Braj Maya Foundation</title>
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
				<?php include 'header.php'; ?>

			<!-- Main -->
				<div id="main" class="wrapper style1">
					<div class="container">
						<header class="major">
							<h2>Contact Us</h2>
						</header>

						<!-- Content -->
							<section id="content">
								<h3>Postal Address:</h3>
								<p>“Brajmaya Foundation, 28 , Naresh Mitra Sarani, 2nd Floor, Kolkata 700025 c/o Trustee CA M M Agrawal ”</p>
								<section>
								<h3>Send us a mail</h3>
								<form method="POST" action="send.php">
									<div class="row uniform">
										<div class="6u 12u$(xsmall)">
											<input type="text" name="name" id="name" value="" placeholder="Name" />
										</div>
										<div class="6u 12u$(xsmall)">
											<input type="email" name="email" id="email" value="" placeholder="Email" />
										</div>
									</div>
									<div class="row uniform">
										<div class="6u 12u$(xsmall)">
											<input type="text" name="mobile" id="mobile" value="" placeholder="Contact Number" />
										</div>
										<div class="6u 12u$(xsmall)">
											<div class="select-wrapper">
												<select name="category" id="category" >
													<option value="NA">- Choose Course -</option>
													<option value="CA">CA</option>
													<option value="CS">CS</option>
													<option value="BCom(hons)">BCom(hons)</option>
													<option value="Law(Llb)">Law(Llb)</option>
													<option value="Economics(hons">Economics(hons)</option>
												</select>
											</div>
										</div>
									</div>
									<div class="row uniform">										
										<div class="12u$">
											<textarea name="message" id="message" placeholder="Enter your message" rows="6"></textarea>
										</div>
									</div>
									<div class="row uniform">	
										<div class="12u$">
											<ul class="actions">
												<li><input type="submit" value="Send Message" name="submitted" class="special" /></li>
												<li style="float :right;"><input type="reset" value="Reset" /></li>
											</ul>
										</div>
									</div>
								</form>
							</section>

					</div>
				</div>

			<!-- Footer -->
				<?php include 'footer.php'; ?>

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