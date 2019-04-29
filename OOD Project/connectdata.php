<?php

function check_login() {
    if (!isset($_SESSION['username'])) {
        header('location: login.php');
        exit;
    }
}

$connection = mysqli_connect('localhost', 'root', '', 'hotel');

mysqli_set_charset($connection, "utf8");
if (!$connection) {
    echo 'Cannot connect to MySql';
}
