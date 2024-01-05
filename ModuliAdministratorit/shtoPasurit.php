<html>
	<head>
		<title>Moduli Administratorit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
		
		
		 
	</head>
<body>
<?php

include_once("konfig.php");

if(isset($_POST['shtoPasurin'])) {	
	$Pasuria = $_POST['Pasuria'];
	
	
	
		
	
	if(empty($Pasuria)) {			
		if(empty($Pasuria)) {echo "<font color='red'>Fusha Pasuria eshte e zbrazet .</font><br/>";}
		

   

		
		//link to the previous programi
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
		//insert data to database	
		$result = mysqli_query($conn, "INSERT INTO pasurit(Pasuria) VALUES('$Pasuria')");
		//display success messprogrami
		//echo "<font color='green'>Data added successfully.";
		//echo "<br/><a href='ballina.php'>View Result</a>";
		echo "<script>
         setTimeout(function(){
            window.location.href = 'menaxho_pasurit.php';
         }, 5000);
      </script>";
		 echo"<p><b>   E dhena eshte duke u regjistruar ne sistem. Ju lutem pritni 5 sekonda. <b></p>";
	
	}
}
?>
</body>
</html>
