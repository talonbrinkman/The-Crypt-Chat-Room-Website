<?php
  $servername = "localhost";
  $username = "admin";
  $password = "password";
  $dbname = "thecrypt";
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  /*$servername = "localhost";
  $username = "admin";
  $password = "password";
  $dbname = "thecrypt";
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT `Channel ID`, `Channel Name`, `Channel Password`, `Channel Host` FROM channels";
  $result = $conn->query($sql);

  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
      $host = $row["Channel Host"];
      $channel_name = $row["Channel Name"];
      $channel_password = $row["Channel Password"];
      $channel_ID = $row["Channel ID"];

      echo "Channel ID: " . $row["Channel ID"]. " - Channel Name: " . $row["Channel Name"] . " " . $row["Channel Password"]. " Channel Host:" . $host . "<br>";
    }
  }
  else{
    echo "0 results";
  }
  $conn->close();*/
 ?>
