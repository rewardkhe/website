<?php
  include_once ('header.php');
?>


<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8" />
    <title> Log in</title>
    <link rel="stylesheet" href="CSS/style.css">
    <script src="script.js"> </script>
   
</head>

<body>

    <form name= "mainloginform" class="loginformm" action="login.php" method="POST" >
    
        <div class="form-group" >
            <select name="selected">
            <option value="0" disabled selected hidden>Please Choose</option>
            <option value="1">Right Password</option>
            <option value="2">Wrong Password</option>
        
            </select>
            <button>Submit</button>
            <!-- submits the form which are processed in login.php file -->
        </div>

     </form>


<?php



?>



<?php

if (isset($_GET["error"])) {
     if ($_GET["error"] == "emptyinput") {  
        echo '<script>alert("wrong password")</script>';
      }
    }
   ?>

<footer> </footer>

</body>
</html>
