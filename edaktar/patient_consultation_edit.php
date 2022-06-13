  <?php 

  include('header.php');


  if(isset($_GET['edit_id']) && !empty($_GET['edit_id'])){
    $edit_id  = $_GET['edit_id'];
    $sql_1  = "SELECT `consultation`.`id` AS `c_id`, `pat_id`, `name`, `weight`, `hight`, `bp`, `temp`,`pulse`,`history`, `question` FROM `consultation`, `patient` WHERE `consultation`.`pat_id` =`patient`.`id` AND `consultation`.`id`=$edit_id";
    $result   = $connection->query($sql_1);
    if($result->num_rows > 0){
      $user_data_info   =  $result->fetch_object();

    }else{
      $_SESSION['error']  = 'No Data found with this ID of '.$edit_id;
      header('Location:patient_consultation_list.php');
      exit;
    }

  }


  if(isset($_POST['consultation_update']) && !empty($_POST['consultation_update'])){
    $edit_id    = $_POST['edit_id'];
    $is_error   = check_con_required_field();
    // print '<pre>';
    // print_r($edit_id);
    // print '</pre>';
    // exit;
    if($is_error){
      $_SESSION['error']  = 'Please fill all required field';
      header('Location:patient_consultation_list.php');
      exit;
    }

    $pat_id             =  input_validation($_POST['pat_id']);
    $name               =  input_validation($_POST['name']);
    $weight             =  input_validation($_POST['weight']);
    $hight              =  input_validation($_POST['hight']);
    $bp                 =  input_validation($_POST['bp']);
    $temp               =  input_validation($_POST['temp']);
    $pulse              =  input_validation($_POST['pulse']);
    $history            =  input_validation($_POST['history']);
    $question           =  input_validation($_POST['cc']);

    $updated_by         =   1; // need use session id here
    $updated_at         =   date('Y-m-d H:i:s');

    $update         =   "UPDATE consultation SET weight='$weight', hight='$hight', bp='$bp', temp='$temp', pulse='$pulse', 
                        history='$history', question ='$question', updated_by ='$updated_by', updated_at='$updated_at' WHERE id=$edit_id";

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
        <div class="col-md-8">

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

            <h3>Patient Consultation Information Update</h3>

            <form action="" method='post'>

              <div class="mb-3 mt-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" 
                value="<?php echo (isset($user_data_info->name) && !empty($user_data_info->name) ? $user_data_info->name : '') ?>">
              </div>
              <div class="mb-3 mt-3">
                <label for="weight" class="form-label">Weight:</label>
                <input type="number" class="form-control" id="weight" placeholder="Enter weight" name="weight" 
                value="<?php echo (isset($user_data_info->weight) && !empty($user_data_info->weight) ? $user_data_info->weight : '') ?>">
              </div>

              <div class="mb-3 mt-3">
                <label for="hight" class="form-label">Hight:</label>
                <input type="number" class="form-control" id="hight" placeholder="Enter hight" name="hight" 
                value="<?php echo (isset($user_data_info->hight) && !empty($user_data_info->hight) ? $user_data_info->hight : '') ?>">
              </div>
              <div class="mb-3 mt-3">
                <label for="bp" class="form-label">BP:</label>
                <input type="text" class="form-control" id="bp" placeholder="Enter bp" name="bp" 
                value="<?php echo (isset($user_data_info->bp) && !empty($user_data_info->bp) ? $user_data_info->bp : '') ?>">
              </div>
              <div class="mb-3 mt-3">
                <label for="temp" class="form-label">Temp:</label>
                <input type="number" class="form-control" id="temp" placeholder="Enter temp" name="temp" 
                value="<?php echo (isset($user_data_info->temp) && !empty($user_data_info->temp) ? $user_data_info->temp : '') ?>">
              </div>

              <div class="mb-3 mt-3">
                <label for="pulse" class="form-label">Pulse:</label>
                <input type="text" class="form-control" id="pulse" placeholder="Enter pulse" name="pulse" 
                value="<?php echo (isset($user_data_info->pulse) && !empty($user_data_info->pulse) ? $user_data_info->pulse : '') ?>">
              </div>

              <div class="mb-3">
                <label for="history" class="form-label">Family History:</label>
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
                <label for="question" class="form-label">Questions / Issues:</label>
                <input type="textarea" class="form-control" id="question" placeholder="Enter question" name="cc" 
                value="<?php echo (isset($user_data_info->question) && !empty($user_data_info->question) ? $user_data_info->question : '') ?>">
              </div>

             <input type="hidden" name="edit_id" value="<?php echo $user_data_info->c_id ?>">
 
              <input type="submit" class="btn btn-primary" name="consultation_update" value="Update Consultation">
            </form>

        </div>
    </div>
</main>
<?php 

  include('footer.php');

?>
