<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Room Manage</title>
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
                    <h1 class="head-color">Room Manage</h1>
                </div>
                <div class="center ">
                <a class="button button-wid" href="admanage.php">Back</a><br>
                    <h2>Room List</h2>
                    <?php
                        $sql = 'SELECT * FROM room_type ORDER BY Type_ID';
                        $result = mysqli_query($connection,$sql);
                        while($type = mysqli_fetch_assoc($result)){
                            echo "<h3>{$type['Type_Name']}</h3>";
                            $sql = "SELECT * FROM room WHERE room.type = {$type['Type_ID']}";
                            $result2 = mysqli_query($connection, $sql);
                            while($room = mysqli_fetch_assoc($result2)){
                                echo "{$room['Room_ID']}  <a href=\"deleteroom.php?id={$room['Room_ID']}\">Delete</a><br>";
                            }
                            ?>
                            <form action = "insertroom.php" method = "post">
                                Input New Room : 
                                <input name = "numRoom" type="text" placeholder="เลขห้อง">
                                <input type="hidden" name="room_type" value="<?php echo $type['Type_ID']; ?>">
                                <button type="submit">Add</button>
                            </form>
                            <?php
                        }
                    ?>
                </div>
                
            </div>
    </body>
</html>