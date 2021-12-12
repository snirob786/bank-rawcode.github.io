<?php
    include_once '../init.php';
    include_once "../classes/Admin.php";

    $status = $admin->admin_log($_POST);
//    is_there($_POST);

    if ($status === 'empty_fields'){
        echo json_encode(['id' => 'empty_fields','message'=>'All fields are required', 'type'=>'error']);
    }
    else if($status === 'no_data_found'){
        echo json_encode(['id' => 'no_data_found','message'=>'You have no data with this username','type'=>'error']);
    } else if($status === 'password_mismatch'){
        echo json_encode(['id' => 'password_mismatch','message' => 'Password Mismatch','type'=>'error']);
    }else if($status === 'logged_in'){
        echo json_encode(['id' => 'logged_in','message' => 'You are logged in','type'=>'success']);
    }