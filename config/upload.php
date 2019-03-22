<?php
  session_start();
  include('config.php');
  $count = 1;
  $new_prisoner_id = "";
  $new_name = "";
  $new_gender = "";
  $new_age = "";
  $new_address = "";
  $new_entry_date = "";
  $new_release_date = "";

  if(isset($_POST['go_back'])) {
    header('location: prisoner.php');
  }

  if(isset($_POST['save'])) {
    $prisoner_id = $_POST['prisoner_id'];
    $name = $_POST['prisoner_name'];
    $gender = $_POST['prisoner_gender'];
    $age = $_POST['prisoner_age'];
    $address = $_POST['prisoner_address'];
    $entry_date = $_POST['prisoner_entry-date'];
    $release_date = $_POST['prisoner_release-date'];

    $sql = "INSERT INTO prisoner(prisoner_id, name, gender, age, address, entry_date, release_date) VALUES('$prisoner_id', '$name', '$gender', '$age', '$address', '$release_date', '$entry_date')";
    $_SESSION['msg'] = "RECORD SUCCESSFULLY ADDED...!!!";
    mysqli_query($db, $sql);
  }

  if(isset($_POST['update'])) {
    $prisoner_id = $_POST['prisoner_id'];
    $name = $_POST['prisoner_name'];
    $gender = $_POST['prisoner_gender'];
    $age = $_POST['prisoner_age'];
    $address = $_POST['prisoner_address'];
    $entry_date = $_POST['prisoner_entry-date'];
    $release_date = $_POST['prisoner_release-date'];
  }

  //Retrieve the records
  $results = mysqli_query($db, "SELECT * FROM prisoner");

 ?>
