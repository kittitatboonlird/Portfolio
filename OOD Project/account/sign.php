<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../Style.css">
    </head>
    <body>
    <script language="javascript">
        function fncSubmit()
        {

            if(document.form1.txtPassword.value == "")
            {
                alert('กรุณากรอก Password');
                document.form1.txtPassword.focus();		
                return false;
            }	

            if(document.form1.txtConPassword.value == "")
            {
                alert('กรุณากรอก Confirm Password');
                document.form1.txtConPassword.focus();		
                return false;
            }	

            if(document.form1.txtPassword.value != document.form1.txtConPassword.value)
            {
                alert('Confirm Password ไม่ตรงกัน');
                document.form1.txtConPassword.focus();		
                return false;
            }	



            document.form1.submit();
        }
    </script>
        <br>
        <div class="backplate">
            <div class="center">
                <h1 class="head-color">Sign Up</h1>
                    <form name="form1" method="post" action="submit_signup.php" OnSubmit="return fncSubmit();">
                        <p>
                        <label>
                            <input name="username" class="box text-wid" aria-required="true" type="text" placeholder="Username" required>
                        </label>
                        </p>
                        <p>
                        <label>
                            <input name="txtPassword" type="password" id="txtPassword" class="box text-wid" aria-required="true" placeholder="Password" required>
                        </label>
                        </p>
                        <p>
                        <label>
                            <input name="txtConPassword" type="password" id="txtConPassword" class="box text-wid" aria-required="true" placeholder="Confirm Password" required>
                        </label>
                        </p>
                        <p>
                        <label>
                            <input name="fName" class="box text-wid" aria-required="true" type="text" placeholder="ชื่อ (Name)" required>
                        </label>
                        </p>
                        <p>
                        <label>
                            <input name="lName" class="box text-wid" aria-required="true" type="text" placeholder=" สกุล(Last Name)" required>
                        </label>
                        </p>
                        <p>
                        <label>
                            <input name="email" class="box text-wid" aria-required="true" type="email" placeholder="E-mail" required>
                        </label>
                        </p>
                        <p>
                        <label>
                            <input name="phoneNum" class="box text-wid" aria-required="true" type="text" placeholder="Phone Number" required>
                        </label>
                        </p>
                        
                        <button type="submit" name="Submit" value="Save">Sign Up</button>
                    </form>
                Already have Account Click here <a class="button button-wid" href="login.php">Login</a>
                <p>
                </p>
                <a class="button button-wid" href="../index.php">Home</a>
            </div>
        </div>
    </body>
</html>






