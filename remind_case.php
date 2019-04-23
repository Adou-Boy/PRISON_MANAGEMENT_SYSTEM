<?php include('config/upload.php');?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/home_index.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="register_sign-in/css/sign_up-sign_in.css">
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
            <button class="tablink active" onclick="openTab(event, 'tab1')"><h1>Remind List</h1></button>
            <button class="tablink" onclick="openTab(event, 'tab2')"><h1>Add individual to remind</h1></button>
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
                    <th>REMIND UNIT</th>
                    <th>HEARING DATE</th>
                    <th colspan="2">ACTION</th>
                  </tr>
                </thead>
                <tbody>
                  <?php while ($count > 0 && $row = mysqli_fetch_array($remind_results)) { ?>
                    <tr>
                      <td><?php echo $count; ?></td>
                      <td><?php echo $row['remind_id']; ?></td>
                      <td><?php echo $row['name']; ?></td>
                      <td><?php echo $row['gender']; ?></td>
                      <td><?php echo $row['age']; ?></td>
                      <td><?php echo $row['address']; ?></td>
                      <td><?php echo $row['remind_unit']; ?></td>
                      <td><?php echo $row['hearing_date']; ?></td>
                      <td>
                        <a class="edit_btn" href="edit_remind_case.php?edit=<?php echo $row['remind_id']; ?>">Edit</a>
                      </td>
                      <td>
                        <a class="del_btn" href="remind_case.php?del=<?php echo $row['remind_id']; ?>">Delete</a>
                      </td>
                    </tr>
                    <?php $count = $count + 1; ?>
                  <?php  } ?>
                </tbody>
              </table>
            </div>

            <div id="tab2" class="tabContent">
              <form action="remind_case.php" method="post" enctype="multipart/form-data">

                <div class="input-info">
                  <label>id</label>
                  <input type="text" name="remind_id">
                </div>
                <div class="input-info">
                  <label>full name</label>
                  <input type="text" name="remind_name">
                </div>
                <div class="input-info">
                  <label>gender</label>
                  <input type="text" name="remind_gender">
                </div>
                <div class="input-info">
                  <label>age</label>
                  <input type="text" name="remind_age">
                </div>
                <div class="input-info">
                  <label>address</label>
                  <input type="text" name="remind_address">
                </div>
                <div class="input-info">
                  <label>remind_unit</label>
                  <input type="text" name="remind_unit">
                </div>
                <div class="input-info">
                  <label>hearing date</label>
                  <input type="date" name="remind_hearing-date">
                </div>

                <div>
                    <button  type="submit" name="next" class="btn">next</button>
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </div>
  </body>
</html>
