<?php
   $host = 'localhost';
   $db_user = 'root';
   $db_pass = '1111';
   $db_name = 'login';
   $connect = mysqli_connect($host, $db_user, $db_pass, $db_name);
   if (!$connect) {
      die("Connection failed: " . mysqli_connect_error());
  }
  echo "Connected to database successfully.";
?>