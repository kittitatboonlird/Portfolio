<?php session_start();
    require_once('../connectdata.php');
    $number = $_GET['id'];
    $sql = "DELETE FROM room WHERE Room_ID = $number";
    $result = mysqli_query($connection, $sql);
    if($result){
        header('location: manageroom.php');
    }else{
        echo "Can't Delete";
    }

    