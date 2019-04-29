<?php session_start();
    require_once('../connectdata.php');
    $title = $_POST['pName'];
    $detail = $_POST['detailP'];
    $timestamp = time();
    if ($_FILES['rPicture']['error'] == UPLOAD_ERR_OK) {
    move_uploaded_file($_FILES['rPicture']['tmp_name'], "picture/{$timestamp}");
    } else {
    header('location: manageplace.php?error=upload');
    exit;
    }
    $sql = "INSERT INTO attraction VALUES($title,$timestamp,$detail)";
    $result = mysqli_query($connection, $sql);
    if($result){
        header('location: manageplace.php');
    }else{
        echo "ERROR";
    }