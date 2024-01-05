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
<br>
<br>
		<!-- Wrapper -->
			<div id="wrapper">

		<!-- Header -->
		<?php include_once("koka.php"); ?>


		<!-- Nav -->
		<?php include_once("meny.php"); ?>




		<!-- Main -->
			
				<div id="main">
					
						<br>
<br>
<div class="row">
														<div class="col-12 col-12-medium">

							
								<!-- Form -->
									<h3>Shto të dhënat e pasurive</h3>
									
									
									<form method="post" action="shtoPasurit.php">
										<div class="table-wrapper">
										<div class="row gtr-uniform">
											<div class="col-6 col-12-xsmall">
												<input type="text" name="Pasuria" id="Pasuria" value="" placeholder="Pasuria" />
												
												
												
											</div>
											<div class="col-6">
												<ul class="actions">
													<li><input type="submit" name="shtoPasurin" value="Shto" class="primary" /></li>
												
												</ul>
											</div>
										
										
									</form>
									<br>
									<form action="" method="post">  
	<br>
    <br>
	<table>
	<tr>
	<h3>Kërko të dhënat e Pasurive për modifikim ose fshirje</h3>
	</tr>
	<tr>

	<td>
	Shkruaj:
	</td>
	<td>
	<input type="text" name="term" placeholder="Pasurin" value="%"/>
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
		<td>Pasuria</td>
		
		<td>Modifiko</td>
		<td>Fshije</td>
	</tr> 
<?php
if (!empty($_REQUEST['term'])) {
$term = mysqli_real_escape_string
($conn,$_REQUEST['term']);     
$sql = mysqli_query($conn,
"SELECT * FROM pasurit 
WHERE ID_Pasuria LIKE '%".$term."%'"); 
while($row = mysqli_fetch_array($sql)) { 		
		echo "<tr>";
		echo "<td>".$row['Pasuria']."</td>";
		
		echo "<td><a href=\"perditso_pasurit.php?ID_Pasuria=$row[ID_Pasuria]\" class='button' class='button primary'>
Modifiko</a></td>";
echo "<td><a href=\"fshij_pasurit.php?ID_Pasuria=$row[ID_Pasuria]\" onClick=\"return confirm('A jeni te sigurt se deshironi te fshini Pasurin?')\" class='button' class='button primary'>Fshijë</a>
		</td></tr>";		
	}

}

?>
</div>
	</table>
	
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