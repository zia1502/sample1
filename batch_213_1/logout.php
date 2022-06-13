<?php session_start();

unset($_SESSION['logged_status']);

$_SESSION['success']    =   'Logout successfull';
header('Location: login.php');
exit;


?>