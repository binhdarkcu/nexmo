<?php
//logout.php
session_start(); 
session_destroy(); 
$home = get_bloginfo('home');
header("Location: ".$home); 
?>
