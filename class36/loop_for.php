<?php 

  include('header.php');

?>


<main class="container">

    <div class="row">
        <div class="col-md-6">

            <?php

                
            
                for($i=1; $i <= 5; $i++){
                    echo 'Outside Loop-'.$i.'<br>';
                    for($j=1; $j <= 3; $j++){
                        echo 'inside loop-'.$j.'<br>';
                    }
                }
            

            ?>

        </div>

        <div class="col-md-6">

                <?php
                
                    $month          =   date('F');
                    $month_days     =   date('t');                   
                
                ?>

                <table class="table table-bordered table-striped">

                    <thead>
                        <tr>
                            <th colspan="2"><?php echo $month ?> Report</th>
                        </tr>
                        <tr>
                            <th>Serial Number</th>
                            <th>Month Day</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php
                        
                        for($day = 1; $day <= $month_days; $day++){
                        
                        ?>

                        <tr>
                            <td><?php echo $day ?></td>
                            <td><?php echo date('Y-m-').$day ?></td>
                        </tr>

                        <?php } ?>
                    </tbody>

                </table>

        </div>
    </div>

</main>


<?php 

  include('footer.php');

?>