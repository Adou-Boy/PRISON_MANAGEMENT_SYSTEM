<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/home_index.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="register_sign-in/css/sign_up-sign_in.css">
    <link rel="stylesheet" href="css/home_index.css">
    <link rel="stylesheet" href="css/prisoner.css">
    <script type="text/javascript" src="js/tabs.js"></script>
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
          <div class="tabs">
            <button class="tablink active" onclick="openTab(event, 'tab1')"><h1>Prisoner List</h1></button>
            <button class="tablink" onclick="openTab(event, 'tab2')"><h1>Add Prisoner</h1></button>
          </div>

          <div id="tab1" class="tabContent">
            Tab 1 Content
          </div>

          <div id="tab2" class="tabContent">
            Tab 2 Content
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
