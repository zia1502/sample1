<?php 

  include('header.php');


  if(isset($_GET['edit_id']) && !empty($_GET['edit_id'])){
    $edit_id  = $_GET['edit_id'];
    $sql      =  "SELECT * FROM users WHERE id=$edit_id";
    $result   = $connection->query($sql);
    if($result->num_rows > 0){
      $user_data_info   =  $result->fetch_object();
    }else{
      $_SESSION['error']  = 'No Data found with this ID of '.$edit_id;
      header('Location: user_list.php');
      exit;
    }

  }


  if(isset($_POST['user_update']) && !empty($_POST['user_update'])){
    
    $edit_id    = $_POST['edit_id'];
    
    $is_error   = check_user_required_field();

    if($is_error){
      $_SESSION['error']  = 'Please fill all required field';
      header('Location: user_edit.php?edit_id='.$edit_id);
      exit;
    }


    $name           =  input_validation($_POST['name']);
    $email          =  input_validation($_POST['email']);
    $password       =  input_validation($_POST['password']);
    $user_type      =  input_validation($_POST['user_type']);

    $updated_by     =   1;
    $updated_at     =   date('Y-m-d H:i:s');

    $update         =   "UPDATE users SET name='$name', email='$email' WHERE id=$edit_id";

    $result   =  $connection->query($update);

    if(!empty($password)){

      $password       =   md5($password);
      $update         =   "UPDATE users SET password='$password' WHERE id=$edit_id";

      $result   =  $connection->query($update);
    }
    if($result){
      $message              =  'Data have been successfully Updated';
      $_SESSION['success']  = $message;
      header('Location: user_edit.php?edit_id='.$edit_id);
      exit;
    }else{
      echo 'Update Error.'.$connection->error;
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

              if(isset($_SESSION['success'])){
                echo '<div class="alert alert-success">'.$_SESSION['success'].'</div>';
                unset($_SESSION['success']);
              }
                        
            ?>

            <h3>User Update</h3>

            <form action="" method='post'>

              <div class="mb-3 mt-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" 
                value="<?php echo (isset($user_data_info->name) && !empty($user_data_info->name) ? $user_data_info->name : '') ?>">
              </div>

              <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" 
                value="<?php echo (isset($user_data_info->email) && !empty($user_data_info->email) ? $user_data_info->email : '') ?>">
              </div>

              <div class="mb-3 mt-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
              </div>

              <div class="mb-3">
                <label for="user_type" class="form-label">User Type:</label>
                <select class="form-select" id="user_type" name="user_type">
                  <option value="">Select</option>
                  <option value="1" <?php if(isset($user_data_info->user_type) && $user_data_info->user_type == 1){ echo 'selected';} ?>>Super Admin</option>
                  <option value="2" <?php if(isset($user_data_info->user_type) && $user_data_info->user_type == 2){ echo 'selected';} ?>>Admin</option>
                  <option value="3"<?php if(isset($user_data_info->user_type) && $user_data_info->user_type == 3){ echo 'selected';} ?>>Modarator</option>
                </select>
              </div>
              <input type="hidden" name="edit_id" value="<?php echo $user_data_info->id ?>">
              <input type="submit" class="btn btn-primary" name="user_update" value="Update">
            </form>

        </div>
    </div>
</main>
<?php 

  include('footer.php');

?>