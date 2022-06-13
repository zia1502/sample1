<?php 

  include('header.php');

  if(isset($_POST['patient_create']) && !empty($_POST['patient_create'])){
    $is_error   = check_patient_required_field();

    if($is_error){
      $_SESSION['error']  = 'Please fill all required field';
      header('Location: patient_add.php');
      exit;
    }


    $name           =  input_validation($_POST['name']);
    $phone          =  input_validation($_POST['phone']);
    $email          =  input_validation($_POST['email']);
    $dob            =  input_validation($_POST['dob']);
    $address        =  input_validation($_POST['address']);
    $city           =  input_validation($_POST['city']);
    $created_by     =   1;
    $created_at     =   date('Y-m-d H:i:s');

    $insert         =   "INSERT patient (name, phone, email, dob, address, city, created_by, created_at) values('$name', '$phone', '$email', '$dob', '$address', '$city', '$created_by', '$created_at')";

    $result   =  $connection->query($insert);

    if($result){
      $message              =  'You have successfully Created the Patient Profile';
      $_SESSION['success']  = $message;
      header('Location: patient_list.php');
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

            <h3>Patient Add</h3>

            <form action="" method='post'>

              <div class="mb-3 mt-3">
                <label for="name" class="form-label">Patient Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
              </div>

              <div class="mb-3 mt-3">
                <label for="phone" class="form-label">Phone:</label>
                <input type="tel" class="form-control" id="phone" placeholder="Enter phone" name="phone">
              </div>

              <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
              </div>

              <div class="mb-3 mt-3">
                <label for="name" class="form-label">Dob:</label>
                <input type="date" class="form-control" id="dob" placeholder="Enter Dob" name="dob">
              </div>

              <div class="mb-3 mt-3">
                <label for="name" class="form-label">Address:</label>
                <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address">
              </div>

              <div class="mb-3 mt-3">
                <label for="password" class="form-label">City:</label>
                <input type="text" class="form-control" id="city" placeholder="Enter City" name="city">
              </div>

              <input type="submit" class="btn btn-primary" name="patient_create" value="Create">
            </form>

        </div>
    </div>

</main>


<?php 

  include('footer.php');

?>