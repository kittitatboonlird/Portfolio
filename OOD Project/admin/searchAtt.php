<?php session_start();
    require_once('../connectdata.php');
    $SearchT = $_POST['Title'];
    $sql = "SELECT * FROM attraction WHERE title LIKE '%$SearchT%'";
    $result = mysqli_query($connection,$sql);
    $row = mysqli_fetch_array($result);

    if(is_array($row)) {
        header("location:manageplace.php?id={$row['Title']}");
    } else {
        echo '<script language="javascript">';
        echo 'alert("ไม่พบ")';
        echo '</script>';
        echo '<script>window.location="manageplace.php";</script>';
    }
  