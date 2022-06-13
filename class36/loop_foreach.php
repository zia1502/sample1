<?php 

  include('header.php');

?>


<main class="container">

    <div class="row">
        <div class="col-md-6">

            <?php
            
                $colors     =   ['#FF0000', '#00FFFF', '#0000FF', '#00008B', '#FFA500'];

                foreach($colors as $k=>$v){
                    echo 'Colors Element: Key-'.$k.' Value-'.$v.'<br>';
                }
            
            ?>


        </div>

        <div class="col-md-6">


            <div id="accordion">


                <?php
                
                    $colors     =   ['#FF0000', '#00FFFF', '#0000FF', '#00008B', '#FFA500'];
                    $sl     =   1;
                    foreach($colors as $k=>$v){ ?>

                        <div class="card">
                            <div class="card-header" style="background-color: <?php echo $v ?>;">
                                <a class="btn" data-bs-toggle="collapse" href="#collapse<?php echo $k ?>">
                                Collapsible Group Item #<?php echo $sl++; ?>
                                </a>
                            </div>
                            <div id="collapse<?php echo $k ?>" class="collapse <?php echo ($k==0 ? 'show': '') ?>" data-bs-parent="#accordion">
                                <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </div>
                            </div>
                        </div>


                <?php } ?>
            </div><!-- accor. end div -->
        </div> <!-- col end div -->
    </div>

</main>


<?php 

  include('footer.php');

?>