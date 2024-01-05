<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("kontrollo.php");	
?>
<?php
// including the database connection file
include_once("konfig.php");

if(isset($_POST['update']))
{	
	$uid = $_POST['uid'];
	
	$Perdoruesi=$_POST['username'];
	$Fjalkalimi=$_POST['password'];
	$email=$_POST['email'];	
	
	// checking empty fields
	if(empty($Perdoruesi) || empty($Fjalkalimi) || empty($email)) {	
			
		if(empty($Perdoruesi)) {
			echo "<font color='red'>username field is empty.</font><br/>";
		}
		
		if(empty($Fjalkalimi)) {
			echo "<font color='red'>password field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}		
	} else {	
		//updating the table
		$result = mysqli_query($conn,"UPDATE users SET perdoruesi='$Perdoruesi',fjalkalimi='$Fjalkalimi',email='$email' WHERE uid=$uid");
		
		//redirectig to the display ppassword. In our case, it is admin.php
		header("Location: modifiko_perdorues.php");
	}
}
?>
<?php
//getting uid from url
$uid = $_GET['uid'];

//selecting data associated with this particular uid
$result = mysqli_query($conn,"SELECT * FROM users WHERE uid=$uid");

while($res = mysqli_fetch_array($result))
{
	$username = $res['perdoruesi'];
	$password = $res['fjalkalimi'];
	$email = $res['email'];
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

				<!-- Main -->
					<div id="main">
					
						<div class="row">

<div class="col-12 col-12-medium">
	<form name="form1" method="post" action="perditso.php">
	
	<h3>Modifiko të dhënat e përdoruesit</h3>

			
				Përdoruesi
				<input type="text" name="username" value='<?php echo $username;?>' />
				<br>
				Fjalëkalimi
				<input type="text" name="password" value='<?php echo $password;?>' />
				<br>
				Email-i
				<input type="text" name="email" value='<?php echo $email;?>' />
				<br >
				<input type="hidden" name="uid" value='<?php echo $_GET['uid'];?>' />
				<input type="submit" name="update" value="Modifiko">
		
		
	</form>
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