<?php session_start();

    unset($_SESSION['logged_status']);
    $_SESSION['success']    =   'Logout successful';
    header('Location : login.php');
    exit;


?>