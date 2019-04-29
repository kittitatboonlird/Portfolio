<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>CMU Hotel</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="Style2.css">
        <link rel="stylesheet" href="Style.css">
    </head>
    <body>
        <?php
            require_once('connectdata.php');
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $datein = $_GET['checkindate'];
                $dateout = $_GET['checkoutdate'];
            }
        ?>
        <div class="split left">
            <div class="centered">
                <?php
                    $sql = "SELECT Picture FROM room_type WHERE Type_ID = $id";
                    $result3 = mysqli_query($connection, $sql);
                    $count = 1;
                    if($result3){
                        while($row = $result3->fetch_assoc()){
                            foreach($row as $pic){
                                echo "<img src = \"picture/".$pic."\">";
                            }
                            $count = $count + 1;
                        }
                    }else {
                        echo "hahaha";
                    }
                ?><a class="button button-wid" href="search.php">Back</a>
            </div>
        </div>

        <div class="split right">
            <h1 class = "head-color">ROOM</h1>

            <div class="row">
                <?php
                $sql = "SELECT Type_Name, price, detail
                        FROM room_type
                        WHERE Type_ID = $id";
                $result = mysqli_query($connection, $sql);

                

                if ($result) {
                    while($row = $result->fetch_assoc()) {
                        echo "ประเภทห้อง : " .$row["Type_Name"]. "<p></p> ราคา : "  .$row["price"]. " ต่อคืน<p></p>   รายละเอียด : " .$row["detail"];
                    }
                }

                ?>
                <br><br>
                <form action="checkbeforebook.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <input type="hidden" name="datein" value="<?php echo $datein; ?>">
                    <input type="hidden" name="dateout" value="<?php echo $dateout; ?>">
                    <button type="submit">Book</button>
                </form>
                <!-- <a class="button button-wid" href="checkbeforebook.php">Book</a> -->
                
            </div>
            <br> <h2>Review</h2>
            <?php
                $sql = "SELECT Review FROM review WHERE typeID = $id";
                $result2 = mysqli_query($connection, $sql);
                $count = 1;
                if($result){
                    while($row = $result2->fetch_assoc()){
                        echo "ความเห็นที่ " . $count . ":";
                        foreach($row as $arr){
                            echo "<div class = full-backplatereview> " . $arr . "</div><br>";
                        }
                        $count = $count + 1;
                    }
                }else {
                    echo "hahaha";
                }
            ?>
            <form action="addreview.php" method = "post">
                <div><b>แสดงความคิดเห็น</b></div>
                <textarea name="recom" id="" cols="108" rows="5"></textarea>
                <input type="hidden" name = "id" value = "<?php echo $id; ?>">
                <br>
                <button type="submit">โพส</button>
            </form><br>
            
        </div>
    </body>
</html>