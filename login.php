<?php

$logintext = $_POST['logintext'];

if ($logintext == "admin" )
{
 header('Location: home.php');
}
else{
 header("location: index.php?error=emptyinput");
}
?>
