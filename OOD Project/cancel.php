<?php session_start();
require_once('connectdata.php');
$id = $_GET['id'];
$sql = "DELETE FROM booking WHERE Booking_ID = {$id}";
$result = mysqli_query($connection, $sql);

if($result){
    echo '<script language="javascript">';
    echo 'alert("ยกเลิกสำเร็จ")';
    echo '</script>';
    echo '<script>window.location="editBook.php";</script>';
}else{
    echo '<script language="javascript">';
    echo 'alert("ยกเลิกไม่สำเร็จ")';
    echo '</script>';
    echo '<script>window.location="editBook.php";</script>';
}