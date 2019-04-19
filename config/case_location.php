<?php
  session_start();
  include('config.php');

  if(isset($_POST['save'])) {
      $case_type = $_POST['crime_type'];
      $case_description = $_POST['crime_description'];
      $case_sql = "INSERT INTO remind_case(crime_type, description) VALUES('$case_type', '$case_description')";

      $_SESSION['msg'] = "RECORD SUCCESSFULLY ADDED...!!!";
      mysqli_query($db, $case_sql);
  }

  $case_results = mysqli_query($db, "SELECT * FROM crime");

?>
