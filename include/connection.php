<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "pms";
$connect = mysqli_connect("localhost","root","","pms");

// Check connection
if (mysqli_connect_errno($connect))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  else{
    echo "connected";
  }

?>