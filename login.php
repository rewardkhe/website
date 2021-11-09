<?php

$value = $_POST['selected'];

if ($value == "1")
{
 header('Location: home.php');
 
}

else{
 header("location: index.php?error=emptyinput");
}

?>
