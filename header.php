<?php

    include_once "init.php";
    $db =  new DB();
    $new_ses = new Session();

    $matcher = array("yes","no");
    $matcher_marriage = array("single","married_filling_jointly","married_filling_separately","head_of_house","qualifying_widow");

    if (isset($_SESSION['special_id']) && !isset($_SESSION['user_type'])){
        $session_id = $new_ses->get_session('special_id');
        $sql = "SELECT * FROM tax_payers_data WHERE tax_payers_data_unique_ID='$session_id'";
        $data_db = $db->select($sql);
        if ($data_db->num_rows > 0){
            $data = $data_db->fetch_assoc();
            $ssn_display = get_ssn_display($data['tax_payers_data_ssn']);
            $dob_display = get_dob_display($data['tax_payers_data_dob']);
            $spdob_display = get_dob_display($data['tax_payers_data_spdob']);
            $ssn = $data['tax_payers_data_ssn'];

            $sql = "SELECT * FROM tax_payers_dependants_data WHERE tax_payers_dependants_data_owner_ssn = '$ssn'";
            $result_dep = $db->select($sql);
            $depcount = $result_dep->num_rows;
        }
    }



    $ogTitle = "HBC Organizer";
    $ogUrl = current_url();
    $ogSiteName = "HBC Organizer";
    $ogImage = "";
    $ogType = "website";
    $ogDescription = "";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv=”X-UA-Compatible” content=”IE=edge”>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo pagetitle();?></title>
    <link rel="icon" href="assets/HBC-logo.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!--  Facebook Share Content  -->
    <meta property=”og:title” content=”<?php echo $ogTitle; ?>”/>
    <meta property=”og:url” content=”<?php echo $ogUrl; ?>”/>
    <meta property=”og:site_name” content=”<?php echo $ogSiteName; ?>”/>
    <meta property=”og:image” content=”<?php echo $ogImage; ?>”/>
    <meta property=”og:type” content=”<?php echo $ogType; ?>”/>
    <meta property=”og:description” content=”<?php echo $ogDescription; ?>”/>


</head>

<body class="full-page" style="margin: 0;">
    <div class="full-section">
