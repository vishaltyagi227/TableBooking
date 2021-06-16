<?php
    session_start();  
    if(!isset($_SESSION["username"]))
    {
        header("location:Home.php");
        exit();
    }
            
    unset($_SESSION['reserveverify']);
    unset($_SESSION['username']);     
    session_destroy();
    header("location:Home.php");   

?>