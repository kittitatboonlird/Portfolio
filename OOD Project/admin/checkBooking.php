<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Check Booking</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../Style.css">
    </head>
    <body>
        <?php
            require_once('checkad.php');
            require_once('../connectdata.php');
            checkadin();
        ?>
        <div class="full-backplate">
            <div class="center">
                <h1 class="head-color">Booking Check List</h1>
                <form action="searchbooking.php" method="post">
                    <input name="sBook" class="box text-wid" type="text" placeholder="Booking ลูกค้า">
                    <button type="submit">ค้นหาBooking</button>
                </form><br>
                <?php
                    if(isset($_GET['id'])){
                        $foundno = $_GET['id'];
                        echo "FOUND!";
                        ?>
                        <table align="center" border="1" cellspacing="3" bgcolor="#fffadc" width="auto">
                            <thead>    
                                <th width="auto">Booking No.</th>
                                <th width="auto">Name</th>
                                <th width="auto">Room</th>
                                <th width="auto">Price</th>
                                <th width="auto">Date Check in</th>
                                <th width="auto">Date Check out</th>
                            </thead>
                            <br>
                            <?php
                                $sql = "SELECT * FROM booking WHERE Booking_ID = '$foundno'";
                                $result = mysqli_query($connection, $sql);
                                while($book = mysqli_fetch_assoc($result)){
                                    ?> <tr><?php
                                    foreach ($book as $item) {
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
                            <th width="auto">Booking No.</th>
                            <th width="auto">Name</th>
                            <th width="auto">Room</th>
                            <th width="auto">Price</th>
                            <th width="auto">Date Check in</th>
                            <th width="auto">Date Check out</th>
                        </thead>
                        <br>
                        <?php
                            $sql = "SELECT * FROM booking";
                            $result = mysqli_query($connection, $sql);
                            
                            while($book = mysqli_fetch_assoc($result)){
                                ?> <tr><?php
                                foreach ($book as $item) {
                                    ?><td><?php echo $item; ?></td>
                                <?php
                                }
                                ?></tr><br><?php
                            } 
                        }
                        ?>
                </table>
            <br>
            <a class="button button-wid" href="admanage.php">Back</a>
            </div>
        </div>
    </body>
</html>