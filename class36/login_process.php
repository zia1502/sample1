<?php

    if(isset($_POST['user_login']) && !empty($_POST['user_login'])){

        
        // Get Data from Login in page
        $email          =   input_validation($_POST['email']);
        $password       =   md5(input_validation($_POST['password']));
                
        
   
     

        // Check with Email
        $email_check_sql    = "SELECT id FROM users WHERE email = '$email'";      
        $result        = $connection->query($email_check_sql);
      
        

        if    ($result ->num_rows > 0){
        //    check with email and password


        $email_check_sql    =   "SELECT id, user_type, name, profile_image FROM users WHERE email='$email' AND password='$password'";
        $result             =   $connection->query($email_check_sql);
    

        if($result->num_rows > 0){

                    $login_status  = true;
                    $message    = 'Login successfull';

            $_SESSION['logged_status']      =   true;
            $logged_user_data               =   $result->fetch_object();
            $_SESSION['logged_user_email']  =   $email;
            $_SESSION['logged_user_id']     =   $logged_user_data->id;
            $_SESSION['logged_user_type']   =   $logged_user_data->user_type;
            $_SESSION['logged_user_name']   =   $logged_user_data->name;
            $_SESSION['logged_user_profile_image']   =   $logged_user_data->profile_image;

            }else{
                $login_status   = false;
                $message    = 'Password was incorrect'; 
                echo 'Password not in DB';
            } 
        }else{
            
            $login_status   = false;
            $message        = 'Email was incorrect';
            echo 'Email not in DB';
            }


    if($login_status){
        // redirect to admin dashboard
        $_SESSION['success']      =   $message;
        header('Location: admin_dashboard.php');
    }else{
        // redirect to login page
        $_SESSION['user_email'] =   $email;
        $_SESSION['error']      =   $message;
        header('Location: login.php');
   
    }
 }

?>