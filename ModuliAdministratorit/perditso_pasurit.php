<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("kontrollo.php");	
?>
<?php
// including the database connection file
include_once("konfig.php");

if(isset($_POST['update_pasurit']))
{	
	$ID_Pasuria = $_POST['ID_Pasuria'];
	
	$Pasuria=$_POST['Pasuria'];
	
	
	
	
	
	// checking empty fields
	if(empty($Pasuria) ) {	
			
		if(empty($Pasuria)) {
			echo "<font color='red'>Pasuria field is empty.</font><br/>";
		}
		
		
	
	} else {	
		//updating the table
		$result = mysqli_query($conn,"UPDATE pasurit SET Pasuria='$Pasuria' WHERE ID_Pasuria=$ID_Pasuria");
		
		//redirectig to the display pProgrami. In our case, it is admin.php
		header("Location: menaxho_pasurit.php");
	}
}
?>
<?php

$ID_Pasuria = $_GET['ID_Pasuria'];


$result = mysqli_query($conn,"SELECT * FROM pasurit WHERE ID_Pasuria=$ID_Pasuria");

while($res = mysqli_fetch_array($result))
{
	$Pasuria = $res['Pasuria'];
	
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

		<!-- Header -->
			<div id="wrapper">
			
			<!-- Header -->
         <?php include_once("koka.php"); ?>

		<!-- Nav -->
		<?php include_once("meny.php"); ?>

				<!-- Main -->
					<div id="main">
					
						<div class="row">


	<form Pasuria="form1" method="post" action="perditso_pasurit.php">
	
	<h3>Modifiko të dhënat e Pasuris</h3>

			
				Pasuria
				<input type="text" name="Pasuria" value='<?php echo $Pasuria;?>'   required />
				<br>
				
		
				<input type="hidden" name="ID_Pasuria" value='<?php echo $_GET['ID_Pasuria'];?>' />
				<input type="submit" name="update_pasurit" value="Modifiko">
		
		
	</form>

						</div>
				</div>
			</section>

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