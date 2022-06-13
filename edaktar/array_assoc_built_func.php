<?php 

  include('header.php');

?>


<main class="container">

    <div class="row">
        <div class="col-md-12">

            <?php
            
                
                // php array built in function: 

                //array_push()

                $student_ids    =   ['1', '2', '3'];
                array_push($student_ids, '4', '5', '6');
                

                //array_unshift()

                $colors    =   ['white', 'red', 'blue'];
                array_unshift($colors, 'pink', 'orange', 'black');
                
                echo '<pre>';
                print_r($colors);
                echo '</pre>';
                

                $single_student_info   =
                [
                    'id'        =>  'ST0001',
                    'name'      =>  'Tanveer',
                    'email'     =>  'tanveer@gmail.com',
                    'contact'   =>  '0123456'
                ];

                $array_keys     =   array_keys($single_student_info);
                $array_values   =   array_values($single_student_info);

                echo '<pre>';
                print_r($student_ids);
                print_r($array_keys);
                print_r($array_values);
                echo '</pre>';


                array_pop($student_ids);

                echo '<pre>';
                print_r($student_ids);
                echo '</pre>';
                exit;
                
                
                


            ?>


        </div>
    </div>

</main>


<?php 

  include('footer.php');

?>