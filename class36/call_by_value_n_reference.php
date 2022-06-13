<?php

/*

    local veriable:
    Global veriable


*/

// call by value 
$number1    =  5;

if(1 == 1){
    echo 'True';
}else{
    echo 'False';
}

function addition($left, $right){

    $result = $left + $right;
    echo $result. ' This is result inside into the function<br>';
    

}

/*
    $number2 = 150;
    addition($number1, $number2);
    echo $number1;
*/

// call by reference:
$number2 = 205;
addition(100, 300);

echo $number1. ' The value is from outside of the function';

?>