<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>CMU Hotel</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="Style.css">
    </head>

    <body>
        <br>
        <div class="backplateindex">
            <div class="center">
                <h1 class="head-color">HOTEL</h1>
                <img src="picture/index.jpg" width="90%" height="auto"><br>
                <?php
                    if (isset($_SESSION['User'])) {
                        echo '<div><a class="button button-wid" href="search.php">Search</a>
                        <a class="button button-wid" href="editBook.php">Edit Book</a>
                        <a class="button button-wid" href="logout.php">Log Out</a></div>
                        ';
                    } else {
                        echo '<a class="button button-wid" href="account/login.php">Login</a>
                        <a class="button button-wid" href="account/sign.php">Sign Up</a>
                        <br><a href="admin/adin.php">Admin Login</a>';
                    }
                    ?>
                <p></p>
            </div>
        </div>
    </body>
</html>