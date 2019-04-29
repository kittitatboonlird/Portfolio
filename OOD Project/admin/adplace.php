<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Manage Place</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../Style.css">
    </head>
    <body>
        <?php
            require_once('checkad.php');
            checkadin();
        ?>
        <div class="backplate">
            <div class="center">
                <br>
                <h1 class="head-color">Place and Event</h1> 
                <form action="insertAtt.php" method = "post" enctype="multipart/form-data">
                    <p>
                        <h2 class="f-color">Name</h2>
                        <input name="pName" class="box text-wid" type="text">
                    </p>
                    <p>
                        <h2 class="f-color">Detail</h2>
                        <textarea name="detailP" cols="65" rows="10"></textarea>
                    </p>
                    <div>
                        <h2>Upload Picture
                            <input type="file" name="rPicture">
                        </h2>        
                    </div>
                    <button type="submit">Add Place</button>
                </form><br>
                <a class="button button-wid" href="manageplace.php">Back</a>
            </div>
        </div> 
    </body>
</html>