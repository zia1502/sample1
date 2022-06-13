<?php 

  include('header.php');


  if(isset($_GET['edit_id']) && !empty($_GET['edit_id'])){
    $edit_id  = $_GET['edit_id'];
    $sql      =  "SELECT * FROM consultaiton WHERE id=$edit_id";
    $sql_1  = "SELECT `consultation`.`id` AS `c_id`, `pat_id`, `name`, `weight`, `hight`, `bp`, `temp`,`pulse`,`history`, `question` FROM `consultation`, `patient` WHERE `consultation`.`pat_id` =`patient`.`id` AND `consultation`.`id`=$edit_id";
    $result   = $connection->query($sql_1);
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

  if(isset($_POST['patient_prescription']) && !empty($_POST['patient_prescription'])){
    $pat_id    = $_POST['edit_id'];
    $is_error   = check_prescription_required_field();

    if($is_error){
      $_SESSION['error']  = 'Please fill all required field';
      header('Location:patient_consultation_add.php?edit_id='.$edit_id);
      exit;
    }
    $pat_id            = $edit_id;
    $weight           =  input_validation($_POST['weight']);
    $hight            =  input_validation($_POST['hight']);
    $bp               =  input_validation($_POST['bp']);
    $temp             =  input_validation($_POST['temp']);
    $pulse            =  input_validation($_POST['pulse']);
    $history           =  input_validation($_POST['med_history']);
    $question         =  input_validation($_POST['cc']);

    $created_by     =   1;
    $created_at     =   date('Y-m-d H:i:s');


    $update   ="INSERT prescrition (pat_id, weight, hight, bp, temp, pulse, history,question, created_by, created_at) 
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

          
            <h5>Patient Information</h5>

              <div class="mb-3 mt-3">
                <label for="name" class="form-label">Name :</label>
                <?php echo (isset($user_data_info->name) && !empty($user_data_info->name) ? $user_data_info->name : '') ?>
              </div>
              <div class="mb-3 mt-3">
                <label for="weight" class="form-label">Weight (Kg) :</label>
                <?php echo (isset($user_data_info->weight) && !empty($user_data_info->weight) ? $user_data_info->weight : '') ?>
              </div>

              <div class="mb-3 mt-3">
                <label for="hight" class="form-label">Height (cm) :</label>
                <?php echo (isset($user_data_info->hight) && !empty($user_data_info->hight) ? $user_data_info->hight : '') ?>
              </div>
              <div class="mb-3 mt-3">
                <label for="bp" class="form-label">BP (sys/diag):</label>
                <?php echo (isset($user_data_info->bp) && !empty($user_data_info->bp) ? $user_data_info->bp : '') ?>
              </div>
              <div class="mb-3 mt-3">
                <label for="temp" class="form-label">Body Temperature :</label>
                <?php echo (isset($user_data_info->temp) && !empty($user_data_info->temp) ? $user_data_info->temp : '') ?>
              </div>

              <div class="mb-3 mt-3">
                <label for="pulse" class="form-label">Pulse :</label>
                <?php echo (isset($user_data_info->pulse) && !empty($user_data_info->pulse) ? $user_data_info->pulse : '') ?>
              </div>

              <div class="mb-3">
                <label for="history" class="form-label">Family History :</label>
                <select class="form-select" id="history" name="history">
                  <option value="">Select</option>
                  <option value="1"<?php if(isset($user_data_info->history) && $user_data_info->history == 1){ echo 'selected';} ?>>Diabetics</option>
                  <option value="2"<?php if(isset($user_data_info->history) && $user_data_info->history == 2){ echo 'selected';} ?>>Colestrol</option>
                  <option value="3"<?php if(isset($user_data_info->history) && $user_data_info->history == 3){ echo 'selected';} ?>>Kidney Problem</option>
                  <option value="4"<?php if(isset($user_data_info->history) && $user_data_info->history == 4){ echo 'selected';} ?>>Liver Problem</option>
                  <option value="5"<?php if(isset($user_data_info->history) && $user_data_info->history == 5){ echo 'selected';} ?>>Pregnant</option>
                  <option value="6"<?php if(isset($user_data_info->history) && $user_data_info->history == 6){ echo 'selected';} ?>>Thyroide</option>
                </select>
              </div>

              <div class="mb-3 mt-3">
                <label for="question" class="form-label">Questions / Issues :</label>
                <?php echo (isset($user_data_info->question) && !empty($user_data_info->question) ? $user_data_info->question : '') ?>
              </div>
        </div>
        <div class="col-md-6">
              
              <h5>Prescription Information</h5>
              <form action="" method='post'>

              <div class="mb-3 mt-3">
                <label for="doctor" class="form-label">Doctor:</label>
                <input type="text" class="form-control" id="weight" placeholder="Enter Doctor" name="doctor" 
                >

              </div>

              <div class="mb-3 mt-3">
                <label for="investigation" class="form-label">Investigation:</label>
                <input type="text" class="form-control" id="investigation" placeholder="Enter investigation" name="investigation" >
              </div>

              <div class="mb-3 mt-3">
                <label for="diagnose" class="form-label">Diagnose:</label>
                <input type="text" class="form-control" id="diagnose" placeholder="Enter diagnose code" name="diagnose" >
              </div>

              
              <div class="mb-3 mt-3">
                <label for="medication" class="form-label">Medication:</label>
                <input type="text" class="form-control" id="medication" placeholder="Enter medication" name="medication" >
              </div>


             
              <input type="hidden" name="edit_id" value="<?php echo $user_data_info->id ?>">
              <input type="submit" class="btn btn-primary" name="patient_prescription" value="Prescription">
            </form>

        </div>
    </div>
</main>
<?php 

  include('footer.php');

?>