<?php
    include_once '../init.php';
include_once "../classes/Admin.php";

$status = $admin->add_new_user($_POST);
if ($status === 'empty_fields'){
    echo json_encode(['success' => 'error','message'=>'All starred (*) fields are required']);
}
else if($status === 'current_pass_mismatch'){
    echo json_encode(['success' => 'error','message'=>'Current user password mismatch']);
} else if($status === 'user_inserted'){
    echo json_encode(['success' => 'inserted','message' => 'Data inserted successfully']);
}else if($status === 'confirm_pass_mismatch'){
    echo json_encode(['success' => 'error','message' => 'Confirm password mismatch with new user password']);
}
else if($status === 'already_exist'){
    echo json_encode(['success' => 'error','message' => 'This user id is already exist']);
} else if($status === 'not_inserted'){
    echo json_encode(['success' => 'error','message' => 'This data not inserted']);
}