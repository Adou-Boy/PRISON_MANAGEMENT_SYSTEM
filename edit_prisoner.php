<?php include('config/upload.php');
  $new_prisoner_id = "";
  $new_name = "";
  $new_gender = "";
  $new_age = "";
  $new_address = "";
  $new_entry_date = "";
  $new_release_date = "";
  if(mysqli_num_rows($prisoner_record_results) == 1) {
    while($reminder = mysqli_fetch_array($prisoner_record_results)) {
      $new_prisoner_id = $reminder['prisoner_id'];
      $new_name = $reminder['name'];
      $new_gender = $reminder['gender'];
      $new_age = $reminder['age'];
      $new_address = $reminder['address'];
      $new_entry_date = $reminder['entry_date'];
      $new_release_date = $reminder['release_date'];
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
              <form action="prisoner.php" method="post" enctype="multipart/form-data">
                <div class="input-info">
                    <input type="file" name="profile_pic">
                </div>
                <div class="input-info">
                  <label>prisoner id</label>
                  <input type="text" name="prisoner_id" value="<?php echo $new_prisoner_id; ?>">
                </div>
                <div class="input-info">
                  <label>prisoner name</label>
                  <input type="text" name="prisoner_name" value="<?php echo $new_name; ?>">
                </div>
                <div class="input-info">
                  <label>gender</label>
                  <input type="text" name="prisoner_gender" value="<?php echo $new_gender; ?>">
                </div>
                <div class="input-info">
                  <label>age</label>
                  <input type="text" name="prisoner_age" value="<?php echo $new_age; ?>">
                </div>
                <div class="input-info">
                  <label>address</label>
                  <input type="text" name="prisoner_address" value="<?php echo $new_address; ?>">
                </div>
                <div class="input-info">
                  <label>entry date</label>
                  <input type="date" name="prisoner_entry-date" value="<?php echo $new_entry_date; ?>">
                </div>
                <div class="input-info">
                  <label>release date</label>
                  <input type="date" name="prisoner_release-date" value="<?php echo $new_release_date; ?>">
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
