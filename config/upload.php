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

  if(isset($_POST['save']) || isset($_POST['next'])) {
    $prisoner_id = $_POST['prisoner_id'];
    $name = $_POST['prisoner_name'];
    $gender = $_POST['prisoner_gender'];
    $age = $_POST['prisoner_age'];
    $address = $_POST['prisoner_address'];
    $entry_date = $_POST['prisoner_entry-date'];
    $release_date = $_POST['prisoner_release-date'];
    $remind_unit = $_POST['remind_unit'];
    $lawyer_email = $_POST['lawyer_email'];
    $lawyer_phone = $_POST['lawyer_phone'];
    $lawyer_id = $_POST['lawyer_id'];
    $pris_id = $_POST['id'];
    $transfer_id = $_POST['transfer_id'];
    $location_from = $_POST['location_from'];
    $location_to = $_POST['location_to'];
    $transfer_date = $_POST['transfer_date'];
    $transfer_reason = $_POST['transfer_reason'];

    $sql = "INSERT INTO prisoner(prisoner_id, name, gender, age, address, entry_date, release_date) VALUES('$prisoner_id', '$name', '$gender', '$age', '$address', '$release_date', '$entry_date')";
    $remind_sql = "INSERT INTO remind_case(remind_id, name, gender, age, address, remind_unit, hearing_date) VALUES('$prisoner_id', '$name', '$gender', '$age', '$address', '$remind_unit', '$entry_date')";
    $lawyer_sql = "INSERT INTO prisoner_lawyer(prisoner_id, lawyer_id, full_name, gender, phone, email, address) VALUES('$pris_id', '$lawyer_id', '$name', '$gender', '$lawyer_phone', '$lawyer_email', '$address')";
    $transfer_sql = "INSERT INTO prisoner_transfer(id, transfer_reason, location_from, location_to, transfer_date, prisoner_id) VALUES('$transfer_id', '$transfer_reason', '$location_from', '$location_to', '$transfer_date', '$pris_id')";

    $_SESSION['msg'] = "RECORD SUCCESSFULLY ADDED...!!!";
    mysqli_query($db, $sql);
    mysqli_query($db, $remind_sql);
    mysqli_query($db, $lawyer_sql);
    mysqli_query($db, $transfer_sql);
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
  $remind_results = mysqli_query($db, "SELECT * FROM remind_case");
  $lawyer_results = mysqli_query($db, "SELECT * FROM prisoner_lawyer");
  $transfer_results = mysqli_query($db, "SELECT * FROM prisoner_transfer");
 ?>
