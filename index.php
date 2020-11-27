<?php

$logintext = $_POST['logintext'];

if ($logintext == "admin" )
{
 header('Location: home.html');
}
else{
    echo '<script> alert("Invalid code Homie") </script>';
    header('Location: index.html');
}
?>
