<?php session_start();

unset($_SESSION['adUser']);
header('location: adin.php');
