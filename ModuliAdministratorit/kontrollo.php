<?php
/* Kontrollon sesionin */
include('konfig.php');
session_start();
$user_check=$_SESSION['username'];
$ses_sql = mysqli_query($conn,"SELECT perdoruesi FROM users WHERE perdoruesi='$user_check' ");
$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$login_user=$row['perdoruesi'];
if(!isset($user_check))

?>