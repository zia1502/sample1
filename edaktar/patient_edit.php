<?php 

  include('header.php');


  if(isset($_GET['edit_id']) && !empty($_GET['edit_id'])){
    $edit_id  = $_GET['edit_id'];
    $sql      =  "SELECT * FROM patient WHERE id=$edit_id";
    $result   = $connection->query($sql);
    if($result->num_rows > 0){
      $user_data_info   =  $result->fetch_object();
    }else{
      $_SESSION['error']  = 'No Data found with this ID of '.$edit_id;
      header('Location: patient_list.php');
      exit;
    }

  }


  if(isset($_POST['patient_update']) && !empty($_POST['patient_update'])){
    $edit_id    = $_POST['edit_id'];
    $is_error   = check_patient_required_field();

    if($is_error){
      $_SESSION['error']  = 'Please fill all required field';
      header('Location: patient_edit.php?edit_id='.$edit_id);
      exit;
    }
    $name           =  input_validation($_POST['name']);
    $phone          =  input_validation($_POST['phone']);
    $email          =  input_validation($_POST['email']);
    $dob            =  input_validation($_POST['dob']);
    $address        =  input_validation($_POST['address']);
    $city           =  input_validation($_POST['city']);

    $updated_by     =   1;
    $updated_at     =   date('Y-m-d H:i:s');

    $update         =   "UPDATE patient SET name='$name', phone='$phone', email='$email', 
    dob='$dob', address='$address', city='$city'  WHERE id=$edit_id";

    $result   =  $connection->query($update);

    
    if($result){
      $message              =  'Data have been successfully Updated';
      $_SESSION['success']  = $message;
      header('Location: patient_edit.php?edit_id='.$edit_id);
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

            <h3>Patient Update</h3>

            <form action="" method='post'>

              <div class="mb-3 mt-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" 
                value="<?php echo (isset($user_data_info->name) && !empty($user_data_info->name) ? $user_data_info->name : '') ?>">
              </div>
              <div class="mb-3 mt-3">
                <label for="phone" class="form-label">Phone:</label>
                <input type="tel" class="form-control" id="phone" placeholder="Enter phone" name="phone" 
                value="<?php echo (isset($user_data_info->phone) && !empty($user_data_info->phone) ? $user_data_info->phone : '') ?>">
              </div>

              <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" 
                value="<?php echo (isset($user_data_info->email) && !empty($user_data_info->email) ? $user_data_info->email : '') ?>">
              </div>
              <div class="mb-3 mt-3">
                <label for="dob" class="form-label">Dob:</label>
                <input type="date" class="form-control" id="dob" placeholder="Enter dob" name="dob" 
                value="<?php echo (isset($user_data_info->dob) && !empty($user_data_info->dob) ? $user_data_info->dob : '') ?>">
              </div>
              <div class="mb-3 mt-3">
                <label for="address" class="form-label">Address:</label>
                <input type="text" class="form-control" id="address" placeholder="Enter address" name="address" 
                value="<?php echo (isset($user_data_info->address) && !empty($user_data_info->address) ? $user_data_info->address : '') ?>">
              </div>

              <div class="mb-3 mt-3">
                <label for="city" class="form-label">City:</label>
                <input type="text" class="form-control" id="city" placeholder="Enter city" name="city" 
                value="<?php echo (isset($user_data_info->city) && !empty($user_data_info->city) ? $user_data_info->city : '') ?>">
              </div>

<!--               <!-- <div class="mb-3">
                <label for="user_type" class="form-label">User Type:</label>
                <select class="form-select" id="user_type" name="user_type">
                  <option value="">Select</option>
                  <option value="1" <?php if(isset($user_data_info->user_type) && $user_data_info->user_type == 1){ echo 'selected';} ?>>Super Admin</option>
                  <option value="2" <?php if(isset($user_data_info->user_type) && $user_data_info->user_type == 2){ echo 'selected';} ?>>Admin</option>
                  <option value="3"<?php if(isset($user_data_info->user_type) && $user_data_info->user_type == 3){ echo 'selected';} ?>>Modarator</option>
                </select>
              </div> -->
              <input type="hidden" name="edit_id" value="<?php echo $user_data_info->id ?>">
              <input type="submit" class="btn btn-primary" name="patient_update" value="Update">
            </form>

        </div>
    </div>
</main>
<?php 

  include('footer.php');

?>