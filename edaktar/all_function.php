<?php


function save(){
    echo 'It will be save function';
}

function check_prescription_required_field(){
    $is_empty   =   false;

    if(empty($_POST['doctor'])){
        $is_empty   =   true;
    }

    return $is_empty;


}


function check_con_required_field(){
    $is_empty   =   false;

    if(empty($_POST['cc'])){
        $is_empty   =   true;
    }

    return $is_empty;

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

function check_patient_required_field(){
    $is_empty   =   false;

    if(empty($_POST['name'])){
        $is_empty   =   true;
    }
    if(empty($_POST['email'])){
        $is_empty   =   true;
    }
    return $is_empty;
}
function check_doctors_required_field(){
    $is_empty   =   false;

    if(empty($_POST['doc_name'])){
        $is_empty   =   true;
    }
    if(empty($_POST['bmdc'])){
        $is_empty   =   true;
    }
    if(empty($_POST['email'])){
        $is_empty   =   true;
    }
    if(empty($_POST['speciality'])){
        $is_empty   =   true;
    }
    return $is_empty;
}
function check_alergy_required_field(){
    $is_empty   =   false;

    if(empty($_POST['alergy'])){
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

function get_patient_list(){
    global $connection;

    $all_data   =   [];

    $list_sql   =   'SELECT * FROM patient ORDER BY name ASC';
    $result     =   $connection->query($list_sql);
    if($result->num_rows > 0){
        while($row    =   $result->fetch_assoc()){
            array_push($all_data, $row);
        }
    }
    return $all_data;
}

function get_doctors_list(){
    global $connection;

    $all_data   =   [];

    $list_sql   =   'SELECT * FROM doctors ORDER BY doc_name ASC';
    $result     =   $connection->query($list_sql);
    if($result->num_rows > 0){
        while($row    =   $result->fetch_assoc()){
            array_push($all_data, $row);
        }
    }
    return $all_data;
}
function get_alergy_list(){
    global $connection;
    $all_data   =   [];
    $list_sql   =   'SELECT * FROM alergies ORDER BY alergy ASC';
    $result     =   $connection->query($list_sql);
    if($result->num_rows > 0){
        while($row    =   $result->fetch_assoc()){
            array_push($all_data, $row);
        }
    }
    return $all_data;
}
function get_con_list(){
    global $connection;
    $all_data   =   [];
    $list_sql   =   'SELECT `consultation`.`id` AS c_id, `pat_id`, `name`, `weight`, `hight`, `bp`, `temp`,`pulse`,`history`, `question` FROM `consultation`, `patient` WHERE `consultation`.`pat_id` =`patient`.`id`';
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
if(isset($_POST['patient_delete_id']) && !empty('patient_delete_id')){
    include 'connect.php';
    $delete_ID = $_POST['patient_delete_id'];

    $sql    ="DELETE FROM patient WHERE id=$delete_ID";

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
if(isset($_POST['doctors_delete_id']) && !empty('doctors_delete_id')){
    include 'connect.php';
    $delete_ID = $_POST['doctors_delete_id'];

    $sql    ="DELETE FROM doctors WHERE id=$delete_ID";

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
if(isset($_POST['alegy_delete_id']) && !empty('alegy_delete_id')){
    include 'connect.php';
    $delete_ID = $_POST['alegy_delete_id'];

    $sql    ="DELETE FROM alergies WHERE id=$delete_ID";

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















