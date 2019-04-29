<?php 
    session_start();
    $id = $_GET['id'];
    $rnum = $_GET['numb'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Edit Date</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="Style.css">
    </head>
    <body>
        <div class="backplate">
            <div class="center">
                <h1 class = "head-color">Edit Date</h1>
                <form action="checkroom.1.php" method="post">
                    <label>
                        Check in <p></p>
                        <input name="indate" type="date" class="text-wid">
                    </label><p></p>
                    <label>
                        Check Out <p></p>
                        <input name="outdate" type="date" class="text-wid">
                    </label><p></p>
                    <input type="hidden" name = "bnum" value="<?php echo $id; ?>">
                    <input type="hidden" name = "rnum" value="<?php echo $rnum; ?>">
                    <button type="submit">แก้ไข</button><br>
                </form>
            </div>
        </div>
    </body>
</html>