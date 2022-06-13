<?php



if(isset($_POST['user_profile_update']) && !empty($_POST['user_profile_update'])){

    $edit_id    =   $_SESSION['logged_user_id'];

    $name       =   $_POST['name'];
    $password   =   $_POST['password'];


    if(!empty($name)){
        // update name;
        $unamesql =   "UPDATE users SET name='$name' WHERE id=$edit_id";
        $connection->query($unamesql);
        $_SESSION['logged_user_name']   =   $name;
    }

    if(!empty($password)){
        // update password;
        $password   =   md5($password);
        $upasssql =   "UPDATE users SET password='$password' WHERE id=$edit_id";
        $connection->query($upasssql);
    }


    if(isset($_FILES['profile_image']['name']) && !empty($_FILES['profile_image']['name'])){

        $file_check     =   check_user_profile_image_error();
        if($file_check->status){
            $profile_image  =   upload_user_profile_image();

            $piusql =   "UPDATE users SET profile_image='$profile_image' WHERE id=$edit_id";
            $connection->query($piusql);
            $_SESSION['logged_user_profile_image']   =   $profile_image;
        }
    }

    $_SESSION['success']        =   'Data have been successfully updated';
    header('Location: user_profile.php');
    exit;


}


function upload_user_profile_image(){

    $file_name  =   $_FILES['profile_image']['name'];
    $file_type  =   $_FILES['profile_image']['type'];
    $file_src   =   $_FILES['profile_image']['tmp_name'];
    $file_size  =   $_FILES['profile_image']['size'];

    $file_destination   =   'upload/user_profile_images/'.$file_name;

    move_uploaded_file($file_src, $file_destination);

    return $file_name;

}

function check_user_profile_image_error(){
    $response   =   (object)[
        'status'    =>  true
    ];

    return $response;
}



?>