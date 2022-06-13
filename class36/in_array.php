<?php
$cars = array(
    array("Volvo", 22, 18),
    array("BMW", 22, 18),
    array("Saab", 22, 18),
    array("Land Rover", 22, 18)
);

echo    $cars[0][0].": In stock: ".$cars[0][1].", Sold :".$cars[0][2]."<br>";
echo    $cars[1][0].": In stock: ".$cars[1][1].", Sold :".$cars[1][2]."<br>";
echo    $cars[2][0].": In stock: ".$cars[2][1].", Sold :".$cars[2][2]."<br>";
echo    $cars[3][0].": In stock: ".$cars[3][1].", Sold :".$cars[3][2]."<br>";

?>

<?php

    $colors     =   ['white', 'black', 'red'];

    $new_color  =   'black';


    if(in_array($new_color, $colors)){
        echo $new_color. ' already exist';
    }else{
        echo 'need to add this '.$new_color.' color';
    }

    $cars   = array('Jaguar', 'Mercedez Benz','Acura', 'Infinity' );
    $new_cars   = [];
    //$x = count($cars);

    for($i = 0; $i < count($cars);  $i++) {
        $new_cars = $cars[$i];
    }
    print '<pre>';
    print_r($new_cars);
    print '<pre>';


?>

<?php
    $cars = array("Volvo", "BMW", "Toyota");
    $arrlength = count($cars);
    
    for($x = 0; $x < $arrlength; $x++) {
      echo $cars[$x];
      echo "<br>";
    }
    ?>

<?php 

    $cars = array("Volvo", "BMW", "Toyota");

    echo 'I like '.$cars[0].', '.$cars[1]. ' and '. $cars[2].'<br>';
    echo "I like ".$cars[0].", ".$cars[1]." and ". $cars[2];

?>

<?php 
    $cars   = array ("Volvo", "BMW", "Toyota");
    echo count($cars);

    $txt = "Hello World! Be kind to me.";
    $x  =   5;
    $y  = 10.5;

    echo $txt .'<br>';
    echo $x .'<br>';
    echo $y ;


?>
<?php
    $age = array (
        "Peter"=>35,
        "John"=>32,
        "Miller"=>43,
        "Zia"=>50
    );

    foreach ($age as $x => $x_value){

        echo $x." is ". $x_value." years old.". "<br>";

    }

?>