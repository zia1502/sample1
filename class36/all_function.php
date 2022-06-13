<?php


function save(){
    echo 'It will be save function';
}


function check_user_required_field(){
    $is_empty   =   false;

    if(empty($_POST['name'])){
        $is_empty   =   true;
    }
    if(empty($_POST['email'])){
        $is_empty   =   true;
    }

    return $is_empty;

}

function get_user_list(){
    global $connection;

    $all_data   =   [];

    $list_sql   =   'SELECT * FROM users ORDER BY name ASC';
    $result     =   $connection->query($list_sql);
    if($result->num_rows > 0){
        while($row    =   $result->fetch_assoc()){
            array_push($all_data, $row);
        }
    }
    return $all_data;
}
function get_product_list(){
    global $connection;

    $all_data   =   [];

    $list_sql   =   'SELECT * FROM products';

    $result     =   $connection->query($list_sql);

    if($result->num_rows > 0){
    
        while($row    =   $result->fetch_assoc()){
            array_push($all_data, $row);
        }

    }

    return $all_data;
}


function input_validation($data){

    $data   =   trim($data);
    $data   =   htmlspecialchars($data);
    $data   =   stripslashes($data);

    return $data;
 
}

if(isset($_POST['user_delete_id']) && !empty('user_delete_id')){
    include 'connect.php';
    $delete_ID = $_POST['user_delete_id'];

    $sql    ="DELETE FROM users WHERE id=$delete_ID";

    if($connection->query($sql)){
        $status =   'success';
        $message    = 'Data has been successfully deleted.';
    }else{
        $status =   'error';
        $message    = 'Failed to delete the data.';
    }
    $response = [
        'status'    => $status,
        'message'   => $message
    ];
    echo json_encode($response);
    exit;

}


?>















