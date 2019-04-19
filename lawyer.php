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
            <button class="tablink active" onclick="openTab(event, 'tab1')"><h1>Lawyer List</h1></button>
            <button class="tablink" onclick="openTab(event, 'tab2')"><h1>Add Lawyer</h1></button>
          </div>

          <div class="right_side_container">
            <div id="tab1" class="tabContent tabMainContent">
              <table>
                <thead>
                  <tr>
                    <th>No</th>
                    <th>PRISONER ID</th>
                    <th>LAWYER ID</th>
                    <th>LAWYER NAME</th>
                    <th>GENDER</th>
                    <th>PHONE</th>
                    <th>EMAIL</th>
                    <th>ADDRESS</th>
                    <th colspan="2">ACTION</th>
                  </tr>
                </thead>
                <tbody>
                  <?php while ($count > 0 && $row = mysqli_fetch_array($lawyer_results)) { ?>
                    <tr>
                      <td><?php echo $count; ?></td>
                      <td><?php echo $row['prisoner_id']; ?></td>
                      <td><?php echo $row['lawyer_id']; ?></td>
                      <td><?php echo $row['full_name']; ?></td>
                      <td><?php echo $row['gender']; ?></td>
                      <td><?php echo $row['phone']; ?></td>
                      <td><?php echo $row['email']; ?></td>
                      <td><?php echo $row['address']; ?></td>
                      <td>
                        <a href="edit_prisoner.php?edit=">Edit</a>
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
              <form action="lawyer.php" method="post" enctype="multipart/form-data">
                <div class="input-info">
                  <label>prisoner id</label>
                  <select class="" name="id">
                  <?php while ($id_list = mysqli_fetch_array($results)) { ?>
                      <option><?php echo $id_list['prisoner_id']; ?></option>
                  <?php } ?>
                  </select>
                </div>
                <div class="input-info">
                  <label>lawyer id</label>
                  <input type="text" name="lawyer_id">
                </div>
                <div class="input-info">
                  <label>lawyer name</label>
                  <input type="text" name="prisoner_name">
                </div>
                <div class="input-info">
                  <label>gender</label>
                  <input type="text" name="prisoner_gender">
                </div>
                <div class="input-info">
                  <label>phone</label>
                  <input type="text" name="lawyer_phone">
                </div>
                <div class="input-info">
                  <label>email</label>
                  <input type="email" name="lawyer_email">
                </div>
                <div class="input-info">
                  <label>address</label>
                  <textarea name="prisoner_address" rows="5" cols="55"></textarea>
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
