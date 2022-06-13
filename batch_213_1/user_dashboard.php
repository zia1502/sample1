<?php 

include 'header.php';

            
if(isset($_SESSION['success'])){
  echo '<div class="alert alert-success">'.$_SESSION['success'].'</div>';
  unset($_SESSION['success']);
}

    echo 'User Dashboard';

include 'footer.php';
?>