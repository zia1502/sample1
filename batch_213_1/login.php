<?php 

  include('header.php');

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

            <h3>Login</h3>

            <form action="" method='post'>


              <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php if(isset($_SESSION['user_email']) && !empty($_SESSION['user_email'])){ echo $_SESSION['user_email']; unset($_SESSION['user_email']);} ?>">
              </div>


              <div class="mb-3 mt-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
              </div>

              <input type="submit" class="btn btn-primary" name="user_login" value="Login">
            </form>

        </div>
    </div>

</main>


<?php 

  include('footer.php');

?>