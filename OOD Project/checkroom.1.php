<?php session_start();
    require_once('connectdata.php');
    $booking = $_POST['bnum'];
    $checkindate = $_POST['indate'];
    $checkoutdate = $_POST['outdate'];
    $room = $_POST['rnum'];
    $sql = "SELECT * FROM room WHERE Room_ID = {$room}";
    $resultr = mysqli_query($connection, $sql);
    $typeI = mysqli_fetch_assoc($resultr); //$typeI['type'];
    $typeId = $typeI['type'];
    $sql = "SELECT * FROM room
        WHERE type = {$typeId}
            AND NOT EXISTS (
                SELECT * FROM booking
                    WHERE booking.R_ID = room.Room_ID AND '{$checkindate}' < booking.Check_out_date AND'{$checkoutdate}' > booking.Check_in_date
            )";
    $result = mysqli_query($connection, $sql);
    $num_rows = mysqli_num_rows($result);
    if ($num_rows > 0 && $checkindate != NULL && $checkoutdate!=NULL && strcmp($checkindate,$checkoutdate)<0) {
    header("location: change.php?id=$typeId&checkindate=$checkindate&checkoutdate=$checkoutdate&book=$booking");
    ?>
    
    <?php
    } else if($checkindate == NULL && $checkoutdate == NULL){
        echo '<script language="javascript">';
        echo 'alert("กรุณาใส่วันที่")';
        echo '</script>';
        echo '<script>window.location="edit.php?id=$typeId&numb=$room";</script>';
    }else{
        echo '<script language="javascript">';
        echo 'alert("ไม่มีห้องพักว่างในวันที่เลือกค่ะ")';
        echo '</script>';
        echo '<script>window.location="editBook.php";</script>';
        
    }