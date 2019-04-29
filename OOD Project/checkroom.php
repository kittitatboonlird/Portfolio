<?php session_start();
require_once('connectdata.php');
$typeId = $_POST['roomType'];
$checkindate = $_POST['indate'];
$checkoutdate = $_POST['outdate'];

$sql = "SELECT * FROM room
    WHERE type = {$typeId}
        AND NOT EXISTS (
            SELECT * FROM booking
                WHERE booking.R_ID = room.Room_ID AND '{$checkindate}' < booking.Check_out_date AND'{$checkoutdate}' > booking.Check_in_date
        )";
$result = mysqli_query($connection, $sql);
$num_rows = mysqli_num_rows($result);
    if ($num_rows > 0 && $checkindate != NULL && $checkoutdate!=NULL && strcmp($checkindate,$checkoutdate)<0) {
    header("location: roomDetail.php?id=$typeId&checkindate=$checkindate&checkoutdate=$checkoutdate");
    ?>
    
    <?php
    } else if($checkindate == NULL && $checkoutdate == NULL){
        echo '<script language="javascript">';
        echo 'alert("กรุณาใส่วันที่")';
        echo '</script>';
        echo '<script>window.location="search.php";</script>';
    }else{
        echo '<script language="javascript">';
        echo 'alert("ไม่มีห้องพักว่างในวันที่เลือกค่ะ")';
        echo '</script>';
        echo '<script>window.location="search.php";</script>';
        
    }