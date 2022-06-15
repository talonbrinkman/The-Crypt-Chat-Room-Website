<?php
  include 'dbh.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <link href="https://fonts.googleapis.com/css2?family=Caveat&family=Kdam+Thmor+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
    <link rel="icon" type="image/x-icon" href="favicon.png">
    <title>The Crypt | Rooms</title>
    <script src="https://kit.fontawesome.com/56a1441670.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </head>
  <body onload="changePageStatus()">
    <div class="header">
      <div class="inner-header">
        <div class="logo-container">
          <img class="logo" src="favicon.png"><h1>The<span> Crypt</span></h1></img>
        </div>
        <ul class="navigation">
          <a href="index.php"><li id="home">Home</li></a>
          <a href="channels.php"><li>Channels</li></a>
        </ul>
      </div>
    </div>
    <div class="channel-viewer" id="channel-viewer">
      <div class="refresh">
        <form action="channels.php">
          <button onclick="refreshButton()">Refresh</button>
        </form>
      </div>
      <?php
        $sql = "SELECT * FROM channels";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
          while ($row = mysqli_fetch_assoc($result)){
            echo "<div class='channel'><div class='channel-info'><h1>" . $row['Channel Name'] . "</h1><a>Host - " . $row['Channel Host'] . "</div></a><div class='channel-join'><button>Join</button></div></div>";
          }
        }
        else{
          //echo "<a>No Channels</a>";
        }
      ?>
    </div>
    <script type="text/javascript">
      function changePageStatus(){
        document.getElementById("rooms").style.color = "#e8a12e";
      }
      function refreshButton(){
        const channel_viewer = document.getElementById("channel-viewer");//Parent
        var myDiv = document.createElement("div");//Child
        myDiv.classList.add("channel");
        var host = "<?php echo"$host"?>";
        myDiv.innerHTML = "<div class='channel'><div class='channel-info'><h1>"+ host + "</h1><a>Host: </div></a><div class='channel-join'><button>Join</button></div></div>";
        channel_viewer.appendChild(myDiv);
      }
    </script>
  </body>
  <footer>
    <div class="inner-footer">
      <div class="footer-container">
        <img src="favicon.png">
      </div>
      <div class="footer-third">
        <h1>Need Help?</h1>
        <a href="#">Terms &amp; Conditions</a>
        <a href="#">Privacy Policy</a>
      </div>
      <div class="footer-third">
        <h1>More</h1>
        <a href="#">Donate</a>
        <a href="#">Encryption</a>
      </div>
      <div class="footer-third">
        <h1>Follow Us</h1>
        <a>
          @ The Crypt Organization
          4257 Isleta Boulevard Southwest,
          Albuquerque, New Mexico 87105
        </a>
      </div>
    </div>
  </footer>
</html>
