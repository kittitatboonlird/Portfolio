<!DOCTYPE html>
<html>
    <head>
        <title>Log in</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../Style.css">
    </head>
    <body>
        <br>
        <div class="backplate">
            <div class="center">
                <h1 class="head-color">Hotel</h1>
                <form action="submit_login.php" method="post">
                    <p>
                    <label>
                        Username <p></p>
                        <input name="username" class="box text-wid" type="text" placeholder="Your Username">
                    </label></p>
                    <p>
                    <label>
                        Password <p></p>
                        <input name="password" class="box text-wid" type="password" placeholder="Your Password">
                    </label></p>
                    <button type="submit">Log in</button>
                </form><br><br>
                Don't have Account yet?<br>Sign Up here
                <a class="button button-wid" href="sign.php">Sign Up</a>
                <p>
                </p>
                <a class="button button-wid" href="../index.php">Home</a>
            </div>
        </div>
    </body>
</html>