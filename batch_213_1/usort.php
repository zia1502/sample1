<?php


$numbers    =   [1, 5, 3, 10, 8];

function sort_my_number($left, $right){

    if($left == $right){
        return 0;
    }

    if($left > $right){
        return -1;
    }

    if($left < $right){
        return 1;
    }

}


usort($numbers, 'sort_my_number');


print '<pre>';
print_r($numbers);
print '</pre>';
exit;




$employees = array (
    array ('name' => 'Ray', 'id' => 5685),
    array ('name' => 'Mike', 'id' => 4302), 
    array ('name' => 'Anne', 'id' => 3674), 
    array ('name' => 'Pren', 'id' => 1527), 
    array ('name' => 'Joel', 'id' => 6256) 
);  

      function array_compare_factory($sort_key){
        return function ($left, $right) use ($sort_key) {
             if ($left[$sort_key] < $right[$sort_key]) {
                  return -1; 
              } else if ($left[$sort_key] > $right[$sort_key]) { 
                  return 1; 
              } else { 
                      return 0;
                  }
              };
          }  



                  
                  
                  $sort_by_name = array_compare_factory ('name'); 
                  usort ($employees, $sort_by_name);
                  
                  
                  $sort_by_id = array_compare_factory ('id'); 
                  usort ($employees, $sort_by_id);

?>

?>