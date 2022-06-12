<?php
  include 'create-room.php';
?>
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
          <a href="about.php"><li>About</li></a>
        </ul>
      </div>
    </div>
    <div class="menu">
      <div class="menu-information">
        <form method="get" action="create-room.php">
          <input type="text" placeholder="Username" name="channel_host" required autofocus/>
          <input type="text" placeholder="Channel Name" name="channel_name" required/>
          <input type="text" placeholder="Channel Password" name="channel_password" required/>
          <div class="menu-buttons">
            <button>Join</button>
            <button>Host</button>
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
        <a>For more information on The Crypt or our end to end encryption visit the <strong>About</strong> page.</a>
      </div>
    </div>
    <script>
      function changePageStatus(){
        document.getElementById("home").style.color = "#e8a12e";
      }
      function send(){
        var userMessage = document.getElementById("user-message").value;
        var d = new Date();
        var username = document.getElementById("username").value;
        const convoBox = document.getElementById("convoBox");//Parent
        var myDiv = document.createElement("div");//Child
        myDiv.classList.add("user-message");
        if(document.getElementById("anonymous-mode").checked && document.getElementById("user-message").value != ""){
          myDiv.innerHTML = "<a>Anonymous</a><h1>"+userMessage+"</h1><a1>"+d.getHours()+":"+d.getMinutes()+"</a1>";
          convoBox.appendChild(myDiv);
          document.getElementById("user-message").value = "";
          document.getElementById("user-message").scrollIntoView();
        }
        else{
          if(document.getElementById("username").value == ""){
            window.location.assign(window.location.href + "popup1");
            document.getElementById("username").focus();
          }
          else if(document.getElementById("user-message").value != ""){
            myDiv.innerHTML = "<a>"+ username + "</a><h1>"+userMessage+"</h1><a1>"+d.getHours()+":"+d.getMinutes()+"</a1>";
            convoBox.appendChild(myDiv);
            document.getElementById("user-message").value = "";
            document.getElementById("user-message").scrollIntoView();
          }
        }
      }
      var input = document.getElementById("user-message");
      input.addEventListener("keydown", function (e) {
        if (e.key === "Enter") {
          validate(e);
        }
      });
      function validate(e) {
        var text = e.target.value;
        send();
      }
      function chooseFile(){
        document.getElementById("fileInput").click();
        const uploadFileEle = document.getElementById("fileInput")
        console.log(uploadFileEle.files[0]);
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
