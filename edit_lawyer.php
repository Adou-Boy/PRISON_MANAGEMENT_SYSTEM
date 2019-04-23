<?php include('config/upload.php');
  $new_lawyer_pri_id = "";
  $new_lawyer_id = "";
  $new_lawyer_name = "";
  $new_lawyer_gender = "";
  $new_lawyer_email = "";
  $new_lawyer_phone = "";
  $new_lawyer_address = "";
  if(mysqli_num_rows($lawyer_record_results) == 1) {
    while($reminder = mysqli_fetch_array($lawyer_record_results)) {
      $new_lawyer_pri_id = $reminder['prisoner_id'];
      $new_lawyer_id = $reminder['lawyer_id'];
      $new_lawyer_name = $reminder['full_name'];
      $new_lawyer_gender = $reminder['gender'];
      $new_lawyer_email = $reminder['email'];
      $new_lawyer_phone = $reminder['phone'];
      $new_lawyer_address = $reminder['address'];
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
              <form action="lawyer.php" method="post" enctype="multipart/form-data">
                <div class="input-info">
                  <label>prisoner id</label>
                  <input type="text" name="lawyer_pri_id" value="<?php echo $new_lawyer_pri_id; ?>">
                </div>
                <div class="input-info">
                  <label>lawyer id</label>
                  <input type="text" name="lawyer_id" value="<?php echo $new_lawyer_id; ?>">
                </div>
                <div class="input-info">
                  <label>lawyer name</label>
                  <input type="text" name="lawyer_name" value="<?php echo $new_lawyer_name; ?>">
                </div>
                <div class="input-info">
                  <label>gender</label>
                  <input type="text" name="lawyer_gender" value="<?php echo $new_lawyer_gender; ?>">
                </div>
                <div class="input-info">
                  <label>phone</label>
                  <input type="text" name="lawyer_phone" value="<?php echo $new_lawyer_phone; ?>">
                </div>
                <div class="input-info">
                  <label>email</label>
                  <input type="email" name="lawyer_email" value="<?php echo $new_lawyer_email; ?>">
                </div>
                <div class="input-info">
                  <label>address</label>
                  <textarea name="lawyer_address" rows="5" cols="55"><?php echo $new_lawyer_address; ?></textarea>
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
