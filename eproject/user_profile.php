<?php include ('admin_header.php'); ?>

<h1><?php echo $_SESSION['logged_user_name']?> Profile</h1>

<ul>
    <li><a href="admin_dashboard.php">Dashboard</a></li>
    <li><a href="logout.php">Logout</a></li>
</ul>


<main class="container">
    <div class="row">
        <div class="col-md-8">
            <?php
            if(isset($_SESSION['error'])){
                echo    '<div class = "alert alert-danger" >'.$_SESSION['error']. '</div>';
                unset($_SESSION['error']);
            }
            if(isset($_SESSION['success'])){
                echo    '<div class = "alert alert-success" >'.$_SESSION['success']. '</div>';
                unset($_SESSION['success']);
            }

            ?>

<h3>User Profile Update</h3>

<form action="" method='post' enctype="multipart/form-data">


              <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email:</label>
                <?php if(isset($_SESSION['logged_user_email']) && !empty($_SESSION['logged_user_email'])){ echo $_SESSION['logged_user_email'];} ?>
              </div>

    <div class="mb-3 mt-3">
    <label for="name" class="form-label">name:</label>
    <input type="name" class="form-control" id="name" placeholder="Enter name" name="name" value="<?php if(isset($_SESSION['logged_user_name']) && !empty($_SESSION['logged_user_name'])){echo $_SESSION['logged_user_name']; }?>">
    </div>

    <div class="mb-3 mt-3">
    <label for="password" class="form-label">Password:</label>
    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>

    <div class="mb-3 mt-3">
    <label for="profile_image" class="form-label">Profile Image:</label>
    <input type="file" class="form-control" name="profile_image">
    </div>




    <input type="submit" class="btn btn-primary" name="user_profile_update" value="Profile Update">
</form>
    </div>
    <div class="col-md-4">
        <?php
        if(isset($_SESSION['logged_user_profile_image']) && !empty($_SESSION['logged_user_profile_image'])) {
            $profile_image_name =   $_SESSION['logged_user_profile_image'];
        
            ?>
            <img src="upload/user_profile_images/<?php echo $profile_image_name; ?>">
            <?php } 
	    
	    
	    ?>
    </div>
    </div>
</main>

<?php include ('admin_footer.php'); ?>