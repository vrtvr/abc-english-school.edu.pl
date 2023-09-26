<?php 
// Load and initialize database class 
require_once 'DB.class.php'; 
$db = new DB(); 
 
if(($_POST['action'] == 'edit') && !empty($_POST['id'])){ 
    // Update data 
    $userData = array( 
        'name' => $_POST['name'], 
        'last_name' => $_POST['last_name'], 
        'mail' => $_POST['mail'],
        'role' => $_POST['role'],
        'type' => $_POST['type'],
        'lvl' => $_POST['lvl'], 
        'age' => $_POST['age'] 
    ); 
    $condition = array( 
        'id' => $_POST['id'] 
    ); 
    $update = $db->update($userData, $condition); 
 
    if($update){ 
        $response = array( 
            'status' => 1, 
            'msg' => 'Dane użytkownika zostały skutecznie zaktualizowane.', 
            'data' => $userData 
        ); 
    }else{ 
        $response = array( 
            'status' => 0, 
            'msg' => 'Ups, coś poszło nie tak!' 
        ); 
    } 
     
    echo json_encode($response); 
    exit(); 
}elseif(($_POST['action'] == 'delete') && !empty($_POST['id'])){ 
    // Delete data 
    $condition = array('id' => $_POST['id']); 
    $delete = $db->delete($condition); 
 
    if($delete){ 
        $returnData = array( 
            'status' => 1, 
            'msg' => 'Dane użytkownika zostały skutecznie usunięte.' 
        ); 
    }else{ 
        $returnData = array( 
            'status' => 0, 
            'msg' => 'Ups, coś poszło nie tak!' 
        ); 
    } 
     
    echo json_encode($returnData); 
    exit(); 
} 
 
?>