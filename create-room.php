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
  //Inserts Channel Data
  $sql = "INSERT INTO channels (`Channel Name`, `Channel Password`, `Channel Host`)
  VALUES ('$channel_name', '$channel_password', '$channel_host')";
  if ($conn->query($sql) === TRUE){
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  //Gets New Channel ID
  if ($conn->query($sql) === TRUE) {
    $channel_id = $conn->insert_id;
    echo "New record created successfully. Last inserted ID is: " . $channel_id;
  }
  else{
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  //Creates Channel Table
  $channel_id = "Channel_".$channel_id;
  $sql = "CREATE TABLE $channel_id(
  Members VARCHAR(30) NOT NULL,
  Messages VARCHAR(30) NOT NULL,
  Time TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";
  if ($conn->query($sql) === TRUE){
    echo "Table MyGuests created successfully";
  } else{
    echo "Error creating table: " . $conn->error;
  }
  //Inserts Channel Data
  $sql = "INSERT INTO $channel_id (Members, Messages, Time)
  VALUES ('$channel_host', '$channel_host joined', CURRENT_TIMESTAMP)";
  if ($conn->query($sql) === TRUE){
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  //Disconnects
  $conn->close();
?>
