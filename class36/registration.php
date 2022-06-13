<?php

include 'header.php';

 ?>


<main class="container">

    <div class="row">
        <div class="col-md-6">
            <h2>Registration form</h2>

            <?php
            
                if(isset($_SESSION['status']) && $_SESSION['status'] == 'success'){ ?>

                    <div class="alert alert-success">
                        <?php 
                        
                            echo $_SESSION['message'];
                            unset($_SESSION['status']);
                            unset($_SESSION['message']);
                            
                        ?>
                    </div>
                
            <?php    
                }
            
            ?>


<?php
            
                if(isset($_SESSION['status']) && $_SESSION['status'] == 'error'){ ?>

                    <div class="alert alert-danger">
                        <?php 
                        
                            echo $_SESSION['message'];
                            unset($_SESSION['status']);
                            unset($_SESSION['message']);
                            
                        ?>
                    </div>
                
            <?php    
                }
            
            ?>


            <form method="post" action="registration_data_process.php" enctype="multipart/form-data">
                <div class="mb-3 mt-3">
                    <label for="email" class="form-label">Email:<span class="form_required_field">Required<span</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php if(isset($_SESSION['form_data']['user_email']) && !empty($_SESSION['form_data']['user_email'])){ echo $_SESSION['form_data']['user_email'];} ?>">
                </div>

                <div class="mb-3 mt-3">
                    <label for="name" class="form-label">Name:<span class="form_required_field">Required<span</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name"  value="<?php if(isset($_SESSION['form_data']['user_name']) && !empty($_SESSION['form_data']['user_name'])){ echo $_SESSION['form_data']['user_name'];} ?>">
                </div>

                <div class="mb-3 mt-3">
                    <label for="name" class="form-label">Gender:<span class="form_required_field">Required<span</label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="radio1" name="gender" value="Male" <?php if(isset($_SESSION['form_data']['gender']) && $_SESSION['form_data']['gender'] == 'Male'){ echo 'checked'; }?>>Male
                        <label class="form-check-label" for="radio1"></label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="radio1" name="gender" value="Female" <?php if(isset($_SESSION['form_data']['gender']) && $_SESSION['form_data']['gender'] == 'Female'){ echo 'checked'; }?>>Female
                        <label class="form-check-label" for="radio1"></label>
                    </div>
                </div>

                <div class="mb-3 mt-3">
                    <label for="name" class="form-label">How do you know us?<span class="form_required_field">Required<span</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check1" name="how_do_know[]" value="facebook" <?php if(isset($_SESSION['form_data']['how_do_know']) && in_array('facebook', $_SESSION['form_data']['how_do_know'])){ echo 'checked'; } ?>>
                        <label class="form-check-label">Facebook</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check2" name="how_do_know[]" value="Website_adds" <?php if(isset($_SESSION['form_data']['how_do_know']) && in_array('Website_adds', $_SESSION['form_data']['how_do_know'])){ echo 'checked'; } ?>>
                        <label class="form-check-label">Website adds</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check3" name="how_do_know[]" value="friends" <?php if(isset($_SESSION['form_data']['how_do_know']) && in_array('friends', $_SESSION['form_data']['how_do_know'])){ echo 'checked'; } ?>>
                        <label class="form-check-label">Friends</label>
                    </div>
                </div>

                <div class="mb-3 mt-3">
                    <label for="name" class="form-label">Profile Image:<span class="form_required_field">Required<span</label>
                    <input type="file" class="form-control" id="name" name="profile_image">
                </div>

                <input type="submit" class="btn btn-primary" name="registration_form_submit" value="Registration">
            </form>
        </div>

        <div class="col-md-6">
            <?php

            // if(isset($_POST['registration_form_submit']) && !empty($_POST['registration_form_submit'])){
            //     $email  =   $_POST['email'];

            //     echo 'User registration Email is: '.$email;
            // }
            
            
            
            ?>
        </div>

    </div>
</main>



<?php

include 'footer.php';

 ?>