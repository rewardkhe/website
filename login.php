<?php

$logintext = $_POST['logintext'];
$loginid = $_POST['loginid'];
if ($loginid == "$loginid" && $logintext == "password")
{
 header('Location: home.php');
}
else{
 header("location: index.php?error=emptyinput");
}
?>
