<?php
  $hostname = "fdb31.runhosting.com";
  $username = "3923754_stums";
  $password = "bin123456789C";
  $dbname = "3923754_stums";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
