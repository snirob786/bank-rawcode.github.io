<?php
require_once "header.php" ;
include_once "session-check.php";
include_once $_SERVER['DOCUMENT_ROOT']."/init.php";


if (isset($_SESSION['user_type'])) {
    $session_id = $new_ses->get_session('special_id');
    $sql = "SELECT * FROM admin_information WHERE admin_information_unique_id='$session_id'";
    $data_db = $db->select($sql);
    $data = $data_db->fetch_assoc();


    $searchError = false;

    if (!isset($_GET['search'])) {
        $sql = "SELECT * FROM admin_information";
        $admin_data_result = $db->select($sql);
        $searchData = "";
    } else {

        $searchData = $_GET['search'];
        $isOneWord = strpos($searchData, ' ');
        if ($isOneWord !== false) {
            $searchError = true;
            $errorData = "Only single word or number is allowed in search";
        } else {

            $sql = "SELECT * FROM admin_information WHERE admin_information_uid LIKE '%$searchData%'";
            $admin_data_result = $db->select($sql);

        }
    }

    ?>
    <div id="admin-dash-parent" class="container">
        <div id="admin-dash-inner" class="container">
            <?php include_once 'nav-header.php'; ?>
            <div class="row valign-wrapper">
                <div class="col s8 all_user_display">
                    <h2 id="admin_dash_header">Change Password</h2>
                </div>
                <div class="col s4">
                    <?php if (isset($session_id)) { ?>
                        <button id="logout" class="btn-large waves-effect waves-light red right" type="button"><a
                                href="/logout.php?argument=logOut" class="white-text">Logout</a></button>
                    <?php } ?>
                </div>
            </div>




            <div id="adduser" >
                <?php include_once 'change-pass-form.php';?>
            </div>

        </div>
        <div class="container custom_footer">
            <h6>Protected by <a href="https://www.google.com/url?sa=i&url=https%3A%2F%2Faccolade.fi%2Fwhat-is-the-aws-waf%2F&psig=AOvVaw3PDOmhGeeEpTYbVHhgALtS&ust=1609681548717000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCKCFhZux_e0CFQAAAAAdAAAAABAn">AWS WAF</a></h6>
        </div>

    </div>

    <?php
}

include_once "footer.php";


