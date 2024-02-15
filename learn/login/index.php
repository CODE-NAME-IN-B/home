<?php
include ("connn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>انترنت 2</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;700&display=swap" rel="stylesheet" />
</head>
<body>
  <div id="login-field">
    <div class="login-background">
      <div class="login-title">
        <span>Sign In</span>
      </div>
      <div class="login-form">
        <form name="form" action="login.php" method="POST">
          <div class="field username-field">
            <input type="text" id="username" name="user" required placeholder="Username" >
          </div>
          <div class="field password-field">
            <input type="password" id="password" name="pass" required placeholder="Password">
          </div>
          <div class="field button-field">
            <button class="button button-login" type="submit" name="log">LOGIN</button>
            <button class="button button-register" type="submit" name = "REGISTER">REGISTER</button>
          </div>
        </form>

      </div>
    </div>
  </div>
  <span class="square square-tl"></span>
  <span class="square square-tr"></span>
  <span class="square square-bl"></span>
  <span class="square square-br"></span>
  <span class="star star1"></span>
  <span class="star star2"></span>
</body>
</html>