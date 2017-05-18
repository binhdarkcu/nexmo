<?php
//logout.php
session_start(); 
session_destroy(); 
print_r(HOME_URL)
header("Location: index.php"; 
?>
