<?php
//logout.php
session_start(); 
session_destroy(); 
$home = HoME_URL;
header("Location: ".$home); 
?>
