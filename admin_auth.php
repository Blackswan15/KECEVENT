<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

if(isset($_POST['username']) && isset($_POST['password'])) {

    $correct_username = "admin";
    $correct_password = "password123";

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if($username === $correct_username && $password === $correct_password) {

        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_username'] = $username;
        header("Location: eventregister.php");
        exit;
    } else {

        header("Location: admin.php?error=1");
        exit;
    }
} else {

    header("Location: admin.php");
    exit;
}
?>