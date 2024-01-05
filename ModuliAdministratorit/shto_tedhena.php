<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("check.php");	
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

<div id="wrapper">
		<!-- Header -->
		<?php include_once("koka.php"); ?>


		<!-- Nav -->
			<!-- Nav -->
		<?php include_once("meny.php"); ?>




		<!-- Main -->
			
					
						<div class="row">
														<div class="col-6 col-12-medium">

								<!-- Buttons -->
									

								<!-- Form -->
									<h3>Shto të dhënat e studentit</h3>
									
									<div class="table-wrapper">
										<form enctype="multipart/form-data"  action="addData.php" method="post" name="form1">
											<table width="25%" border="0">
																			
												
												<tr> 
													<td>Titulli</td>
													<td><input type="text" name="Titulli"></td>
												</tr>
												<tr> 
													<td>Pershkrimi</td>
													<td><!--<input type="text" name="Pershkrimi">
																-->
				<textarea name="PershkrimiD" rows="10" cols="30"></textarea>
													</td>
												</tr>

								<tr> 
													<td>Emri file-it</td>
													<td><input type="text" name="File"></td>
												</tr>
												
											    <tr> 
												<td>Pamja e faqes</td>
													<td><input type="text" name="PageLayout"></td>
												</tr>
												<tr> 
													<td></td>
													<td><input type="submit" name="addData" value="Shto"></td>
												</tr>
												
											</table>
									</form>
																		</div>
						</div>		
						</div>
				</div>
			</section>

		<!-- Footer -->
		
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