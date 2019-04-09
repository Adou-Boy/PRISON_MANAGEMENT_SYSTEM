<?php include('config/server.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/home_index.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="register_sign-in/css/sign_up-sign_in.css">
    <link rel="stylesheet" href="css/home_index.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <title>SIGN IN</title>
  </head>
  <body>
    <div class="main_head">
      <div class="logo">
        <img src="assets/logo.jpg" alt="main prison logo">
      </div>
      <?php include('header.php'); ?>
      <div class="sign_up-in">
        <a href="dashboard.php?logout='1'">log out</a>
      </div>
    </div>
    <div class="main_content">
      <div class="left-side_nav">
        <ul>
          <li><a href="dashboard.php">Dashboard</a></li>
          <li><a href="prisoner.php">Prisoner</a></li>
          <li><a href="transfer.php">Transfer</a></li>
          <li><a href="remind_case.php">Remind Case</a></li>
          <li><a href="case.php">Case</a></li>
          <li><a href="lawyer.php">Lawyer</a></li>
        </ul>
      </div>

      <div class="right_side">
        <div class="container">
          <div class="item">
            <a href="prisoner.php">
              <figure>
                <img src="" alt="">
                <figcaption>Prisoner</figcaption>
              </figure>
            </a>
          </div>
          <div class="item">
            <a href="transfer.php">
              <figure>
                <img src="" alt="">
                <figcaption>Transfer</figcaption>
              </figure>
            </a>
          </div>
          <div class="item">
            <a href="remind_case.php">
              <figure>
                <img src="" alt="">
                <figcaption>Remind Case</figcaption>
              </figure>
            </a>
          </div>
          <div class="item">
            <a href="case.php">
              <figure>
                <img src="" alt="">
                <figcaption>Case</figcaption>
              </figure>
            </a>
          </div>
          <div class="item">
            <a href="lawyer.php">
              <figure>
                <img src="" alt="">
                <figcaption>Lawyer</figcaption>
              </figure>
            </a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
