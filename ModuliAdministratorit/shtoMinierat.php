<html>

	<head>
		<title>Moduli i Administratorit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		

	</head>

<body>
<?php
//including the database connection file
include_once("konfig.php");

if(isset($_POST['shtoMinierat'])) {	
	$Miniera = $_POST['Miniera'];
	$VleraMineralit = $_POST['VleraMineralit'];
	
	$ID_Pasuria = $_POST['ID_Pasuria'];
	
	
	$fototedhanat =addslashes (file_get_contents($_FILES['userfile']['tmp_name']));
	$name = $_FILES['userfile']['name'];
	
	 $maxsize = 10000000; //set to approx 10 MB
	

	
	
	// checking empty fields
	if(empty($Miniera) || empty($VleraMineralit)) {
				
		if(empty($Miniera)) {
			echo "<font color='red'>Miniera field is empty.</font><br/>";
		}
		
		if(empty($VleraMineralit)) {
			echo "<font color='red'>Vlera Mineralit field is empty.</font><br/>";
		}
		
		
		
		//link to the previous pMbiemri
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($conn, "INSERT INTO minierat(Miniera,Vleramineralit, ID_Pasuria, image,emri) VALUES('$Miniera','$VleraMineralit', '$ID_Pasuria','$fototedhanat', '$name')");
		
		//display success message
			echo "<script>
         setTimeout(function(){
            window.location.href = 'menaxho_minierat.php';
         }, 5000);
      </script>";
		 echo"<p><b>   E dhena eshte duke u regjistruar ne sistem. Ju lutem pritni 5 sekonda. <b></p>";
		 
		//echo "<font color='green'>Data added successfully.";
		//echo "<br/><a href='ballina.php'>View Result</a>";
	}
}
?>

</body>
</html>
