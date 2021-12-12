<?php
    if( isset($_GET['argument']) && $_GET['argument'] == 'logOut' && !session_id() ) {
        session_start();
        $_SESSION['special_id'] = "";
        session_destroy();
        header("Location: /" );
        exit;

    }