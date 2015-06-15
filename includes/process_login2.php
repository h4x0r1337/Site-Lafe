<?php


include_once 'db_connect.php';
include_once 'functions.php';

sec_session_start(); // Our custom secure way of starting a PHP session.

if (isset($_POST['p'])) {
    $password = $_POST['p']; // The hashed password.
    
    if (login($password, $mysqli) == true) {
        // Login success 
        header("Location: ../dashboard.php");
        exit();
    } else {
        // Login failed 
        header('Location: ../modal.lockme.php');
        exit();
    }
} else {
    // The correct POST variables were not sent to this page. 
    header('Location: ../unlock.php?unlock=true');
    exit();
}