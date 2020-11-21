<?php




$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "logindb";

$logintext = $_POST['logintext']



$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname)



if (!empty($_POST['mainloginform'])) 
{
   
   if $logintext = login (login_name)
   {

      echo "code matched"
   }
   else
   {
      echo "code required";
      die(); 
   }
}






     




?>