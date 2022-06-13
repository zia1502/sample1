<?php session_start();
include 'connect.php';
include 'user_profile_update_function.php';

    if(!isset($_SESSION['logged_status'])){
        $_SESSION['error']  = 'Unauthorized Access!';
        header('Location:login.php');
        exit;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Area</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/sweetalert.css" rel="stylesheet"> 

</head>
<body>
<?php
        
        if(isset($_SESSION['error'])){
        echo '<div class="alert alert-danger">'.$_SESSION['error'].'</div>';
        unset($_SESSION['error']);
        }   
        if(isset($_SESSION['success'])){
        echo '<div class="alert alert-success">'.$_SESSION['success'].'</div>';
        unset($_SESSION['success']); 
        }  
?>

    

 


   

