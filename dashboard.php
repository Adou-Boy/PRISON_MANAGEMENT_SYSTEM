<?php include('config/server.php');
  //If user is not logged in they cannot access this page
  // if (empty($_SESSION['name'])) {
  //   header('location: register_sign-in/login.php');
  // }
?>
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
          <li><a href="#">Dashboard</a></li>
          <li><a href="#">Prisoner</a></li>
          <li><a href="#">Training</a></li>
          <li><a href="#">Transfer</a></li>
          <li><a href="#">Remand Case</a></li>
          <li><a href="#">Education Details</a></li>
          <li><a href="#">Case</a></li>
          <li><a href="#">Jailer</a></li>
          <li><a href="#">Lawyer</a></li>
        </ul>
      </div>

      <div class="right_side">
        <div class="container">
          <div class="item">
            <a href="#">
              <figure>
                <img src="" alt="">
                <figcaption>Prisoner</figcaption>
              </figure>
            </a>
          </div>
          <div class="item">
            <a href="#">
              <figure>
                <img src="" alt="">
                <figcaption>Training</figcaption>
              </figure>
            </a>
          </div>
          <div class="item">
            <a href="#">
              <figure>
                <img src="" alt="">
                <figcaption>Transfer</figcaption>
              </figure>
            </a>
          </div>
          <div class="item">
            <a href="#">
              <figure>
                <img src="" alt="">
                <figcaption>Remand Case</figcaption>
              </figure>
            </a>
          </div>
          <div class="item">
            <a href="#">
              <figure>
                <img src="" alt="">
                <figcaption>Education Details</figcaption>
              </figure>
            </a>
          </div>
          <div class="item">
            <a href="#">
              <figure>
                <img src="" alt="">
                <figcaption>Case</figcaption>
              </figure>
            </a>
          </div>
          <div class="item">
            <a href="#">
              <figure>
                <img src="" alt="">
                <figcaption>Jailer</figcaption>
              </figure>
            </a>
          </div>
          <div class="item">
            <a href="#">
              <figure>
                <img src="" alt="">
                <figcaption>Lawyer</figcaption>
              </figure>
            </a>
          </div>
          <div class="item">
            <a href="#">
              <figure>
                <img src="" alt="">
                <figcaption>Guards</figcaption>
              </figure>
            </a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
