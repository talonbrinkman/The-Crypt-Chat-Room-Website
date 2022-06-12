<html>
  <head>
    <link href="https://fonts.googleapis.com/css2?family=Caveat&family=Kdam+Thmor+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
    <link rel="icon" type="image/x-icon" href="favicon.png">
    <title>The Crypt | Rooms</title>
    <script src="https://kit.fontawesome.com/56a1441670.js" crossorigin="anonymous"></script>
  </head>
  <body onload="changePageStatus()">
    <div class="header">
      <div class="inner-header">
        <div class="logo-container">
          <img class="logo" src="favicon.png"><h1>The<span> Crypt</span></h1>
        </div>
        <ul class="navigation">
          <a href="index.php"><li>Home</li></a>
          <a href="rooms.php"><li id="rooms">Rooms</li></a>
          <a href="about.php"><li>About</li></a>
        </ul>
      </div>
    </div>
    <div id="messaging">
      <div class="conversation-box" id="convoBox">
        <div class="server-message">
          <a>You joined</a>
        </div>
        <div class="server-message">
          <a>Nikola joined</a>
        </div>
        <div class="message">
          <a>Nikola</a>
          <h1>Whats up man?</h1>
          <a1>11:56</a1>
        </div>
        <div class="server-message">
          <a>Jim joined</a>
        </div>
        <div class="message">
          <a>Jim</a>
          <h1>Hey guys, hows it hanging?</h1>
          <a1>12:44</a1>
        </div>
        <div class="user-message">
          <a>You</a>
          <img src="favicon.png">
          <a1>12:44</a1>
        </div>
      </div>
      <div class="message-bar">
        <a href="#popup1"><i class="fa-solid fa-gear fa-3x"></i></a>
          <div id="popup1" class="overlay">
          	<div class="popup">
          		<h2>Settings</h2>
          		<a class="close" href="#">&times;</a>
          		<div class="content">
                <form>
                  <input type="text" placeholder="Username Required" id="username" required>
                </form>
                <div class="setting">
                  <a>Private Room</a>
                  <label class="switch">
                    <input type="checkbox" id="private-room">
                    <span class="slider round"></span>
                  </label>
                </div>
                <div class="setting">
                  <a>Anonymous Mode</a>
                  <label class="switch">
                    <input type="checkbox" id="anonymous-mode">
                    <span class="slider round"></span>
                  </label>
                </div>
          		</div>
          	</div>
        </div>
          <input type="file" id="fileInput" name="fileInput">
          <i class="fa-solid fa-arrow-up-from-bracket fa-3x" onclick="chooseFile();"></i>
          <input type="text" placeholder="Message..." id="user-message"></input>
          <i class="fa-solid fa-paper-plane fa-3x" id="send-button" onclick="send()"></i>
      </div>
    </div>
    <script>
      function changePageStatus(){
        document.getElementById("rooms").style.color = "#e8a12e";
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
            window.location.assign(window.location.href + "#popup1");
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
