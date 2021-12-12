<?php
    include_once '../init.php';
    include_once '../classes/User.php';

    $status = $user->dep_updater($_POST['data'],$_POST['counter']);

//    for($i = 1; $i<=$counter;$i++){
//        echo 'depdsiabled '.$i." is: ".$data['depdsiabled'.$i].'<br>';
//    }


//    print_r($data['depname[]']) ;