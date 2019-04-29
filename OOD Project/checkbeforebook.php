<?php session_start();
require_once('connectdata.php');
$typeId = $_POST['id'];
$checkindate = $_POST['datein'];
$checkoutdate = $_POST['dateout'];

$sql = "SELECT price FROM room_type WHERE Type_ID = '$typeId'";
$result2 = mysqli_query($connection, $sql);//คำนวนprice
$row = mysqli_fetch_assoc($result2);
$dprice = $row['price'];
$calculate =strtotime("$checkoutdate")-strtotime("$checkindate");
$summary = floor($calculate / 86400);
$price = $dprice * $summary;
echo $price;
$sql = "SELECT * FROM room
    WHERE type = {$typeId}
        AND NOT EXISTS (
            SELECT * FROM booking
                WHERE booking.R_ID = room.Room_ID AND '{$checkindate}' < booking.Check_out_date AND '{$checkoutdate}' > booking.Check_in_date
        )
    LIMIT 1";
$result = mysqli_query($connection, $sql);
$room = mysqli_fetch_assoc($result);
if ($room) {
    // ว่าง
    $sql = "INSERT INTO booking VALUES (NULL,'" . $_SESSION['User'] . "','" . $room['Room_ID'] . "',$price,'$checkindate','$checkoutdate')";
    $result = mysqli_query($connection, $sql);
    if ($result) {
        
        echo '<script language="javascript">';
        echo 'alert("จองเรียบร้อยแล้ว")';
        echo '</script>';
        echo '<script>window.location="CcheckAtt.php";</script>';//link ไปสถานที่เที่ยว
    } else {
        echo '<script language="javascript">';
        echo 'alert("ขออภัย ไม่สามารถจองห้องได้")';
        echo '</script>';
        echo '<script>window.location="search.php";</script>';
    }
} else {
    echo '<script language="javascript">';
    echo 'alert("ขออภัย ห้องไม่ว่าง")';
    echo '</script>';
    echo '<script>window.location="search.php";</script>';
}
?>