<?php 

  session_start();

  define('LOCALHOST', 'localhost');
  define('ROOT', 'root');
  define('PASSWORD', '');
  define('DATABASE', 'bharat_docket');

  $conn =  mysqli_connect(LOCALHOST, ROOT, PASSWORD, DATABASE) or die(mysqli_error());
  $db_select = mysqli_select_db($conn, DATABASE) or die(mysqli_error());


?>