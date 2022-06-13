<?php 

  include('header.php');

?>


<main class="container">

    <div class="row">
        <div class="col-md-12">

            <?php
            

                // comparision operator: == or ===
            
                $password           = 123456;
                $confirm_password   = "123456";

                $status     =   false;

                //conditional statement:

                /*

                if($password === $confirm_password){
                    echo "<b>Password and Confirm password matched</b>";
                }else{
                    echo "<b>Password and Confirm password did not matched</b>";
                }
            
                */

                $date   =   date('d');

                echo '<b>Day of the month: '.$date .'</b><br>';

                $day_name   =   date('l');

                echo '<b>Day Name of the week: '.$day_name .'</b><br>';


                $today   =   date('Y-m-d');

                echo '<b>Today Date: '.$today .'</b><br>';


                $check_Day   =  date('D');

                $message    =   "";

                if($check_Day = 'Sat'){
                    $message  = "<b>Today is Saturday and We have Web Development Class</b><br>";
                }elseif($check_Day = 'Mon'){
                    $message  = "<b>Today is Monday and We have Web Development Class</b><br>";
                }elseif($check_Day = 'Wed'){
                    $message  = "<b>Today is Wednesday and We have Web Development Class</b><br>";
                }else{
                    $today  =   date('l');
                    $message  = "<b>Today is $today and We have No Class</b><br>";
                }

                echo $message;

                // ids array variable
                $ids    =   ['1', '2', '3', '5', ''];

                $total_element  =   count($ids);

                print "<b>Number of ids Array Element is $total_element</b><br>";

                // !empty()
                if(isset($ids[4])){
                    print "<b>last Element of ids array is ".$ids[4]."</b><br>";
                }else{
                    echo "No value found for this array offset";
                }

            
            ?>

        </div>
    </div>

</main>


<?php 

  include('footer.php');

?>