<?php
//including the database connection file
include("konfig.php");

//getting uid of the data from url
$ID_Tadhanat = $_GET['ID_Tadhanat'];

//deleting the row from table
$result = mysqli_query($conn,"DELETE FROM tedhanat WHERE ID_Tadhanat=$ID_Tadhanat");

//redirecting to the display page (index.php in our case)
header("Location:fshije_tedhena.php");
?>

