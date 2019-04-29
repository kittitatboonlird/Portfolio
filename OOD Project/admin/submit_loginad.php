<?php session_start();
$username = $_POST['adUser'];
$password = $_POST['adPassword'];

if ($username == 'admin' && $password == 'cmuhotel') {
    $_SESSION['adUser'] = 'admin';
    header('location: admanage.php');
} else {
    header('location: adin.php?error=true');
}
