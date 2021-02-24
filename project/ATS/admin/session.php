<?php
include "../include/connection.php";
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 60)) {
    // last request was more than 30 minutes ago
    session_unset();     // unset $_SESSION variable for the run-time 
    session_destroy();   // destroy session data in storage
	//echo "sesson expiered";
}
$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp

if(isset($_SESSION['UName']))
{
	//code
	
}
else
{
	echo "<h1>Please Login First.</h1>";
}
?>