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
          <img class="logo" src="favicon.png"><h1>The<span> Crypt</span></h1>
        </div>
        <ul class="navigation">
          <a href="index.php"><li>Home</li></a>
          <a href="channels.php"><li id="rooms">Channels</li></a>
          <a href="about.php"><li>About</li></a>
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
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='channel'><div class='channel-info'><h1>" . $row['Channel Name'] . "</h1><a>Host - " . $row['Channel Host'] . "</div></a><div class='channel-join'><button>Join</button></div></div>";
          }
        }
        else{
          //echo "No Channels";
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
        <h1>The<span> Crypt</span></h1>
      </div>
      <div class="footer-third">
        <h1>Need Help?</h1>
        <a href="#">Terms &amp; Conditions</a>
        <a href="#">Privacy Policy</a>
      </div>
      <div class="footer-third">
        <h1>More</h1>
        <a href="#">Donate <i class="fa-brands fa-bitcoin fa-1x fa-flip" style="--fa-animation-duration: 3s;"></i></a>
        <a href="#">Encryption <i class="fa-solid fa-user-secret fa-1x fa-beat-fade" style="--fa-beat-fade-opacity: 0.67; --fa-beat-fade-scale: 1.075;"></i></a>
      </div>
      <div class="footer-third">
        <h1>Follow Us</h1>
        <li><a href="https://www.instagram.com/"><i class="fa-brands fa-instagram fa-1x"></i></a></li>
        <li><a href="https://www.youtube.com/"><i class="fa-brands fa-youtube fa-1x"></i></a></li>
        <li><a href="https://www.twitter.com/"><i class="fa-brands fa-twitter fa-1x"></i></a></li>
        <a>
          @ The Crypt Organization
          4257 Isleta Boulevard Southwest,
          Albuquerque, New Mexico 87105
        </a>
      </div>
    </div>
  </footer>
</html>
