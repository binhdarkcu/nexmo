<?php
    //print_r($_POST['data'])
     session_start();
     $data = json_decode(stripslashes($_POST['data']));
     $userdata = get_object_vars($data);

     $_SESSION['userdata'] = $userdata;
     //print_r($_SESSION['user'])

?>
