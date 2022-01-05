<?php
    include_once '../init.php';
    include_once "../classes/User.php";

    $status = $user->is_there($_POST);

    if ($status === 'empty_fields'){
        echo json_encode(['success' => 'error','message'=>'All fields are required']);
    }
    else if($status === 'no_data'){
        echo json_encode(['success' => 'error','message'=>'No data found']);
    } else if($status === 'inserted'){
        echo json_encode(['success' => 'inserted','message' => 'Data inserted successfully']);
    } else if($status === 'not_inserted'){
        echo json_encode(['success' => 'inserted','message' => 'Data couldn\'t insert']);
    }else if($status === 'ssn_numeric'){
        echo json_encode(['success' => 'error','message' => 'Only numeric for SSN']);
    }else if($status === 'ssn_not_equal_nine'){
        echo json_encode(['success' => 'error','message' => 'SSN have to be 9 digits']);
    }else if($status === 'valid_ssn'){
        echo json_encode(['success' => 'error','message' => 'Invaild SSN']);
    }else if($status === 'already_exist'){
        echo json_encode(['success' => 'already_exist', 'message' => 'This user\'s information is already exist.']);
    }else if($status === 'last_name_mismatch'){
        echo json_encode(['success' => 'error','message'=>'Last Name Mismatch']);
    } else if($status === 'dob_mismatch'){
        echo json_encode(['success' => 'error','message'=>'Date of Birth Mismatch']);
    }
    else{
        echo json_encode(['success' => 'success','message' => $status]);
    }