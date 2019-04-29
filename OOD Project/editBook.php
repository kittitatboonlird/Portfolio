<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Edit Booking</title>
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
                <h1 class="head-color">Book Edit</h1>
                <table align="center" border="1" cellspacing="3" bgcolor="#fffadc" width="auto">
                    <thead>    
                        <th width="auto">Booking No.</th>
                        <th width="auto">Username</th>
                        <th width="auto">Room</th>
                        <th width="auto">Price</th>
                        <th width="auto">Date Check in</th>
                        <th width="auto">Date Check out</th>
                        <th width="auto">Edit</th>
                        <th width="auto">Cancel</th>

                    </thead>
                    <br><?php
                    $sql = "SELECT * FROM booking WHERE Uname = '$user' ORDER BY Booking_ID ASC";
                    $result = mysqli_query($connection,$sql);
                    while($book = mysqli_fetch_assoc($result)){
                        $num = $book['Booking_ID'];
                        $roomid = $book['R_ID'];
                        ?> <tr><?php
                        foreach ($book as $item) {
                            ?><td><?php echo $item; ?></td>
                        <?php
                        }
                        ?>
                        <td>
                        <a href="edit.php?id=<?php echo $num;?>&numb=<?php echo $roomid;?>">Edit</a>
                        </td>
                        <td>
                            <a href="cancel.php?id=<?php echo $num?>">Cancel</a>
                        </td>
                        </tr><br><?php
                    }
                    ?>
                </table>
                <br><br>
                <a class="button button-wid" href="search.php">Back</a> <a class="button button-wid" href="index.php">Home</a>
            </div>        
        </div>
    </body>
</html>