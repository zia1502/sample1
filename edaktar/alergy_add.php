<?php 

  include('header.php');

  if(isset($_POST['alergy_create']) && !empty($_POST['alergy_create'])){
    
    
    $is_error   = check_alergy_required_field();

    if($is_error){
      $_SESSION['error']  = 'Please fill all required fields';
      header('Location: alergy_add.php');
      exit;
    }


    $alergy           =  input_validation($_POST['alergy']);
    $created_by     =   1;
    $created_at     =   date('Y-m-d H:i:s');

    $insert         =   "INSERT alergies (alergy, created_by, created_at) values('$alergy', '$created_by', '$created_at')";

    $result   =  $connection->query($insert);

    if($result){
      $message              =  'You have successfully Created the Patient Profile';
      $_SESSION['success']  = $message;
      header('Location: alergy_list.php');
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

            <h3>Add Allergies</h3>

            <form action="" method='post'>

              <div class="mb-3 mt-3">
                <label for="alergy" class="form-label">Allergy</label>
                <input type="text" class="form-control" id="alergy" placeholder="Enter alergy" name="alergy">
              </div>
              <input type="submit" class="btn btn-primary" name="alergy_create" value="Add Alergy">
            </form>
        </div>
    </div>
</main>

<?php 

  include('footer.php');

?>