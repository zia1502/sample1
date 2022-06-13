<?php session_start();

$email  =   $_POST['email'];

$validation_response    =   registration_data_validate();

if($validation_response == 'success'){
    $database_response =    registration_data_store();

    if($database_response){
        $message    =   "Your Registration have been successfully completed";
        $status     =   "success";
    }else{
        $message    =   "Your Registration was not successfull due to database error!";
        $status     =   "error";
    }
}else{
    $message    =   "Please provide all required data";
    $status     =   "error";
}

$_SESSION['status'] =   $status;
$_SESSION['message'] =  $message;

// location redirect function:
header("Location:registration.php");





function registration_data_validate(){
    $email          =   $_POST['email'];
    $name           =   $_POST['name'];
    $gender         =   (isset($_POST['gender']) && !empty($_POST['gender']) ? $_POST['gender'] : '');
    $how_do_know    =   (isset($_POST['how_do_know']) && !empty($_POST['how_do_know']) ? $_POST['how_do_know'] : '');

    // store into session veriable to show old value during error

    $_SESSION['form_data']['user_email'] =   $email;
    $_SESSION['form_data']['user_name']  =   $name;
    $_SESSION['form_data']['gender']  =   $gender;

    $_SESSION['form_data']['how_do_know']  =   [];

    if(!empty($how_do_know)){
        $total_hdk      =   count($how_do_know);

        for($i=0; $i < $total_hdk; $i++){
            array_push($_SESSION['form_data']['how_do_know'], $how_do_know[$i]);
        }
    }


    $is_error   =   false;

    if(empty($email)){
        $is_error   =   true;
    }
    if(empty($name)){
        $is_error   =   true;
    }


    if($is_error){
        $status     =   'error';
    }else{
        $status     =   'success';
    }

    return $status;

}


function registration_data_store(){
    $email  =   $_POST['email'];
    $name  =   $_POST['name'];

    upload_profile_image();

    // Database query: insert query

    unset($_SESSION['form_data']);
    session_destroy($_SESSION['form_data']);
    
    return true;
}


function upload_profile_image(){

    if($_FILES['profile_image']['error'] == 0){

        $name   =    $_FILES['profile_image']['name'];
        $type   =    $_FILES['profile_image']['type'];
        $src    =    $_FILES['profile_image']['tmp_name'];
        $size   =    $_FILES['profile_image']['size'];

        $dest   =   'upload/'.$name;

        // upload function:
        $response = move_uploaded_file($src, $dest);

    }

}


?>