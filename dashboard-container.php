<?php
    include_once $_SERVER['DOCUMENT_ROOT']."/init.php";
if (isset($_SESSION['user_type'])){
    $session_id = $new_ses->get_session('special_id');
    $sql = "SELECT * FROM admin_information WHERE admin_information_unique_id='$session_id'";
    $data_db = $db->select($sql);
    $data = $data_db->fetch_assoc();



    $searchError = false;

    if (!isset($_GET['search'])){
        $sql = "SELECT * FROM tax_payers_data ORDER BY tax_payers_data_last_update_date DESC";
        $tax_payer_result = $db->select($sql);
        $searchData = "";
    } else{

        $searchData = $_GET['search'];
        $isOneWord = strpos($searchData,' ');
        if ($isOneWord !== false){
            $searchError = true;
            $errorData = "Only single word or number is allowed in search";
        }else{
            $sql = "SELECT * FROM tax_payers_data WHERE tax_payers_data_ssn LIKE '%$searchData%' OR tax_payers_data_lname LIKE '%$searchData%' ORDER BY tax_payers_data_last_update_date DESC";
            $tax_payer_result = $db->select($sql);
        }
    }


    ?>
    <div id="admin-dash-parent" class="container">
        <div id="admin-dash-inner" class="container">
                       <?php include_once 'nav-header.php';?>
            <div class="row valign-wrapper">
                <div class="col s8">
                    <h2 id="admin_dash_header">Admin Dashboard</h2>
                </div>
                <div class="col s4">
                    <?php if (isset($session_id)){?>
                        <button id="logout" class="btn-large waves-effect waves-light red right" type="button"><a href="/logout.php?argument=logOut" class="white-text">Logout</a></button>
                    <?php }?>
                </div>
            </div>

            <form action="/admin-dashboard">
                <div class="row valign-wrapper">
                    <div class="input-field col s2">
                        <p>Search</p>
                    </div>
                    <div class="input-field col s7">
                        <input type="text" class="bg-radius search_admin" name="search" placeholder="Search for Last Name or SSN" value="<?php echo $searchData;?>">
                    </div>

                    <div class="input-field col s3">
                        <button class="btn-small waves-effect waves-light green " type="submit"><a class="white-text valign-wrapper"><i class="tiny material-icons">search</i>Search</a></button>
                    </div>
                </div>
            </form>

            <?php if ($searchError === true){?>
                <div class="row">
                    <div class="container">
                        <div class="col s12">
                            <p class="errorData"><?php echo $errorData;?></p>
                        </div>
                    </div>
                </div>
            <?php
            }

            if (isset($_GET['current_page'])){
                $current_page = $_GET['current_page'];
            } else if (isset($_SESSION['current_page'])){
                $current_page = $_SESSION['current_page'];
            }
            $total_data = $tax_payer_result->num_rows;
            $data_per_iteration = 10;
            $total_num_page = intval($total_data/$data_per_iteration);
            $start_index = ($current_page - 1) * $data_per_iteration;
            $last_index = $current_page * $data_per_iteration;

            if ($total_num_page <=1){
                $total_num_page = 1;
            }
            admin_data_iteration($current_page,$total_data,$data_per_iteration,$total_num_page,$start_index,$last_index,$tax_payer_result);

            ?>
        </div>

        <?php include_once "footer-desclaimer.php";?>

    </div>


    <?php
}