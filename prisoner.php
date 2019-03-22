<?php include('config/upload.php'); ?>
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
            <button class="tablink active" onclick="openTab(event, 'tab1')"><h1>Prisoner List</h1></button>
            <button class="tablink" onclick="openTab(event, 'tab2')"><h1>Add Prisoner</h1></button>
          </div>

          <div class="right_side_container">
            <div id="tab1" class="tabContent tabMainContent">
              <table>
                <thead>
                  <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>GENDER</th>
                    <th>AGE</th>
                    <th>ADDRESS</th>
                    <th>ENTRY DATE</th>
                    <th>RELEASE DATE</th>
                    <th colspan="2">ACTION</th>
                  </tr>
                </thead>
                <tbody>
                  <?php while ($count > 0 && $row = mysqli_fetch_array($results)) { ?>
                    <tr>
                      <td><?php echo $count; ?></td>
                      <td><?php echo $row['prisoner_id']; ?></td>
                      <td><?php echo $row['name']; ?></td>
                      <td><?php echo $row['gender']; ?></td>
                      <td><?php echo $row['age']; ?></td>
                      <td><?php echo $row['address']; ?></td>
                      <td><?php echo $row['entry_date']; ?></td>
                      <td><?php echo $row['release_date']; ?></td>
                      <td>
                        <a href="edit_prisoner.php?edit='1'">Edit</a>
                      </td>
                      <td>
                        <a href="#">Delete</a>
                      </td>
                    </tr>
                    <?php $count = $count + 1; ?>
                  <?php  } ?>

                </tbody>
              </table>
            </div>

            <div id="tab2" class="tabContent">
              <form action="prisoner.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="counter" value="$count">
                <div class="input-info">
                    <input type="file" name="profile_pic">
                </div>
                <div class="input-info">
                  <label>prisoner id</label>
                  <input type="text" name="prisoner_id">
                </div>
                <div class="input-info">
                  <label>prisoner name</label>
                  <input type="text" name="prisoner_name">
                </div>
                <div class="input-info">
                  <label>gender</label>
                  <input type="text" name="prisoner_gender">
                </div>
                <div class="input-info">
                  <label>age</label>
                  <input type="text" name="prisoner_age">
                </div>
                <div class="input-info">
                  <label>address</label>
                  <input type="text" name="prisoner_address">
                </div>
                <div class="input-info">
                  <label>entry date</label>
                  <input type="date" name="prisoner_entry-date">
                </div>
                <div class="input-info">
                  <label>release date</label>
                  <input type="date" name="prisoner_release-date">
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
