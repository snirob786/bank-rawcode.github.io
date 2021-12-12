<?php

    include_once "init.php";
    $db = new DB();
    $specialId = $db->real_escape($_GET['special_id']);

    $sql = "SELECT * FROM tax_payers_data WHERE tax_payers_data_unique_ID = '$specialId'";
    $result = $db->select($sql);
    $result_array = $result->fetch_assoc();
    $user_ssn = $result_array['tax_payers_data_ssn'];
    if ($result->num_rows >0){
        $sql = "DELETE FROM tax_payers_data WHERE tax_payers_data_unique_ID = '$specialId'";
        $result = $db->delete($sql);
        $sql = "DELETE FROM tax_payers_dependants_data WHERE tax_payers_dependants_data_owner_ssn = '$user_ssn'";
        $result = $db->delete($sql);
        if ($result){
            header('Location: /admin-dashboard');
        }
    }