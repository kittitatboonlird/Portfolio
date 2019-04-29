<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../Style.css">
    </head>
    <body>
        <?php
            require_once('checkad.php');
            checkadin();
        ?>
        <br>
        <div class="backplate">
            <div class="center">
                <h1 class="head-color">Manage</h1>
                <a class="button button-wid" href="manageroom.php">Room</a>
                <a class="button button-wid" href="manageplace.php">Place</a><br><br>
                <a class="button button-wid" href="checkBooking.php">Check</a>
                <a class="button button-wid" href="adlogout.php">Log out</a>
            </div><br>
        </div>
    </body>
</html>