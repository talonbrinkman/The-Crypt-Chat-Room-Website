<!DOCTYPE html>
<html>
  <head>
    <link href="https://fonts.googleapis.com/css2?family=Caveat&family=Kdam+Thmor+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
    <link rel="icon" type="image/x-icon" href="favicon.png">
    <title>The Crypt | Home</title>
    <script src="https://kit.fontawesome.com/56a1441670.js" crossorigin="anonymous"></script>
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
    <div class="menu">
      <div class="menu-information">
        <form id="menu" method="post" action="" autocomplete="off">
          <input type="text" placeholder="Username" name="username" required autofocus/>
          <input type="text" placeholder="Channel Name" name="channel_name" required/>
          <input type="text" placeholder="Channel Password" name="channel_password" required/>
          <div class="menu-buttons" type="submit">
            <button>Join</button>
            <button onclick="createRoom()">Host</button>
          </div>
        </form>
      </div>
      <div class="information">
        <h1><em>Joining</em></h1>
        <a>Start by entering a <em>Username</em>, then enter a <em>Channel Name</em> and <em>Password</em> and click <strong>Join</strong> to enter another users room.</a>
        <h1><em>Hosting</em></h1>
        <a>Start by entering a <em>Username</em>, then enter a <em>Channel Name</em> and <em>Password</em> and click <strong>Host</strong> to create
          your own room. Other users can join your room by entering their <em>Username</em>, <em>Channel Name</em>, and <em>Channel Password</em> you chose, and clicking <strong>Join</strong></a>
        <h1><em>Privacy</em></h1>
        <a>Users information is <strong>not</strong> stored permanently and is <strong>deleted</strong> when the user logs off. Room information and history is <strong>not</strong> stored permanently and is also <strong>deleted</strong> with deletion of the room.</a>
        <h1><em>More</em></h1>
        <a>For more information on The Crypt or our end to end encryption visit the <strong>More</strong> section located at the bottom of the page.</a>
      </div>
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript">
      function createRoom(){

      }
      function changePageStatus(){
        document.getElementById("home").style.color = "#e8a12e";
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
