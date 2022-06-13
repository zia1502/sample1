<?php 

  include('header.php');


  if(isset($_GET['edit_id']) && !empty($_GET['edit_id'])){
    $edit_id  = $_GET['edit_id'];
    $sql      =  "SELECT * FROM doctors WHERE id=$edit_id";
    $result   = $connection->query($sql);
    if($result->num_rows > 0){
      $doctors_data_info   =  $result->fetch_object();
    }else{
      $_SESSION['error']  = 'No Data found with this ID of '.$edit_id;
      header('Location:doctors_list.php');
      exit;
    }

  }


  if(isset($_POST['doctors_update']) && !empty($_POST['doctors_update'])){
    
    $edit_id    = $_POST['edit_id'];
    
    $is_error   = check_doctors_required_field();

    if($is_error){
      $_SESSION['error']  = 'Please fill all required field';
      header('Location: doctors_edit.php?edit_id='.$edit_id);
      exit;
    }

    $name           =  input_validation($_POST['doc_name']);
    $bmdc           =  input_validation($_POST['bmdc']);
    $dob            =  input_validation($_POST['dob']);
    $phone          =  input_validation($_POST['phone']);
    $email          =  input_validation($_POST['email']);
    $speciality     =  input_validation($_POST['speciality']);
    $address        =  input_validation($_POST['address']);
    $city           =  input_validation($_POST['city']);

    $updated_by     =   1;
    $updated_at     =   date('Y-m-d H:i:s');

    $update         =   "UPDATE doctors SET doc_name='$name', bmdc='$bmdc', dob='$dob', phone='$phone',
    email='$email', speciality='$speciality', address='$address', city='$city' WHERE id=$edit_id";

    $result   =  $connection->query($update);

    if($result){
      $message              =  'Data have been successfully Updated';
      $_SESSION['success']  = $message;
      header('Location: doctors_edit.php?edit_id='.$edit_id);
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
                <label for="doc_name" class="form-label">Doctors Name:</label>
                <input type="text" class="form-control" id="doc_name" placeholder="Enter name" name="doc_name" 
                value="<?php echo (isset($doctors_data_info->doc_name) && !empty($doctors_data_info->doc_name) ? $doctors_data_info->doc_name : '') ?>">
              </div>

              <div class="mb-3 mt-3">
                <label for="bmdc" class="form-label">BMDC:</label>
                <input type="text" class="form-control" id="bmdc" placeholder="Enter bmdc" name="bmdc" 
                value="<?php echo (isset($doctors_data_info->bmdc) && !empty($doctors_data_info->bmdc) ? $doctors_data_info->bmdc : '') ?>">
              </div>
              <div class="mb-3 mt-3">
                <label for="dob" class="form-label">DOB:</label>
                <input type="date" class="form-control" id="dob" placeholder="Enter dob" name="dob" 
                value="<?php echo (isset($doctors_data_info->dob) && !empty($doctors_data_info->dob) ? $doctors_data_info->dob : '') ?>">
              </div>
              <div class="mb-3 mt-3">
                <label for="phone" class="form-label">Phone:</label>
                <input type="tel" class="form-control" id="phone" placeholder="Enter phone" name="phone" 
                value="<?php echo (isset($doctors_data_info->phone) && !empty($doctors_data_info->phone) ? $doctors_data_info->phone : '') ?>">
              </div>

              <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" 
                value="<?php echo (isset($doctors_data_info->email) && !empty($doctors_data_info->email) ? $doctors_data_info->email : '') ?>">
              </div>
              <div class="mb-3 mt-3">
                <label for="address" class="form-label">Address:</label>
                <input type="text" class="form-control" id="address" placeholder="Enter address" name="address" 
                value="<?php echo (isset($doctors_data_info->address) && !empty($doctors_data_info->address) ? $doctors_data_info->address : '') ?>">
              </div>
              <div class="mb-3 mt-3">
                <label for="city" class="form-label">City:</label>
                <input type="text" class="form-control" id="city" placeholder="Enter city" name="city" 
                value="<?php echo (isset($doctors_data_info->city) && !empty($doctors_data_info->city) ? $doctors_data_info->city : '') ?>">
              </div>


              <div class="mb-3">
                <label for="speciality" class="form-label">Speciality:</label>
                <select class="form-select" id="speciality" name="speciality">
                  <option value="">Select</option>
                  <option value="1" <?php if(isset($doctors_data_info->speciality) && $doctors_data_info->speciality == 1){ echo 'selected';} ?>>Cardiologist</option>
                  <option value="2" <?php if(isset($doctors_data_info->speciality) && $doctors_data_info->speciality == 2){ echo 'selected';} ?>>Pediatricians</option>
                  <option value="3"<?php if(isset($doctors_data_info->speciality) && $doctors_data_info->speciality == 3){ echo 'selected';} ?>>Endocrinologists</option>
                  <option value="4"<?php if(isset($doctors_data_info->speciality) && $doctors_data_info->speciality == 4){ echo 'selected';} ?>>Urologists</option>
                  <option value="5"<?php if(isset($doctors_data_info->speciality) && $doctors_data_info->speciality == 5){ echo 'selected';} ?>>Neurologists</option>
                  <option value="6"<?php if(isset($doctors_data_info->speciality) && $doctors_data_info->speciality == 6){ echo 'selected';} ?>>Nephrologists</option>
                  <option value="7"<?php if(isset($doctors_data_info->speciality) && $doctors_data_info->speciality == 7){ echo 'selected';} ?>>Oncologists</option>
                  <option value="8"<?php if(isset($doctors_data_info->speciality) && $doctors_data_info->speciality == 8){ echo 'selected';} ?>>Gynecologists</option>
                </select>
              </div>
              <input type="hidden" name="edit_id" value="<?php echo $doctors_data_info->id ?>">
              <input type="submit" class="btn btn-primary" name="doctors_update" value="Update">
            </form>

        </div>
    </div>
</main>
<?php 

  include('footer.php');

?>