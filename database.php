<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "home";
$conn = mysqli_connect($servername, $username, $password,$db);
if (!$conn)
    {
   echo "Connection failed";
}

 ?>