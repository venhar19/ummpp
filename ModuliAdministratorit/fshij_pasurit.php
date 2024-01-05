<?php
//including the database connection file
include("konfig.php");

//getting uid of the data from url
$ID_Pasuria = $_GET['ID_Pasuria'];

//deleting the row from table
$result = mysqli_query($conn,"DELETE FROM pasurit WHERE ID_Pasuria=$ID_Pasuria");

//redirecting to the display page (index.php in our case)
header("Location:menaxho_pasurit.php");
?>

