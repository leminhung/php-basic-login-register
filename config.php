<?php 
  /* 
    This file contains database configuation assuming you are running 
    mysql using user "root" and your root password 
  */

  define('DB_SERVER', "localhost");
  define('DB_USERNAME', "root");
  define('DB_PASSWORD', "12345678");
  define('DB_NAME', "loginsystem");

  // Try to connecting to the Database
  $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

  // Check the connection
  if($conn === false) {
    dir("Error: Cannot connect");
  }

  

?>