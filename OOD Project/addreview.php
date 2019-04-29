<?php session_start();
$commend = $_POST['recom'];
$id = $_POST['id'];
require_once('connectdata.php');




mysqli_query($connection, "SET NAMES 'utf8' "); 
if (!$connection) {
    echo 'Cannot connect to MySql';
} 


$sql = "INSERT INTO review VALUES (NULL,'$commend','$id')";


if ($connection->query($sql) === TRUE) {
    echo '<script language="javascript">';
    echo 'alert("สำเร็จ")';
    echo '</script>';
    echo '<script>window.location="search.php";</script>';
} else {
    echo '<script language="javascript">';
    echo 'alert("ไม่สามารถรีวิวได้")';
    echo '</script>';
    echo '<script>window.location="search.php";</script>';
}
