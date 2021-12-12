<?php
    include_once '../init.php';
    include_once '../classes/User.php';

    $status = $user->updater_personal($_POST);

    if ($status === 'empty_fields'){
            echo json_encode(['success' => 'error','message'=>'All fields are required']);
    }
    else if ($status === 'invalid_spssn'){
        echo json_encode(['success' => 'error','message'=>'Spouse Social Security Network is invalid']);
    }
    else if($status === 'invalid_email'){
        echo json_encode(['success' => 'error','message'=>'Email Address is Invalid']);
    } else if($status === 'not_updated'){
        echo json_encode(['success' => 'error','message' => 'Data not Updated']);
    }else if($status === 'updated'){
        echo json_encode(['success' => 'updated','message' => 'Data Updated Successfully']);
    }else if($status === 'check_declare'){
        echo json_encode(['success' => 'error','message' => 'Tax Payer Consent must be checked']);
    } else{
        echo $status;
    }