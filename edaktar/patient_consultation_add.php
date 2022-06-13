<?php 

  include('header.php');


  if(isset($_GET['edit_id']) && !empty($_GET['edit_id'])){
    $edit_id  = $_GET['edit_id'];
    $sql      =  "SELECT * FROM patient WHERE id=$edit_id";
    $result   = $connection->query($sql);
    if($result->num_rows > 0){
      $user_data_info   =  $result->fetch_object();
      // print '<pre>';
      // print_r($user_data_info);
      // print '</pre>';
      // exit;
    }else{
      $_SESSION['error']  = 'No Data found with this ID of '.$edit_id;
      header('Location:patient_consultation_list.php');
      exit;
    }

  }

  if(isset($_POST['patient_consultation']) && !empty($_POST['patient_consultation'])){
    $pat_id    = $_POST['edit_id'];
    $is_error   = check_con_required_field();

    if($is_error){
      $_SESSION['error']  = 'Please fill all required field';
      header('Location:patient_consultation_add.php?edit_id='.$edit_id);
      exit;
    }
    $pat_id          = $edit_id;
    $weight           =  input_validation($_POST['weight']);
    $hight           =  input_validation($_POST['hight']);
    $bp           =  input_validation($_POST['bp']);
    $temp           =  input_validation($_POST['temp']);
    $pulse           =  input_validation($_POST['pulse']);
    $history           =  input_validation($_POST['med_history']);
    $question         =  input_validation($_POST['cc']);

    $created_by     =   1;
    $created_at     =   date('Y-m-d H:i:s');


    $update   ="INSERT consultation (pat_id, weight, hight, bp, temp, pulse, history,question, created_by, created_at) 
    values ('$pat_id','$weight','$hight','$bp','$temp','$pulse','$history','$question','$created_by','$created_at')";

    $result   =  $connection->query($update);

    
    if($result){
      $message              =  'Data have been successfully Updated';
      $_SESSION['success']  = $message;
      header('Location:patient_consultation_list.php');
      exit;
    }else{
      echo 'Update Error.'.$connection->error;
    }
  }
?>

<main class="container">

    <div class="row">
        <div class="col-md-6">

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

            <h3>Patient Consultation Request</h3>

            <form action="" method='post'>

              <div class="mb-3 mt-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" 
                value="<?php echo (isset($user_data_info->name) && !empty($user_data_info->name) ? $user_data_info->name : '') ?>">
              </div>
              <div class="mb-3 mt-3">
                <label for="weight" class="form-label">Weight:</label>
                <input type="number" class="form-control" id="weight" placeholder="Enter weight in KG" name="weight" >
              </div>

              <div class="mb-3 mt-3">
                <label for="hight" class="form-label">Hight:</label>
                <input type="number" class="form-control" id="hight" placeholder="Enter hight in cm" name="hight" >
              </div>

              <div class="mb-3 mt-3">
                <label for="bp" class="form-label">Blood Pressure:</label>
                <input type="text" class="form-control" id="bp" placeholder="Enter BP as 120/80" name="bp" >
              </div>

              <div class="mb-3 mt-3">
                <label for="temp" class="form-label">Body Temperature:</label>
                <input type="number" class="form-control" id="temp" placeholder="Enter temperature in celcius" name="temp" >
              </div>

              <div class="mb-3 mt-3">
                <label for="pulse" class="form-label">Pulse:</label>
                <input type="number" class="form-control" id="pulse" placeholder="Enter Pulse" name="pulse" >
              </div>

              <div class="mb-3">
                <label for="med_history" class="form-label">Medical History:</label>
                <select class="form-select multiple" id="med_history" name="med_history">
                  <option value="">Select</option>
                  <option value="1">Diabetics</option>
                  <option value="2">Colestrol</option>
                  <option value="3">Kidney Problem</option>
                  <option value="4">Liver Problem</option>
                  <option value="5">Pregnant</option>
                  <option value="6">Thyroide</option>
                </select>
              </div>
              
              <div class="mb-3 mt-3">
                <label for="cc" class="form-label">Chief Complaints:</label>
                <textarea class="form-control" rows="3" id="cc" name="cc"></textarea>
              </div>

             
              <input type="hidden" name="edit_id" value="<?php echo $user_data_info->id ?>">
              <input type="submit" class="btn btn-primary" name="patient_consultation" value="Submit for Consultation">
            </form>

        </div>
    </div>
</main>
<?php 

  include('footer.php');

?>