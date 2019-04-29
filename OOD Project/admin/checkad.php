<?php
function checkadin(){
    if (!isset($_SESSION['adUser'])) {
        header('location: adin.php');
        exit;
    }
}