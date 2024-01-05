<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("kontrollo.php");	
?>
<?php
// including the database connection file
include_once("konfig.php");

if(isset($_POST['update_tedhanat']))
{	
	$ID_Tedhanat = $_POST['ID_Tedhanat'];
	
	$Titulli=$_POST['Titulli'];
	$Pershkrimi=$_POST['Pershkrimi'];
	$File=$_POST['Dosje'];	
		$Pamja=$_POST['Pamja'];	
	// checking empty fields
	if(empty($Titulli) || empty($Pershkrimi) || empty($Dosje) || empty($Pamja)){	
			
		if(empty($Titulli)) {
			echo "<font color='red'>Titulli field is empty.</font><br/>";
		}
		
		if(empty($Pershkrimi)) {
			echo "<font color='red'>Pershkrimi field is empty.</font><br/>";
		}
		
		if(empty($Dosje)) {
			echo "<font color='red'>Dosje field is empty.</font><br/>";
		}	
	if(empty($Pamja)) {
			echo "<font color='red'>Pamja field is empty.</font><br/>";
		}		
	} else {	
		//updating the table
		$result = mysqli_query($conn,"UPDATE tedhenat SET Titulli='$Titulli',Pershkrimi='$Pershkrimi',Dosje='images/$Dosje',Pamja='$Pamja' WHERE ID_Tedhanat=$ID_Tedhanat");
		
		//redirectig to the display pProgrami. In our case, it is admin.php
		header("Location: modifiko_tedhena.php");
	}
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
         <?php include_once("koka.php"); ?>

		<!-- Nav -->
		<?php include_once("meny.php"); ?>


			<div id="main">
			
								<br>
<br>
					
						<div class="row">

														<div class="col-12 col-12-medium">

	<form method="post" action="modifiko_tedhana.php">
	
	<h3>Modifiko të dhënat</h3>

			
				Titulli
				<input type="text" name="Titulli" value='<?php echo $Titulli;?>'   required />
				<br>
				Pershkrimi
				<!--<input type="text" name="Pershkrimi" value='<?php /*echo $Pershkrimi;*/?>'   required />-->
								<textarea name="Pershkrimi"  rows="10" cols="30"><?php echo $Pershkrimi;?></textarea>
				<br>
				Emri i Dosjes
				<input type="text" name="Dosje" value='<?php echo $Dosje;?>'   required />
				<br >
				Pamja e faqes
				<input type="text" name="Pamja" value='<?php echo $Pamja;?>'   required />
				<br >
				<input type="hidden" name="ID_Tedhanat" value='<?php echo $_GET['ID_Tedhanat'];?>' />
				<input type="submit" name="update_data" value="Modifiko">
		
		
	</form>

						</div>
						</div>
				</div>
			</section>
			</div>

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