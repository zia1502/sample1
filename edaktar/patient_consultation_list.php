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

            <h3>List of Consultations Requested by Patients</h3>

            <?php
                $user_list  = get_con_list();    
                if(isset($user_list) && !empty($user_list)){
            ?>

            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Weight</th>
                    <th>Height</th>
                    <th>BP</th>
                    <th>Temp</th>
                    <th>Pulse</th>
                    <th>History</th>
                    <th>Question</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>

                <?php
                  $sl   = 1;
                 // $id = $row['consultation'.'id'];
                  foreach($user_list as $row){
                    $c_id   =  $row['c_id'];
                ?>
                  <tr id='user_row_id_<?php echo $c_id ?>'>
                    <td><?php echo $sl++ ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['weight'] ?></td>
                    <td><?php echo $row['hight'] ?></td>
                    <td><?php echo $row['bp'] ?></td>
                    <td><?php echo $row['temp'] ?></td>
                    <td><?php echo $row['pulse'] ?></td>
                    <td><?php 
                        if($row['history']==1){echo 'Diabetics';}
                        if($row['history']==2){echo 'Colestrol';}
                        if($row['history']==3){echo 'Kidney Problem';}
                        if($row['history']==4){echo 'Liver Problem';}
                        if($row['history']==5){echo 'Pregnant';}
                        if($row['history']==6){echo 'Thyroide';}
                    
                    ?></td>
                    <td><?php echo $row['question'] ?></td>
                    <td> 
                        <a class="btn btn-sm btn-info" href='patient_consultation_edit.php?edit_id=<?php echo $c_id; ?>'>Edit Consultation</a> 
                        <button type="submit" class="btn btn-sm btn-danger" onclick="patient_delete_id('<?php echo $id ?>')">Delete Consultation</button>
                        <a class="btn btn-sm btn-success" href='patient_prescription_add.php?edit_id=<?php echo $c_id; ?>'>Prescrible</a> 

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