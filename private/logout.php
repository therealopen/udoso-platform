<?php 
#starting session here
session_start();
#destroying session log_in and log_user..
if(session_destroy()){
	unset($_SESSION['log_in']);
	unset($_SESSION['log_user']);
#if unset session then back to login page	
header("location: ../?logout");

}
?>