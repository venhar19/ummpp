<?php
//including the database connection file
include("konfig.php");

//getting uid of the data from url
$ID_Miniera = $_GET['ID_Miniera'];

//deleting the row from table
$result = mysqli_query($conn,"DELETE FROM minierat WHERE ID_Miniera=$ID_Miniera");

//redirecting to the display page (index.php in our case)
header("Location:menaxho_minierat.php");
?>

