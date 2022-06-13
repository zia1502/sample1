<?php 

  include('header.php');

  if(isset($_POST['doc_create']) && !empty($_POST['doc_create'])){
    
    
    $is_error   = check_doctors_required_field();

    if($is_error){
      $_SESSION['error']  = 'Please fill all required field';
      header('Location: doctors_add.php');
      exit;
    }


    $doc_name       =  input_validation($_POST['doc_name']);
    $bmdc           =  input_validation($_POST['bmdc']);
    $dob            =  input_validation($_POST['dob']);
    $phone          =  input_validation($_POST['phone']);
    $email          =  input_validation($_POST['email']);
    $address        =  input_validation($_POST['address']);
    $city           =  input_validation($_POST['city']);
    $speciality     =  input_validation($_POST['speciality']);

    $created_by     =   1;
    $created_at     =   date('Y-m-d H:i:s');

    $insert         =   "INSERT doctors (doc_name, bmdc, dob, phone,  email, address, city, speciality, created_by, created_at) 
                      values('$doc_name', '$bmdc', '$dob','$phone', '$email', '$address', '$city', '$speciality','$created_by', '$created_at')";

    $result   =  $connection->query($insert);

    if($result){
      $message              =  'You have successfully Created the Patient Profile';
      $_SESSION['success']  = $message;
      header('Location: doctors_list.php');
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
                <label for="name" class="form-label">Doctors Name:</label>
                <input type="text" class="form-control" id="doc_name" placeholder="Enter Doctor's Name" name="doc_name" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="mb-3 mt-3">
                <label for="name" class="form-label">BMDC Number:</label>
                <input type="text" class="form-control" id="bmdc" placeholder="Enter BMDC Number" name="bmdc" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="mb-3 mt-3">
                <label for="name" class="form-label">Date of Birth:</label>
                <input type="date" class="form-control" id="dob" placeholder="Enter Dob" name="dob">
              </div>
              <div class="mb-3 mt-3">
                <label for="name" class="form-label">Contact Number:</label>
                <input type="text" class="form-control" id="phone" placeholder="Enter Contact Number" name="phone">
              </div>

              <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
              </div>

              <div class="mb-3 mt-3">
                <label for="password" class="form-label">Practice Address:</label>
                <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address">
              </div>
                            
              <div class="mb-3 mt-3">
                <label for="name" class="form-label">City:</label>
                <input type="text" class="form-control" id="city" placeholder="Enter name" name="city">
              </div>

              <div class="mb-3">
                <label for="speciality" class="form-label">Doctors Speciality:</label>
                <select class="form-select" id="speciality" name="speciality" required>
                  <option value="">Select</option>
                  <option value="1">Cardiologist</option>
                  <option value="2">Pediatricians</option>
                  <option value="3">Endocrinologists</option>
                  <option value="4">Urologists</option>
                  <option value="5">Neurologists</option>
                  <option value="6">Nephrologists</option>
                  <option value="7">Oncologists</option>
                  <option value="8">Gynecologists</option>
                </select>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
                
              </div>

              <input type="submit" class="btn btn-primary" name="doc_create" value="Create">
            </form>

        </div>
    </div>

</main>


<?php 

  include('footer.php');

?>