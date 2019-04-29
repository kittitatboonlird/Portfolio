<?php session_start();
$username = $_POST['username'];
$password = $_POST['password'];


$connection = mysqli_connect("localhost","root","","hotel") or die("Error: " . mysqli_error($connection));
mysqli_query($connection, "SET NAMES 'utf8' "); 
if (!$connection) {
    echo 'Cannot connect to MySql';
} 


$sql = "SELECT * FROM person WHERE Username='$username' AND _Password='$password' ";
$result = mysqli_query($connection, $sql);

$row = mysqli_fetch_array($result);

if(is_array($row)) {
    $_SESSION['User'] = $username;
    header('location: ../search.php');

} else {
    echo '<script language="javascript">';
    echo 'alert("Username หรือ Password ผิด")';
    echo '</script>';
    echo '<script>window.location="login.php";</script>';
}
    
