<?php
function check_project_required_field(){
    $is_empty   =   false;

    if(empty($_POST['proj_name'])){
        $is_empty   =   true;
    }

    if(empty($_POST['start_date'])){
        $is_empty   =   true;
    }
    if(empty($_POST['deadline'])){
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

function get_proj_list(){
    global $connection;
    $all_data   =   [];

    $list_sql   =   'SELECT * FROM projects ORDER BY project_name ASC';
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

if(isset($_POST['project_delete_id']) && !empty('project_delete_id')){
    include 'project_connect.php';
    $delete_ID = $_POST['project_delete_id'];

    $sql    ="DELETE FROM projects WHERE id=$delete_ID";

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















