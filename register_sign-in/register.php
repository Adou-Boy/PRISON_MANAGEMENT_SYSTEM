<?php include('../config/server.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="css/sign_up-sign_in.css">
    <title>REGISTER</title>
  </head>
  <body>
    <div class="main_head">
      <div class="logo">
        <img src="../assets/logo.jpg" alt="main prison logo">
      </div>
      <?php include('../header.php'); ?>
      <div class="sign_up-in">
        <a href="login.php">log in</a>
      </div>
    </div>


    <form action="register.php" method="post">
      <?php include('../config/sign_up-in_errors.php'); ?>
      <div class="input-group register_info">
        <div class="person_details">
          <div class="input-values">
            <input type="text" name="name" placeholder="ENTER YOUR FULL NAME">
          </div>
          <div class="input-values">
            <input type="text" name="employee_id" placeholder="ENTER EMPLOYEE ID">
          </div>
          <div class="input-values gender">
            <select name="gender">
              <option>select gender</option>
              <option>male</option>
              <option>female</option>
            </select>
          </div>
          <div class="input-values rank">
            <select name="employee_rank">
              <option>select rank</option>
              <option>constable 1st class</option>
              <option>sergeant</option>
              <option>corporal</option>
              <option>sub inspector</option>
              <option>inspector</option>
              <option>chief inspector</option>
              <option>assistant superintendent</option>
              <option>superintendent</option>
              <option>chief superintendent</option>
              <option>commissioner</option>
              <option>deputy inspector general</option>
              <option>inspector general</option>
            </select>
          </div>
        </div>

        <div class="register_details">
          <div class="input-values">
            <input type="email" name="email" placeholder="ENTER EMAIL ADDRESS">
          </div>
          <div class="input-values">
            <input type="password" name="password_1" placeholder="ENTER PASSWORD">
          </div>
          <div class="input-values">
            <input type="password" name="password_2" placeholder="CONFIRM PASSWORD">
          </div>
        </div>
      </div>

      <div class="registration_input">
        <input type="submit" name="register" value="register">
      </div>

      <div class="have_account">
        <p>Already have an account? <a href="login.php">Sign in</a></p>
      </div>
    </form>
  </body>
</html>
