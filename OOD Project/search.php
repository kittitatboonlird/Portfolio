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
        <div class="backplate">
            <h1 class="center head-color">Search</h1>
            <form action="checkroom.php" method="post"> <!--checkroom.php-->
            <div class="center">
                <label>
                    Room type <p></p>
                    <select name="roomType" class="text-wid">
                        <option value="1">Single Room</option>
                        <option value="2">Double Room</option>
                        <option value="3">Triple Room</option>
                        <option value="4">Deluxe Room</option>
                        <option value="5">Suit Room</option>
                    </select>
                </label>
                <p></p>
                <label>
                    Check in <p></p>
                    <input name="indate" type="date" class="text-wid">
                </label><p></p>
                <label>
                    Check Out <p></p>
                    <input name="outdate" type="date" class="text-wid">
                </label><p></p>
                <button type="submit">ค้นหา</button><br>
                <h5><u>หมายเหตุ</u> ท่านสามารถ Check in ได้หลังเวลา 12:00 น. <br> และต้อง Check out ก่อนเวลา 10:00 น.</h5>
                <a class="button button-wid" href="editBook.php">Edit Book</a>
                <a class="button button-wid" href="logout.php">Log out</a>
                <a class="button button-wid" href="index.php">Home</a>
            </div>
            </form>
        </div>
    </body>
</html>