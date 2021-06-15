<?php
  include_once ('header.php');
?>


<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Reward Khe</title>
    <link rel="stylesheet" href="CSS/style.css">
    <script src="script.js"> </script>
   
</head>

<body>

<!-- <h1> Reward Khe </h1> -->
    <form name= "mainloginform" class="loginformm" action="login.php" method="POST" >
    
        <div class="form-group" >
            <input name="logintext" class="form-field" type="text"  placeholder="Enter Password" required>
            <button>Submit</button>
        </div>

     </form>

    

<?php

if (isset($_GET["error"])) {
     if ($_GET["error"] == "emptyinput") {  
        echo "Wrong password";
      }
    }
   ?>



<footer>
    © 2021 rewardkhe. All rights reserved.
</footer>
</body>
</html>
