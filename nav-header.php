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
            <div class="col s12 l2">
                <a href="<?php echo $home;?>" class="brand-logo"><img class="logo" src="assets/HBC-logo.png" alt="Logo"></a>
            </div>
            <div class="col s12 l10">
                <a href="<?php echo $home;?>" class="float_left">HBC Tax & Accounting Inc</a>
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