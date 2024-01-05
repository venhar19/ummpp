<?php
/* Index.php faqja qe permban formen e loginit) */
	include('kyqu.php'); // Include Login Script
	if ((isset($_SESSION['username']) != '')) 
	{
		header('Location: ballina.php');
	}	
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
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<!-- Header -->
		<?php include_once("kokaadm.php"); ?>

					<div id="main">
					
					<section id="content" class="main">
					<div class="col-6 col-12-medium">
							
								<!-- Blockquote -->
									<h3>Udhëzim</h3>
									<blockquote>Për t`u kycur në webaplikacion ju lutem kontaktone administratorin për krijimin e llogarisë</blockquote>
							</div>
					<section>
										<h3>Kycja ne webaplikacion</h3>
										<form method="post" action="#">
											<div class="row gtr-uniform">
												<div class="col-6 col-12-xsmall">
													<input type="text" name="username" id="username" value="" placeholder="Perdoruesi" />
												</div>
												<div class="col-6 col-12-xsmall">
													<input type="password" name="password" id="password" value="" placeholder="Fjalkalimi" />
													<br>
													<br>
													
													<ul class="actions">
											<li><input type="submit" name="submit" value="Kycu" class="primary" /></li>
											
										</ul>
												</div>
												
									</section>
					
					
					</section>
</div>
				
					 	

			</div>
			
			
			<?php include_once("fundi.php"); ?>
			
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>