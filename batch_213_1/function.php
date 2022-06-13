<?php 

  include('header.php');

?>

<main class="container">

    <div class="row">
        <div class="col-md-12">

<?php


function is_login_success($check_login){

    if($check_login){
        echo '<div class="alert alert-success">You have successfully logged in</div>';
    }else{
        echo '<div class="alert alert-danger">Login failed!</div>';
    }
}


$login_status   =   false;
is_login_success($login_status);


function login_success_message(){
    echo '<div class="alert alert-success">You have successfully logged in</div>';
}

//login_success_message();

save();

?>


        </div>
    </div>
</main>

<?php 

  include('footer.php');

?>