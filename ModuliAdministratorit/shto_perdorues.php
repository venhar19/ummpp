<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("kontrollo.php");	
?>


<!DOCTYPE HTML>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Moduli i Administratorit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<script>

	</head>
	<body class="is-preload">

		<!-- Header -->
		<?php include_once("koka.php"); ?>

		<!-- Nav -->
		<?php include_once("meny.php"); ?>
	
		<!-- Main -->
			
					
						<div class="row">
														<div class="col-12 col-12-medium">

								<!-- Buttons -->
									

								<!-- Form -->
									<h3>Shto të dhënat e përdoruesit</h3>
									
									<div class="table-wrapper">
									<form method="post" action="shto.php">
										<div class="table-wrapper">
										<div class="row gtr-uniform">
											<div class="col-12 col-12-medium">
												<input type="text" name="username" id="username" value="" placeholder="Përdoruesi" />
											
											<br>
												<input type="password" name="password" id="password" value="" placeholder="Fjalëkalimi" />
											<br>
												<input type="email" name="email" id="email" value="" placeholder="Email-i" />
											</div>
											<div class="col-12">
												<ul class="actions">
													<li><input type="submit" name="add" value="Shto" class="primary" /></li>
												
												</ul>
											</div>
										</div>
										
									</form>
									</div>
						</div>		
						</div>
				</div>
			</section>

		<!-- Footer -->
				
           	<?php include_once("fundi.php"); ?>


		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>