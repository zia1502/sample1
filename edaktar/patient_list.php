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
            
            
            ?>

            <h3>List of Patients</h3>

            <?php

                $user_list  = get_patient_list();    
                
                if(isset($user_list) && !empty($user_list)){
            ?>

            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Dob</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>

                <?php
                  $sl   = 1;
                  foreach($user_list as $row){
                    $id   =  $row['id'];
                ?>
                  <tr id='user_row_id_<?php echo $id ?>'>
                    <td><?php echo $sl++ ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['phone'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['dob'] ?></td>
                    <td><?php echo $row['address'] ?></td>
                    <td><?php echo $row['city'] ?></td>
                    <td> 
                        <a class="btn btn-sm btn-info" href='patient_edit.php?edit_id=<?php echo $id; ?>'>Edit</a> 
                        <button type="submit" class="btn btn-sm btn-danger" onclick="patient_delete_id('<?php echo $id ?>')">Delete</button>
                        <a class="btn btn-sm btn-success" href='patient_consultation_add.php?edit_id=<?php echo $id; ?>'>Consultation</a> 

                    </td>
                  </tr>

                  <?php } ?>


                </tbody>
              </table>

              <?php }else{ ?>
                <div class="alert alert-info">No Data Found</div>
              <?php } ?>

        </div>
    </div>

</main>


<?php 

  include('footer.php');

?>