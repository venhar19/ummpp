<!DOCTYPE HTML>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php include_once("konfig.php"); ?>
<html>
	<head>
		<title>Moduli i Perdoruesit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
		<div id="wrapper">	

				<!-- Header -->
					<header id="header" class="alt">
						<span class="logo"><img src="images/miniera.png" alt="" /></span>
						<h1>Uebaplikacioni per Menaxhimin e Minierave sipas Pasurive (UMMP)</h1>
					</header>
<div id="main">
				<!-- Nav -->
					<?php include_once("meny.php"); ?>

<br>
<br>
<br>
<br>


				<!-- Main -->
					
					

						<!-- Introduction -->
							<section  class="align-center">
								<ul class="features">
	<?php
$result = mysqli_query($conn, "SELECT p.Pasuria, m.Miniera, m.Vleramineralit, m.image, m.emri 
                                FROM minierat m
                                LEFT OUTER JOIN pasurit p ON m.ID_Pasuria = p.ID_Pasuria
                                GROUP BY p.Pasuria, m.Miniera, m.Vleramineralit, m.image, m.emri
                                ORDER BY p.ID_Pasuria, m.ID_Miniera DESC LIMIT 3");

while ($row = mysqli_fetch_assoc($result)) {
    // Extract variables within the loop
    extract($row);

   

   // Display the content for each row
   
   echo '<li>';
    echo '<section>';
    echo '<div class="content">';
    echo '<div class="author">';
  echo '<div class="row aln-center">';
echo "<img src='data:image/jpeg;base64," . base64_encode($image) . "' width='200' height='200' style='object-fit: cover;' />";
echo '</div>';
    echo '<p class="credit"><strong>' . $Miniera .  '</strong><br></p>';
	echo '<p class="credit"><strong>' . $Vleramineralit .  '</strong><br></p>';
    echo '</div>';
    echo '<b>' . $Pasuria . '</b>';
    echo '</div>';
    echo '</section>';
	echo '</li>';
}

// Free the result set
mysqli_free_result($result);
?>
						

						<!-- First Section -->
							

					</ul>
					
</div>
				<!-- Footer -->
					<?php include_once("fundi.php"); ?>

			

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