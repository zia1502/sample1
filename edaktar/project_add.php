<?php 

  include('project_header.php');

  if(isset($_POST['proj_create']) && !empty($_POST['proj_create'])){
    
    $is_error   = check_project_required_field();
    if($is_error){
      $_SESSION['error']  = 'Please fill all required field';
      header('Location: project_add.php');
      exit;
    }

    $project_name       =  input_validation($_POST['proj_name']);
    $developers         =  input_validation($_POST['dev_name']);
    $db_name            =  input_validation($_POST['db_name']);
    $language           =  input_validation($_POST['prog_language']);
    $framework          =  input_validation($_POST['framework']);
    $start_date         =  input_validation($_POST['start_date']);
    $end_date           =  input_validation($_POST['end_date']);
    $deadline           =  input_validation($_POST['deadline']);
    $client_name        =  input_validation($_POST['client_name']);

    $created_by     =   1;
    $created_at     =   date('Y-m-d H:i:s');

    $insert         =   "INSERT projects(project_name, developers, db_name, language, framework, start_date, end_date, deadline, client_name, created_by, created_at) values('$project_name', '$developers', '$db_name','$language', '$framework', '$start_date', '$end_date', '$deadline','$client_name ','$created_by', '$created_at')";

    $result   =  $connection->query($insert);

    if($result){
      $message              =  'You have successfully Created a Project';
      $_SESSION['success']  = $message;
      header('Location:project_list.php');
    }else{
      echo 'Insert Error.'.$connection->error;
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
            ?>

            <h3>Create Project:</h3>

            <form action="" method='post'>

            <div class="mb-3 mt-3">
                <label for="proj_name" class="form-label">Project Name :</label>
                <input type="text" class="form-control" id="proj_name" placeholder="Enter Project Name" name="proj_name" required>
            </div>
              <div class="mb-3 mt-3">
                <label for="dev_name" class="form-label">Developers Name :</label>
                <select class="form-select" id="dev_name" name="dev_name" required>
                  <option value="">Select</option>
                  <option value="1">Zia Hussain</option>
                  <option value="2">Mothi Rahman</option>
                  <option value="3">Zuhayr Hussain</option>
                  <option value="4">Zafeer Hussain</option>
                </select>  
            </div>


              <div class="mb-3 mt-3">
                <label for="db_name" class="form-label">Database Details :</label>
                <select class="form-select" id="db_name" name="db_name">
                  <option value="">Select</option>
                  <option value="1">MySQL v 5.6</option>
                  <option value="2">Oracle v 18i</option>
                  <option value="3">MS-SQL v 12.0</option>
                  <option value="4">Postgres</option>
                </select>  
                
              </div>

               <div class="mb-3 mt-3">
                <label for="prog_language" class="form-label">Programming Language :</label>
                <select class="form-select" id="prog_language" name="prog_language" required>
                  <option value="">Select</option>
                  <option value="1">PHP</option>
                  <option value="2">Java</option>
                  <option value="3">Python</option>
                  <option value="4">C - Sharp</option>
                </select>
                
            </div> 

              <div class="mb-3 mt-3">
                <label for="framework" class="form-label">Framework :</label>
                <select class="form-select" id="framework" name="framework" required>
                  <option value="">Select</option>
                  <option value="1">PHP - Laravel</option>
                  <option value="2">Java - Spring</option>
                  <option value="3">Python - DJango</option>
                  <option value="4">PHP - Codeignite</option>
                </select>
  
            </div>

              <div class="mb-3 mt-3">
                <label for="start_date" class="form-label">Project Start Date:</label>
                <input type="date" class="form-control" id="start_date" placeholder="yyyy-mm-dd" name="start_date">
             </div>

            <div class="mb-3 mt-3">
                <label for="end_date" class="form-label">Project End Date:</label>
                <input type="date" class="form-control" id="end_date" placeholder="yyyy-mm-dd" name="end_date">
            </div>
              <div class="mb-3 mt-3">
                <label for="deadline" class="form-label">Initial Deadline :</label>
                <input type="date" class="form-control" id="deadline" placeholder="yyyy-mm-dd" name="deadline">
            </div>
                            
            <div class="mb-3 mt-3">
              <label for="client_name" class="form-label">Client Name:</label>
              <input type="text" class="form-control" id="client_name" placeholder="Mr. Paul Keating" name="client_name">
            </div>


            <input type="submit" class="btn btn-primary" name="proj_create" value="Create Project">

              
            </form>

        </div>
    </div>

</main>


<?php 

  include('project_footer.php');

?>