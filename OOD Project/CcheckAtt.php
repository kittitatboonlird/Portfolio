<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Attraction</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="Style.css">
    </head>
    <body>
        <?php
            require_once('connectdata.php');
            $user = $_SESSION['User'];
        ?>
        <div class="full-backplate">
            <div class="center">
                <h1 class="head-color">Attraction</h1>
                <form action="CsearchAtt.php" method="post">
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
                                    ?> <tr><?php
                                    foreach ($att as $item) {
                                        ?><td><?php echo $item; ?></td>
                                    <?php
                                    }
                                    ?></tr><br><?php
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
                            <th width="auto">Picture</th>
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
                                ?></tr><br><?php
                            } 
                        }
                        ?>
                </table>

                <br><br>
                <a class="button button-wid" href="search.php">Back</a> <a class="button button-wid" href="index.php">Home</a>
            </div>        
        </div>
    </body>
</html>