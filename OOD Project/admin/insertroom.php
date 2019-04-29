<?php session_start();
    require_once('../connectdata.php');
    $rnum = $_POST['numRoom'];
    $tnum = $_POST['room_type'];
    $sql = "INSERT INTO room VALUES($rnum,$tnum)";
    $result = mysqli_query($connection, $sql);
    if($result){
        header('location: manageroom.php');
    }else{
        echo "ERROR";
    }