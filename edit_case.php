<?php include('config/upload.php');
  $new_crime_type = "";
  $new_crime_description = "";
  if(mysqli_num_rows($crime_record_results) == 1) {
    while($reminder = mysqli_fetch_array($crime_record_results)) {
      $new_crime_type = $reminder['crime_type'];
      $new_crime_description = $reminder['description'];
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
              <form action="case.php" method="post" enctype="multipart/form-data">
                <div class="input-info">
                  <label>crime type</label>
                  <input type="text" name="crime_type" value="<?php echo $new_crime_type; ?>">
                </div>
                <div class="input-info">
                  <label>crime description</label>
                  <textarea name="crime_description" rows="10" cols="80"><?php echo $new_crime_description; ?></textarea>
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
