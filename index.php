<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Reward Khe</title>
    <link rel="stylesheet" href="CSS/style.css">
   
</head>

<body>
    <form name= "mainloginform" class="loginformm" action="login.php" method="POST" >
    
        <div class="form-group" >
            <input name="loginid" class="form-field" type="text"  placeholder="Username" required>
            <input name="logintext" class="form-field" type="text"  placeholder="Password" required>
            <button>Log In</button>
        </div>
     </form>

     <p>Sign up is not available atm, you can use your name for username and "password" for password. </p>

<?php

if (isset($_GET["error"])) {
     if ($_GET["error"] == "emptyinput") {
        set_time_limit(2);
        echo "please check it again";
      }
    }
   ?>

</body>

<footer>
   
</footer>

</html>
