<?php
  $servername = "localhost";
  $username = "admin";
  $password = "password";
  $dbname = "thecrypt";
  $channel_host = $_GET['channel_host'];
  $channel_name = $_GET['channel_name'];
  $channel_password = $_GET['channel_password'];

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  //Inserts Data
  $sql = "INSERT INTO channels (`Channel Name`, `Channel Password`, `Channel Host`)
  VALUES ('$channel_name', '$channel_password', '$channel_host')";
  //Validation
  if ($conn->query($sql) === TRUE){
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  //Disconnects
  $conn->close();
?>
