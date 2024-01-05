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
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

		<?php include_once("koka.php"); ?>


		<!-- Nav -->
		<?php include_once("meny.php"); ?>

		<!-- Main -->
			<div id="main">
			
								<br>
<br>

						
				
					
						

								
									

								<!-- Form -->
									<h3>Shto të dhënat e minieres</h3>
									
									<div class="table-wrapper">
										<form enctype="multipart/form-data"  action="shtoMinierat.php" method="post" name="form1">
											<table>
												
												<tr>
												<select name="ID_Pasuria">
													<option selected="selected">Zgjedh Pasurin</option>
														<?php
														$res=mysqli_query($conn,"SELECT * FROM pasurit");
														while($row=$res->fetch_array())
														{
															?>
															<option value="<?php echo $row['ID_Pasuria']; ?>"><?php echo $row['Pasuria']; ?></option>
															<?php
														}
														?>
												</select><br />
												 
													<td>Miniera</td>
													<td><input type="text" name="Miniera"></td>
												</tr>
												<tr> 
													<td>Vlera Mineralit</td>
													<td><input type="text" name="VleraMineralit"></td>
												</tr>
												
												
												<tr>
													<td><input type="hidden" name="MAX_FILE_SIZE" value="10000000" /></td>
													<td><input name="userfile" type="file" /></td>
												</tr>
												

												<tr> 
													
													<td><input type="submit" name="shtoMinierat" value="Shto" class="primary" ></td>
												</tr>
												
											</table>
									</form>
																		</div>
																		
										<div class="row">
										<div class="col-12 col-12-medium">
												<form action="" method="post">  
										
										<table>
										<tr>
										<h3>Kërko të dhënat e minieres për menaxhim</h3>
										</tr>
										<tr>

										<td>
										Shkruaj:
										</td>
										<td>
										<input type="text" name="term" placeholder="Miniera" value="%"/>
									</td>
									<td> <input type="submit" value="Kërko" /></td>
									</tr>
									</table>
									<table width='100%' border=0>

										<tr bgcolor='#CCCCCC'>
											<td>Miniera</td>
											<td>Vlera Mineralit</td>
											<td>Pasuria</td>
											<td>Foto</td>
											<td>Emri file-it</td>
											<td>Modifiko</td>
											<td>Fshije</td>
										</tr> 

									<?php
										if (!empty($_REQUEST['term'])) {

										$term = mysqli_real_escape_string($conn,$_REQUEST['term']);     

										$sql = mysqli_query($conn,	
									"SELECT
										m.ID_Miniera,
									  m.Miniera,
									  m.Vleramineralit,
									  p.Pasuria,
									  m.image,
									  m.emri

									FROM 
									  minierat m 
									INNER JOIN
									  pasurit p ON p.ID_Pasuria = m.ID_Pasuria
									WHERE
									  Miniera LIKE '%".$term."%'"
										); 

										while($row = mysqli_fetch_array($sql)) { 		
												echo "<tr>";
												echo "<td>".$row['Miniera']."</td>";
												echo "<td>".$row['Vleramineralit']."</td>";
												echo "<td>".$row['Pasuria']."</td>";
												
												echo "<td><img src=data:image/jpeg;base64,".base64_encode($row['image'])." width='80'  height='100'/></td>";
												echo "<td>".$row['emri']."</td>";
													
												
												
												echo "<td><a href=\"perditso_minierat.php?ID_Miniera=$row[ID_Miniera]\" class='button' class='button primary'>Modifiko</a> </td>";	
                                                echo "<td><a href=\"fshij_minierat.php?ID_Miniera=$row[ID_Miniera]\" onClick=\"return confirm('A jeni te sigurt se deshironi te fshini te dhenen?')\" class='button' class='button primary'>Fshijë</a> </td>";			
														
											}

										}

										?>
										</table>
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