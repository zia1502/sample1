<?php

    $colors     =   ['white', 'black', 'red'];

    $new_color  =   'black';


    if(in_array($new_color, $colors)){
        echo $new_color. ' already exist';
    }else{
        echo 'need to add this '.$new_color.' color';
    }


?>