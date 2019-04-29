<?php session_start();
    require_once('../connectdata.php');
    $numbook = $_POST['sBook'];
    $sql = "SELECT * FROM booking WHERE Booking_ID = '$numbook'";
    $result = mysqli_query($connection,$sql);
    $row = mysqli_fetch_array($result);

    if(is_array($row)) {
        header("location:checkBooking.php?id={$row['Booking_ID']}");
    } else {
        echo '<script language="javascript">';
        echo 'alert("ไม่มีเลข Booking นี้")';
        echo '</script>';
        echo '<script>window.location="checkBooking.php";</script>';
    }
  