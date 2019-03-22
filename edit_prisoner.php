<?php include('config/upload.php');
if(isset($_GET['edit'])) {
  $record = mysqli_query($db, "SELECT * FROM prisoner");
  while($rows = mysqli_fetch_array($record)) {
    $check = $rows['counter'];
    $exist = mysqli_query($db,  "SELECT * FROM prisoner WHERE $count ='$check'");
    if (mysqli_num_rows($exist) == 1) {
      $new_prisoner_id = $rows['prisoner_id'];
      $new_name = $rows['prisoner_name'];
      $new_gender = $rows['prisoner_gender'];
      $new_age = $rows['prisoner_age'];
      $new_address = $rows['prisoner_address'];
      $new_entry_date = $rows['prisoner_entry-date'];
      $new_release_date = $rows['prisoner_release-date'];
    }

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
    <link rel="stylesheet" href="css/home_index.css">
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
