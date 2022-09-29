<?php
  $serverName = '127.0.0.1';
  $dbUsername = 'jordan';
  $dbPassword = 'jordan';
  $dbName = 'training'; 
  $dbPort = 3306;

 $conn = mysqli_connect($serverName,$dbUsername,$dbPassword,$dbName);
  //$mysqli = new mysqli("127.0.0.1", "jordan", "jordan", "training");

  echo $conn->host_info;

  echo ' tentative de connection' ;
	
  if ($conn->connect_error) {
    echo 'Errno: '.$conn->connect_errno;
    echo '<br>';
    echo 'Error: '.$conn->connect_error;
    exit();
  }

  echo 'Success: A proper connection to MySQL was made.';
  echo '<br>';
  echo 'Host information: '.$conn->host_info;
  echo '<br>';
  echo 'Protocol version: '.$conn->protocol_version;
  
?>
