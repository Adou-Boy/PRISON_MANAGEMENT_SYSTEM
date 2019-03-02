<?php include('../config/server.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="css/sign_in.css">
    <link rel="stylesheet" href="css/sign_up-sign_in.css">
    <title>SIGN IN</title>
  </head>
  <body>
    <div class="main_head">
      <div class="logo">
        <img src="../assets/logo.jpg" alt="main prison logo">
      </div>
      <?php include('../header.php'); ?>
      <div class="sign_up-in">
        <a href="register.php">sign up</a>
      </div>
    </div>


    <form action="login.php" method="post">
      <?php if (isset($_SESSION['success'])): ?>
        <div class="created">
          <p>
            <?php
              echo $_SESSION['success'];
              unset($_SESSION['success']);
            ?>
            You can now log in using your <strong>EMPLOYEE ID</strong> and <strong>PASSWORD</strong>
          </p>
        </div>
      <?php endif; ?>
      <?php include('../config/sign_up-in_errors.php'); ?>
      <div class="input-values">
        <input type="text" name="employee_id" placeholder="ENTER EMPLOYEE ID">
      </div>
      <div class="input-values">
        <input type="password" name="password_1" placeholder="ENTER PASSWORD">
      </div>

      <div class="registration_input">
        <input type="submit" name="login" value="sign in">
      </div>

      <div class="have_account">
        <p>Not yet a member? <a href="register.php">Sign up</a></p>
      </div>
    </form>
  </body>
</html>
