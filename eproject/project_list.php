<?php 

  include('project_header_admin.php');

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

            <h3>List of Projects</h3>

            <?php

                $user_list  = get_proj_list();    
                if(isset($user_list) && !empty($user_list)){
            ?>

            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>SL</th>
                    <th>Project Name</th>
                    <th>Developers</th>
                    <th>Database & Version</th>
                    <th>Language</th>
                    <th>Framework</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Target End Date</th>
                    <th>Client Name</th>
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
                    <td><?php echo $row['project_name'] ?></td>
                    <td><?php 
                        if ($row['developers']==1){echo 'Zia Hussain';}
                        if ($row['developers']==2){echo 'Mothi Rahman';}
                        if ($row['developers']==3){echo 'Zuhayr Hussain';}
                        if ($row['developers']==4){echo 'Zafeer Hussain';} 
                    ?></td>
                    <td><?php 
                        if ($row['db_name']==1){ echo 'MySQL v 5.6';}
                        if ($row['db_name']==2){ echo 'Oracle v 18i';}
                        if ($row['db_name']==3){ echo 'MS-SQL v 12.0';}
                        if ($row['db_name']==4){ echo 'Postgres';}
                        
                    ?></td>
                    <td><?php 
                        if ($row['language']==1){ echo 'PHP';}
                        if ($row['language']==2){ echo 'Java';}
                        if ($row['language']==3){ echo 'Python';}
                        if ($row['language']==4){ echo 'C Sharp';}   
                    ?></td>
                    <td><?php 
                        if ($row['framework']==1){ echo 'PHP - Laravel';}
                        if ($row['framework']==2){ echo 'Java - Spring';}
                        if ($row['framework']==3){ echo 'Python - DJango';}
                        if ($row['framework']==4){ echo 'PHP - Codeignite';}                   
                    ?></td>
                    <td><?php echo $row['start_date'] ?></td>
                    <td><?php echo $row['end_date'] ?></td>
                    <td><?php echo $row['deadline'] ?></td>
                    <td><?php echo $row['client_name'] ?></td>
                    <td> 
                        <a class="btn btn-sm btn-info" href='project_edit.php?edit_id=<?php echo $id; ?>'>Edit</a> 
                        <button type="submit" class="btn btn-sm btn-danger" onclick="project_delete_id('<?php echo $id ?>')">Delete</button>
                        <!-- <a class="btn btn-sm btn-success" href='patient_consultation_add.php?edit_id=<?php echo $id; ?>'>Consultation</a>  -->

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

  include('project_footer.php');

?>