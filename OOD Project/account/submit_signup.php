<?php session_start();
$username = $_POST['username'];
$password = $_POST['txtPassword'];
$fname = $_POST['fName'];
$lname = $_POST['lName'];
$email = $_POST['email'];
$phoneNum = $_POST['phoneNum'];


$connection = mysqli_connect("localhost","root","","hotel") or die("Error: " . mysqli_error($connection));
mysqli_query($connection, "SET NAMES 'utf8' "); 
if (!$connection) {
    echo 'Cannot connect to MySql';
} 


$sql = "INSERT INTO person VALUE ('$username', '$password', '$fname', '$lname', '$email', '$phoneNum')";


if ($connection->query($sql) === TRUE) {
    echo '<script>window.location="login.php";</script>';

} else {
    echo '<script language="javascript">';
    echo 'alert("การสมัครสมาชิกผิดพลาด อาจเกิดจาก Username ที่มีอยู่แล้ว")';
    echo '</script>';
    echo '<script>window.location="sign.php";</script>';
}
