<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Place Manage</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../Style.css">
    </head>
    <body>
        <?php
            require_once('checkad.php');
            require_once('../connectdata.php');
            checkadin();
        ?>
        <br>
            <div class="full-backplate">
                <div class="center ">
                    <h1 class="head-color">Place Manage</h1>
                
                <a class="button button-wid" href="adplace.php">Add Place</a>
                <a class="button button-wid" href="admanage.php">Back</a><br>
                <div class="center ">
                    <h2>Place List</h2>
                </div>
                <form action="searchAtt.php" method="post">
                    <input name="Title" class="box text-wid" type="text" placeholder="Title">
                    <button type="submit">ค้นหาชื่อ</button>
                </form><br>
                <?php
                    if(isset($_GET['id'])){
                        $foundT = $_GET['id'];
                        echo "FOUND!";
                        ?>
                        <table align="center" border="1" cellspacing="3" bgcolor="#fffadc" width="auto">
                            <thead>    
                                <th width="auto">Title</th>
                                <th width="auto">Picture</th>
                                <th width="auto">Description</th>
                            </thead>
                            <br>
                            <?php
                                $sql = "SELECT * FROM attraction WHERE title = '$foundT'";
                                $result = mysqli_query($connection, $sql);
                                while($att = mysqli_fetch_assoc($result)){
                                    $aid = $att['title'];
                                    ?> <tr><?php
                                    foreach ($att as $item) {
                                        ?><td><?php echo $item; ?></td>
                                    <?php
                                    }
                                    ?>
                                    </tr><br><?php

                                }
                                ?>
                            </table>
                        <?php
                    }else{
                    ?>
                    <br>
                    <table align="center" border="1" cellspacing="3" bgcolor="#fffadc" width="auto">
                        <thead>    
                                <th width="auto">Title</th>
                                <th width="auto">picture</th>
                                <th width="auto">Description</th>                                
                        </thead>
                        <br>
                        <?php
                            $sql = "SELECT * FROM attraction";
                            $result = mysqli_query($connection, $sql);
                            
                            while($att = mysqli_fetch_assoc($result)){
                                ?> <tr><?php
                                foreach ($att as $item) {
                                    ?><td><?php echo $item; ?></td>
                                <?php
                                }
                                ?>

                        </tr><br><?php
                            } 
                        }
                        ?>
                </table>
            </div>

        </div>
    </body>
</html>