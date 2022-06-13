<?php 

  include('header.php');

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

            <h3>List of Allergies</h3>

            <?php

                $user_list  = get_alergy_list();    
                
                if(isset($user_list) && !empty($user_list)){
            ?>

            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>SL</th>
                    <th>Name of Allergies</th>
                  
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
                    <td><?php echo $row['alergy'] ?></td>
                    <td> 
                        <a class="btn btn-sm btn-info" href='alergy_edit.php?edit_id=<?php echo $id; ?>'>Edit</a> 
                        <button type="submit" class="btn btn-sm btn-danger" onclick="user_delete_id('<?php echo $id ?>')">Delete</button>
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