<?php 

  include('header.php');

?>

<main class="container">

    <div class="row">
        <div class="col-md-12">

            <!-- function with return -->

            <?php

            //$email  =   'email@gmail.com';

            function save_student_info($student_data){

                // save student info data into database
                echo '<div class="alert alert-success">Data have been successfully stored!</div>';

            }

            function show_error_message(){
                echo '<div class="alert alert-danger">Data have error!</div>';
            }


            function check_student_data($student_data){
                
                $status     =   true;

                if(empty($student_data['id'])){
                    $status     =   false;
                }

                if(empty($student_data['name'])){
                    $status     =   false;
                }

                if(empty($student_data['email'])){
                    $status     =   false;
                }

                if(empty($student_data['contact'])){
                    $status     =   false;
                }

                return $status;

                
            }       



            $student_info   =   [
                'id'        => 'id-001',
                'name'      => 'Tanveer',
                'email'     => 'tanveer@gmail.com',
                'contact'   => '123456',
            ];


            $response   =  check_student_data($student_info);
            
            if($response){
                save_student_info($student_info);
            }else{
                show_error_message();
            }
            
            ?>


        </div>
    </div>
</main>

<?php 

  include('footer.php');

?>