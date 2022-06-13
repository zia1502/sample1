<?php 

  include('project_header.php');


  if(isset($_GET['edit_id']) && !empty($_GET['edit_id'])){
    $edit_id  = $_GET['edit_id'];
    $sql      =  "SELECT * FROM projects WHERE id=$edit_id";
    $result   = $connection->query($sql);
    if($result->num_rows > 0){
      $user_data_info   =  $result->fetch_object();
    //   print '<pre>';
    //   print_r ($user_data_info);
    //   print '<pre>';
    //   exit;
    }else{
      $_SESSION['error']  = 'No Data found with this ID of '.$edit_id;
      header('Location: project_list.php');
      exit;
    }

  }

  if(isset($_POST['project_update']) && !empty($_POST['project_update'])){
    $edit_id    = $_POST['edit_id'];
    $is_error   = check_project_required_field();

    if($is_error){
      $_SESSION['error']  = 'Please fill all required field';
      header('Location: project_edit.php?edit_id='.$edit_id);
      exit;
    }
    $name                 =  input_validation($_POST['proj_name']);
    $developers           =  input_validation($_POST['dev_name']);
    $db_name              =  input_validation($_POST['db_name']);
    $language             =  input_validation($_POST['prog_language']);
    $framework            =  input_validation($_POST['framework']);
    $start_date           =  input_validation($_POST['start_date']);
    $end_date             =  input_validation($_POST['end_date']);
    $deadline             =  input_validation($_POST['deadline']);
    $client_name          =  input_validation($_POST['client_name']);


    $updated_by     =   1;
    $updated_at     =   date('Y-m-d H:i:s');

    $update         =   "UPDATE projects SET project_name='$name', developers='$developers', db_name='$db_name', language='$language', framework='$framework', start_date='$start_date', end_date='$end_date', deadline='$deadline', client_name='$client_name'  WHERE id=$edit_id";
    $result   =  $connection->query($update);
  
    if($result){
      $message              =  'Data have been successfully Updated';
      $_SESSION['success']  = $message;
      header('Location:project_list.php?edit_id='.$edit_id);
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

            <h3>Project Update</h3>

            <form action="" method='post'>

            <div class="mb-3 mt-3">
            <label for="proj_name" class="form-label">Project Name:</label>
            <input type="text" class="form-control" id="proj_name" placeholder="Enter name" name="proj_name" 
            value="<?php echo (isset($user_data_info->project_name) && !empty($user_data_info->project_name) ? $user_data_info->project_name : '') ?>">
            </div>
            <div class="mb-3 mt-3">

            <label for="dev_name" class="form-label">Developers Name :</label>
            <select class="form-select" id="dev_name" name="dev_name">
                <option value="">Select</option>
                <option value="1" <?php if(isset($user_data_info->developers) && $user_data_info->developers == 1){ echo 'selected';} ?>>Zia Hussain</option>
                <option value="2" <?php if(isset($user_data_info->developers) && $user_data_info->developers == 2){ echo 'selected';} ?>>Mothi Rahman</option>
                <option value="3" <?php if(isset($user_data_info->developers) && $user_data_info->developers == 3){ echo 'selected';} ?>>Zuhayr Hussain</option>
                <option value="4" <?php if(isset($user_data_info->developers) && $user_data_info->developers == 4){ echo 'selected';} ?>>Zafeer Hussain</option>
            </select>  
            </div>


          <div class="mb-3 mt-3">
            <label for="db_name" class="form-label">Database Details :</label>
            <select class="form-select" id="db_name" name="db_name">
              <option value="">Select</option>
              <option value="1" <?php if(isset($user_data_info->db_name) && $user_data_info->db_name == 1){ echo 'selected';} ?>>MySQL v 5.6</option>
              <option value="2" <?php if(isset($user_data_info->db_name) && $user_data_info->db_name == 2){ echo 'selected';} ?>>Oracle v 18i</option>
              <option value="3" <?php if(isset($user_data_info->db_name) && $user_data_info->db_name == 3){ echo 'selected';} ?>>MS-SQL v 12.0</option>
              <option value="4" <?php if(isset($user_data_info->db_name) && $user_data_info->db_name == 4){ echo 'selected';} ?>>Postgres</option>
            </select>  
            
          </div>

            <div class="mb-3 mt-3">
            <label for="prog_language" class="form-label">Programming Language :</label>
            <select class="form-select" id="prog_language" name="prog_language">
              <option value="">Select</option>
              <option value="1" <?php if(isset($user_data_info->language) && $user_data_info->language == 1){ echo 'selected';} ?>>PHP</option>
              <option value="2" <?php if(isset($user_data_info->language) && $user_data_info->language == 2){ echo 'selected';} ?>>Java</option>
              <option value="3" <?php if(isset($user_data_info->language) && $user_data_info->language == 3){ echo 'selected';} ?>>Python</option>
              <option value="4" <?php if(isset($user_data_info->language) && $user_data_info->language == 4){ echo 'selected';} ?>>C - Sharp</option>
            </select>
            
        </div> 

          <div class="mb-3 mt-3">
            <label for="framework" class="form-label">Framework :</label>
            <select class="form-select" id="framework" name="framework">
            <option value="">Select</option>
            <option value="1" <?php if(isset($user_data_info->framework) && $user_data_info->framework == 1){ echo 'selected';} ?>>PHP - Laravel</option>
            <option value="2" <?php if(isset($user_data_info->framework) && $user_data_info->framework == 2){ echo 'selected';} ?>>Java - Spring</option>
            <option value="3" <?php if(isset($user_data_info->framework) && $user_data_info->framework == 3){ echo 'selected';} ?>>Python - DJango</option>
            <option value="4" <?php if(isset($user_data_info->framework) && $user_data_info->framework == 4){ echo 'selected';} ?>>PHP - Codeignite</option>
            </select>

        </div>

          <div class="mb-3 mt-3">
            <label for="start_date" class="form-label">Project Start Date:</label>
            <input type="date" class="form-control" id="start_date" placeholder="yyyy-mm-dd" name="start_date"
            value="<?php echo (isset($user_data_info->start_date) && !empty($user_data_info->start_date)? $user_data_info->start_date : '') ?>">
          </div>

        <div class="mb-3 mt-3">
            <label for="end_date" class="form-label">Project End Date:</label>
            <input type="date" class="form-control" id="end_date" placeholder="yyyy-mm-dd" name="end_date"
            value="<?php echo (isset($user_data_info->end_date) && !empty($user_data_info->end_date)? $user_data_info->end_date : '') ?>">

        </div>
          <div class="mb-3 mt-3">
            <label for="deadline" class="form-label">Initial Deadline :</label>
            <input type="date" class="form-control" id="deadline" placeholder="yyyy-mm-dd" name="deadline"
            value="<?php echo (isset($user_data_info->deadline) && !empty($user_data_info->deadline)? $user_data_info->deadline : '') ?>">
        </div>
                        
        <div class="mb-3 mt-3">
          <label for="client_name" class="form-label">Client Name:</label>
          <input type="text" class="form-control" id="client_name" placeholder="Mr. Paul Keating" name="client_name"
          value="<?php echo (isset($user_data_info->client_name) && !empty($user_data_info->client_name)? $user_data_info->client_name : '') ?>">
        </div>

              <input type="hidden" name="edit_id" value="<?php echo $user_data_info->id ?>">
              <input type="submit" class="btn btn-primary" name="project_update" value="Update Project!">
            </form>

        </div>
    </div>
</main>
<?php 

  include('project_footer.php');

?>