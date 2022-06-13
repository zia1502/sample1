<?php


$name   =   'Tanveer';

function say_hi(){

    $name = 'Torikul Islam';

    // annonymous function
    $v_func     =   function() use($name){
        echo 'Hi'.$name. ' I am anonymous function';
    };

    $v_func();
}

say_hi();


?>