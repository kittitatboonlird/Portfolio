<!DOCTYPE html>
<html>
    <head>
        <title>Admin Log in</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../Style.css">
    </head>
    <body>
        <div class="backplate">
            <div class="center">
                <h1 class="head-color">Admin</h1>
                <form action="submit_loginad.php" method="post">
                    <?php
                       if(isset($_GET['error'])){
                            echo 'Log in Failed';
                        }
                    ?>
                    <br>
                    <p>
                        <label>
                            <h2 class="f-color">Username</h2>
                            <input name="adUser" class="box" type="text" placeholder="Admin Username">
                        </label></p>
                    <p>
                        <label>
                            <h2 class="f-color">Password</h2> 
                            <input name="adPassword" class="box" type="password" placeholder="Admin Password">
                        </label>
                    </p>
                    <button type="submit">Log in</button>
                </form>
                <br>
                <a class="button button-wid" href="../index.php">Back</a>
                <br><br>
            </div>
        </div>            
    </body>
</html>