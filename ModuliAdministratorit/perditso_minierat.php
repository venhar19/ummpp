<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("kontrollo.php");	
?>

<?php
// including the database connection file
include_once("konfig.php");

if(isset($_POST['update_minierat']))
{	
	$ID_Miniera = $_POST['ID_Miniera'];
	$Miniera=$_POST['Miniera'];
	$Vleramineralit=$_POST['Vleramineralit'];
	$ID_Pasuria = $_POST['ID_Pasuria'];
	
	$imgData =addslashes (file_get_contents($_FILES['userfile']['tmp_name']));
	$emri = $_FILES['userfile']['emri'];
	$maxsize = 10000000; //set to approx 10 MB
			
		
	
	
	// checking empty fields
	if(empty($Miniera) || empty($Vleramineralit)|| empty($ID_Pasuria)) {	
			
		if(empty($Miniera)) {
			echo "<font color='red'>Miniera field is empty.</font><br/>";
		}
		if(empty($Vleramineralit)) {
			echo "<font color='red'>Vleramineralit field is empty.</font><br/>";
		}
		if(empty($ID_Pasuria)) {
			echo "<font color='red'>Mbiemri field is empty.</font><br/>";
		}
	
	} else {	
		//updating the table
		$result = mysqli_query($conn,"UPDATE minierat SET Miniera='$Miniera',Vleramineralit='$Vleramineralit', ID_Pasuria='$ID_Pasuria', image='$imgData', emri='$emri' WHERE ID_Miniera=$ID_Miniera");
		
		//redirectig to the display message. In our case, it is ballina.php
		header("Location: menaxho_minierat.php");
	}
}
?>
<?php
//getting ID_Studenti from url
$ID_Miniera = $_GET['ID_Miniera'];

//selecting data associated with this particular ID_Studenti
$result = mysqli_query($conn,"SELECT * FROM minierat WHERE ID_Miniera=$ID_Miniera");

while($res = mysqli_fetch_array($result))
{
	$Miniera = $res['Miniera'];
	$Vleramineralit = $res['Vleramineralit'];
	$ID_Pasuria = $res['ID_Pasuria'];
	
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
				
					
						<div class="align-center">

	<form enctype="multipart/form-data"  name="form1" method="post" action="perditso_minierat.php">
		<table border="0">
		<tr>
			<select name="ID_Pasuria">
				<option selected="selected" required>Zgjedh Pasurin</option>
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
			</tr>
			<tr> 
				<td>Miniera</td>
				<td><input type="text" name="Miniera" value='<?php echo $Miniera;?>' required /></td>
			</tr>
			<tr> 
				<td>Vlera Mineralit</td>
				<td><input type="text" name="Vleramineralit" value='<?php echo $Vleramineralit;?>' required /></td>
			</tr>
			<tr>
			<td><input type="hidden" name="MAX_FILE_SIZE" value="10000000" /></td>
			<td><input name="userfile" type="file" /></td>
			</tr>
			
			
			<tr>
				<td><input type="hidden" name="ID_Miniera" value='<?php echo $_GET['ID_Miniera'];?>' /></td>
				<td><input type="submit" name="update_minierat" value="Modifiko"></td>
			</tr>
		</table>
	</form>
</body>
</html>
