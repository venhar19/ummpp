<?php

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
	</head>
	<body class="is-preload">
	
	
	
	<!-- Wrapper -->
			<div id="wrapper">
			
			<!-- Header -->
         <?php include_once("koka.php"); ?>

		<!-- Nav -->
		<?php include_once("meny.php"); ?>

				<!-- Main -->
					<div id="main">

						<section id="first" class="main special">
								<header class="major">
									<h2>MENAXHIMI TE DHENAVE TE PERDORUESVE</h2>
								</header>
								<ul class="features">
									<li>
										<header>
											<a href="shto_perdorues.php"  class="icon solid major style1 fa-code"></a>
											
										</header>
										<h3>Shto Përdorues</h3>
										<p>Forma per shtimin e perdoruesve te rinje ne webaplikacion me te drejta te administratorit.</p>
									</li>
									<li>
										<header>
											<a href="modifiko_perdorues.php"  class="icon major style3 fa-copy"></a>
											
										</header>
										<h3>Modifiko Përdorues</h3>
										<p>Forma per modifikim te te dhenave te perdoruesve aktual ne webaplikacion me te drejta te administratorit.</p>
									</li>
									<li>
										<header>
											<a href="fshije_perdorues.php"  class="icon solid major style1 fa-code"></a>
											
										</header>
										<h3>Fshijë Përdorues</h3>
										<p>Forma per fshirje te perdoruesve aktual nga webaplikacion.</p>
									</li>
								</ul>
								
							</section>
							

					</div>

				
					
<?php include_once("fundi.php"); ?>
			</div>

		

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>