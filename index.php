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
             <input name="logintext" class="form-field" type="text"  placeholder="Enter Code" required>
            <button>Log In</button>
        </div>
     </form>

<?php

if (isset($_GET["error"])) {
     if ($_GET["error"] == "emptyinput") {
        echo "<p>Incorrect code</p>";
      }
    }
   ?>

</body>

<footer>
   
</footer>

</html>
