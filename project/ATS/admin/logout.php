<?php
session_start();
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy();
//Redirecting to homepage
header("location: ../index.php");
?>