<?php require('Connect.php');
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LOL.COM</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <header>
    <nav>
      <a href="#"></a>
      <a href="#"></a>
      <a href="#"></a>
      <a href="#"></a>
      <a href="#"></a>
      <a href="#"></a>
      <a href="#"></a>
      <a href="#"></a>
      <a href="#"></a>
      <a href="#"></a>
      <a href="#"></a>
      <a href="#"></a>
      <a href="#"></a>
      <a href="#"></a>
      <a href="#"></a>
      <a href="#"></a>
      <a href="#"></a>
      <a href="#"></a>
      <a href="#"></a>
      <a href="#"></a>
      <a href="#"></a>
      <a href="#"></a>
    
    
    
    </nav>

    <h2>Wordle</h2>
    <nav>
      <a href="#"></a>
      <a href="#"></a>
      <a href="#"></a>
      <a href="#"></a>
      <a href="#"></a>
      <a href="#"></a>
      <a href="#"></a>
      <a href="#"></a>
      <a href="#"></a>
      <a href="#"></a>
      <a href="#"></a>
      <a href="#"></a>
      <a href="#"></a>
      <a href="#"></a>
      <a href="#"></a>
      <a href="#"></a>
      <a href="#"></a>
    
    </nav>


    <?php
    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
      echo "<div class='user'>$_SESSION[username]-<a href='logout.php'>Logout</a>
  </div> ";

    } else {
      echo "   <div class='sign-in-up'>
      <button type='button' onclick=\"popup('login-popup')\">LOGIN</button>
      <button type='button' onclick=\"popup('register-popup')\">REGISTER</button>
    </div>'";
    }

    ?>


  </header>





  <div class="popup-container" id="login-popup">
    <div class="popup">
      <form method="POST" action="login_register.php">
        <h2>
          <span>USER LOGIN</span>
          <button type="reset" onclick="popup('login-popup')">X</button>
        </h2>
        <input type="text" placeholder="E-mail or Username" name="email_username" required>
        <input type="password" placeholder="Password" name="password" required>
        <button type="submit" class="login-btn" name="login">LOGIN</button>
      </form>
    </div>
  </div>

  <div class="popup-container" id="register-popup">
    <div class="register popup">
      <form method="POST" action="login_register.php">
        <h2>
          <span>USER REGISTER</span>
          <button type="reset" onclick="popup('register-popup')">X</button>
        </h2>
        <input type="text" placeholder="Full Name" name="fullname" required>
        <input type="text" placeholder="Username" name="username" required>
        <input type="email" placeholder="E-mail" name="email" required>
        <input type="password" placeholder="Password" name="password" required>
        <button type="submit" class="register-btn" name="register">REGISTER</button>
      </form>
    </div>
  </div>

  <?php
  if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {

  }
  ?>


<div class="verticalcenter">
    <img src="Screenshot (153).png" alt="centered image" />
    
</div>


<!-- <div class="verticalcenter">
    <img src="WhatsApp Image 2022-11-27 at 9.46.04 PM.jpeg" alt="centered image" width="700px" />
    
</div> -->


<script>
    function popup(popup_name) {
      get_popup = document.getElementById(popup_name);
      if (get_popup.style.display == "flex") {
        get_popup.style.display = "none";
      }
      else {
        get_popup.style.display = "flex";
      }
    }
  </script>

</body>

</html>