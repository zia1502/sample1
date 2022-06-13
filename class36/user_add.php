<?php 

  include('header.php');

  if(isset($_POST['user_create']) && !empty($_POST['user_create'])){
    
    
    $is_error   = check_user_required_field();

    if($is_error){
      $_SESSION['error']  = 'Please fill all required field';
      header('Location: user_add.php');
      exit;
    }


    $name           =  input_validation($_POST['name']);
    $email          =  input_validation($_POST['email']);
    $password       =  input_validation($_POST['password']);
    $user_type      =  input_validation($_POST['user_type']);

    $created_by     =   1;
    $created_at     =   date('Y-m-d H:i:s');

    $insert         =   "INSERT users (name, email, password, user_type, created_at, created_by) values('$name', '$email', '$password', '$user_type', '$created_at', '$created_by')";

    $result   =  $connection->query($insert);

    if($result){
      $message              =  'You have successfully Created your Profile';
      $_SESSION['success']  = $message;
      header('Location: user_dashboard.php');
    }else{
      echo 'Insert Error.'.$connection->error;
    }
  }
?>

<main class="container">

    <div class="row">
        <div class="col-md-12">

            <?php
            
              if(isset($_SESSION['error'])){
                echo '<div class="alert alert-danger">'.$_SESSION['error'].'</div>';
                unset($_SESSION['error']);
              }
            
            
            ?>

            <h3>User Add</h3>

            <form action="" method='post'>

              <div class="mb-3 mt-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
              </div>


              <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
              </div>


              <div class="mb-3 mt-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
              </div>



              <div class="mb-3">
                <label for="user_type" class="form-label">User Type:</label>
                <select class="form-select" id="user_type" name="user_type">
                  <option value="">Select</option>
                  <option value="1">Super Admin</option>
                  <option value="2">Admin</option>
                  <option value="3">Modarator</option>
                </select>
              </div>

              <input type="submit" class="btn btn-primary" name="user_create" value="Create">
            </form>

        </div>
    </div>

</main>


<?php 

  include('footer.php');

?>