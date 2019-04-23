<?php include('config/upload.php');
  $new_remind_id = "";
  $new_remind_name = "";
  $new_remind_gender = "";
  $new_remind_age = "";
  $new_remind_address = "";
  $new_remind_unit = "";
  $new_remind_hearing_date = "";
  if(mysqli_num_rows($remind_record_results) == 1) {
    while($reminder = mysqli_fetch_array($remind_record_results)) {
      $new_remind_id = $reminder['remind_id'];
      $new_remind_name = $reminder['name'];
      $new_remind_gender = $reminder['gender'];
      $new_remind_age = $reminder['age'];
      $new_remind_address = $reminder['address'];
      $new_remind_unit = $reminder['remind_unit'];
      $new_remind_hearing_date = $reminder['hearing_date'];
    }
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/home_index.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="register_sign-in/css/sign_up-sign_in.css">
    <link rel="stylesheet" href="css/prisoner.css">
    <link rel="stylesheet" href="css/prisoner_details.css">
    <link rel="stylesheet" href="css/edit_prisoner.css">
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
            <button class="tablink active"><h1>Edit Prisoner List</h1></button>
          </div>

          <div class="right_side_container">
            <div class="tabContent show">
              <form action="remind_case.php" method="post" enctype="multipart/form-data">
                <div class="input-info">
                  <label>id</label>
                  <input type="text" name="remind_id" value="<?php echo $new_remind_id; ?>">
                </div>
                <div class="input-info">
                  <label>full name</label>
                  <input type="text" name="remind_name" value="<?php echo $new_remind_name; ?>">
                </div>
                <div class="input-info">
                  <label>gender</label>
                  <input type="text" name="remind_gender" value="<?php echo $new_remind_gender; ?>">
                </div>
                <div class="input-info">
                  <label>age</label>
                  <input type="text" name="remind_age" value="<?php echo $new_remind_age; ?>">
                </div>
                <div class="input-info">
                  <label>address</label>
                  <input type="text" name="remind_address" value="<?php echo $new_remind_address; ?>">
                </div>
                <div class="input-info">
                  <label>remind_unit</label>
                  <input type="text" name="remind_unit" value="<?php echo $new_remind_unit; ?>">
                </div>
                <div class="input-info">
                  <label>hearing date</label>
                  <input type="date" name="remind_hearing-date" value="<?php echo $new_remind_hearing_date; ?>">
                </div>

                <div>
                    <button  type="submit" name="update" class="btn">update</button>
                    <button  type="submit" name="go_back" class="btn">go back</button>
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </div>
  </body>
</html>
