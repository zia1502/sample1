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

            <h3>List of Doctors</h3>

            <?php

                $user_list  = get_doctors_list();    
                
                if(isset($user_list) && !empty($user_list)){
            ?>

            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>SL</th>
                    <th>Doctors Name</th>
                    <th>BMDC No.</th>
                    <th>Dob</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Speciality</th>
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
                    <td><?php echo $row['doc_name'] ?></td>
                    <td><?php echo $row['bmdc'] ?></td>
                    <td><?php echo $row['dob'] ?></td>
                    <td><?php echo $row['phone'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['address'] ?></td>
                    <td><?php echo $row['city'] ?></td>
                    <td><?php echo $row['speciality'] ?></td>
                    <td> 
                        <a class="btn btn-sm btn-info" href='doctors_edit.php?edit_id=<?php echo $id; ?>'>Edit</a> 
                        <button type="submit" class="btn btn-sm btn-danger" onclick="doctors_delete_id('<?php echo $id ?>')">Delete</button>
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