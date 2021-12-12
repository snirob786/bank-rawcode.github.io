<?php
    if (!isset($_SESSION['special_id'])){
        session_start();
        session_destroy();
        header("Location: /" );
        exit;
    }