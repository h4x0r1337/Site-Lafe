<?php


include_once 'functions.php';

sec_session_start();

// Unset all session values 
$_SESSION = array();

// get session parameters 
$params = session_get_cookie_params();

// Destroy session 

header("Location: ../modal.lockme.php");
exit();
