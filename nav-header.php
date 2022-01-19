<?php
$current_page = ucwords( str_ireplace(array('-', '.php'), array(' ', ''), basename($_SERVER['PHP_SELF']) ) );

$user_type = $new_ses->get_session('user_type');
if($user_type === 'admin'){
    $home = '/admin-dashboard';
    $display = '';
}else{
    $home = '/';
    $display = 'displayNone';
}
?>
<div class="row valign-wrapper">
    <nav class="nav-extended">
        <div class="row nav-wrapper logo_header">
            <div class="col s12">
                <h5>HBC Tax & Accounting Inc.</h5>
                <div class="information-container">
                    <div class="address">
                        <h6>Address:</h6>
                        <h6>200 Little Falls St, #502 Falls Church, VA 22046</h6>
                        <h6>7857 Heritage Dr, #D Annandale, VA 22003</h6>
                    </div>
                    <div class="others-info-container">
                        <h6>Phone: <a href="tel:703-942-8443">703-942-8443</a>, <a href="tel:703-890-2907">703-890-2907</a></h6>
                        <h6>Email: <a href="mailto:info@hbctaxacct.com">info@hbctaxacct.com</a></h6>
                        <h6>Website: <a href="www.hbctaxacct.com">www.hbctaxacct.com</a></h6>
                    </div>
                </div>
                <ul id="nav-mobile" class="right hide-on-med-and-down <?php echo $display;?>">
                    <li><a href="/admin-dashboard">Home</a></li>
                    <li><a href="/users">Users</a></li>
                    <li><a href="/change-password">Change Password</a></li>
                </ul>
            </div>
        </div>
<!--        user page tabs          -->
        <?php
        if ($current_page === "Users"){
            ?>
            <div class="nav-content">
                <ul class="tabs tabs-transparent">
                    <li id="allUserTab" class="tab" onclick="allUserTab()"><a class="active">All User</a></li>
                    <li class="tab" id="addNewUserTab" onclick="addNewUserTab()"><a>Add User</a></li>
                </ul>
            </div>

            <?php
        }
        ?>


    </nav>
</div>