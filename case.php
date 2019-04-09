<?php include('config/upload.php');?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/home_index.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="register_sign-in/css/sign_up-sign_in.css">
    <link rel="stylesheet" href="css/home_index.css">
    <link rel="stylesheet" href="css/prisoner.css">
    <link rel="stylesheet" href="css/prisoner_list.css">
    <link rel="stylesheet" href="css/prisoner_details.css">
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
          <li><a href="transfer.php">Transfer</a></li>
          <li><a href="remind_case.php">Remind Case</a></li>
          <li><a href="case.php">Case</a></li>
          <li><a href="lawyer.php">Lawyer</a></li>
        </ul>
      </div>

      <div class="right_side">
        <?php if (isset($_SESSION['msg'])): ?>
            <div class="msg">
              <?php
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
               ?>
            </div>
        <?php endif ?>
        <div class="container">
          <div class="tabs">
            <button class="tablink active" onclick="openTab(event, 'tab1')"><h1>Case List</h1></button>
            <button class="tablink" onclick="openTab(event, 'tab2')"><h1>Add Case</h1></button>
          </div>

          <div class="right_side_container">
            <div id="tab1" class="tabContent tabMainContent">
              <table>
                <thead>
                  <tr>
                    <th>No</th>
                    <th>CASE TYPE</th>
                    <th>CASE DESCRIPTION</th>
                    <th colspan="2">ACTION</th>
                  </tr>
                </thead>
                <tbody>

                </tbody>
              </table>
            </div>

            <div id="tab2" class="tabContent">
              <form action="prisoner.php" method="post" enctype="multipart/form-data">

                <div class="input-info">
                  <label>crime type</label>
                  <input type="text" name="prisoner_name">
                </div>
                <div class="input-info">
                  <label>crime description</label>
                  <textarea name="crime_description" rows="10" cols="80"></textarea>
                </div>

                <div>
                    <button  type="submit" name="save" class="btn">save</button>
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </div>
  </body>
</html>
