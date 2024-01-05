<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("kontrollo.php");	
?>
<?php
//including the database connection file
include_once("konfig.php");

//fetching data in descending order (lastest entry first)
$result = mysqli_query($conn,
"SELECT * FROM users ORDER BY uid DESC");
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
<div id="wrapper">
		<!-- Header -->
		<?php include_once("koka.php"); ?>


		<!-- Nav -->
		<?php include_once("meny.php"); ?>


<div id="main">
		
						<div class="row">


	<div class="table-wrapper">
	<form action="" method="post">  
	
	<table>
	<tr>
	<h3>Kërko të dhënat e përdoruesit për fshirje</h3>
	</tr>
	<tr>

	<td>
	Shkruaj:
	</td>
	<td>
	<input type="text" name="term" placeholder="Përdoruesin ose Email-in" value="%"/>
</td>
<td> <input type="submit" value="Kërko" /></td>
</tr>
</table> 
</div>
</div>
</form> 
	<div class="table-wrapper">
<table width='80%' border=0>
	<div class="table-wrapper">
	<tr bgcolor='#CCCCCC'>
		<td>Përdoruesi</td>
		<td>Fjalëkalimi</td>
		<td>Email</td>
		<td>Fshijë</td>
	</tr> 
<?php
if (!empty($_REQUEST['term'])) {
$term = mysqli_real_escape_string
($conn,$_REQUEST['term']);     
$sql = mysqli_query($conn,
"SELECT * FROM users 
WHERE perdoruesi LIKE '%".$term."%' 
OR  email LIKE '%".$term."%'"); 
while($row = mysqli_fetch_array($sql)) { 		
		echo "<tr>";
		echo "<td>".$row['perdoruesi']."</td>";
		echo "<td>".$row['fjalkalimi']."</td>";
		echo "<td>".$row['email']."</td>";	
		echo "<td><a href=\"fshij.php?uid=$row[uid]\" onClick=\"return confirm('A jeni te sigurt se deshironi te fshini perdoruesin?')\" class='button' class='button primary'>Fshijë</a>
		</td></tr>";		
	}

}

?>
</div>
	</table>


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