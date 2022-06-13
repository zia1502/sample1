<?php 

  include('header.php');

?>

<main class="container">

    <div class="row">
        <div class="col-md-12">

            <!-- function with return -->

            <?php


                $function   =   function(){
                    echo 'This is anonymous function<br>';
                };
                $function();


                $greetings  =   function($text){
                    echo "Hello $text<br>";
                };

                $greetings('Srayan');


                $fone   =   function(){
                    echo 'This is function one<br>';
                };


                $ftwo   =   function($func){
                    $func();
                };
                

                $ftwo($fone);


            ?>


        </div>
    </div>
</main>

<?php 

  include('footer.php');

?>