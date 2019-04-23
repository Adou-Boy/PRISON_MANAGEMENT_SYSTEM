<?php
  session_start();
  include('config.php');
  $count = 1;
  $check = "";

  // -------------------- INSERT INTO DATABASE AND DISPLAY
  if(isset($_POST['save']) || isset($_POST['next'])) {
    $remind_id = $_POST['remind_id'];
    $remind_name = $_POST['remind_name'];
    $remind_gender = $_POST['remind_gender'];
    $remind_age = $_POST['remind_age'];
    $remind_address = $_POST['remind_address'];
    $remind_unit = $_POST['remind_unit'];
    $remind_hearing_date = $_POST['remind_hearing-date'];
    //PRISONER DETAILS
    $prisoner_id = $_POST['prisoner_id'];
    $name = $_POST['prisoner_name'];
    $gender = $_POST['prisoner_gender'];
    $age = $_POST['prisoner_age'];
    $address = $_POST['prisoner_address'];
    $entry_date = $_POST['prisoner_entry-date'];
    $release_date = $_POST['prisoner_release-date'];
    //LAWYER DETAILS
    $lawyer_pri_id = $_POST['lawyer_pri_id'];
    $lawyer_id = $_POST['lawyer_id'];
    $lawyer_name = $_POST['lawyer_name'];
    $lawyer_gender = $_POST['lawyer_gender'];
    $lawyer_email = $_POST['lawyer_email'];
    $lawyer_phone = $_POST['lawyer_phone'];
    $lawyer_address = $_POST['lawyer_address'];
    //TRANSFER DETAILS
    $transfer_pri_id = $_POST['transfer_pri_id'];
    $transfer_id = $_POST['transfer_id'];
    $location_from = $_POST['location_from'];
    $location_to = $_POST['location_to'];
    $transfer_date = $_POST['transfer_date'];
    $transfer_reason = $_POST['transfer_reason'];
    //CRIME DETAILS
    $crime_type = $_POST['crime_type'];
    $crime_description = $_POST['crime_description'];

    $sql = "INSERT INTO prisoner(prisoner_id, name, gender, age, address, entry_date, release_date) VALUES('$prisoner_id', '$name', '$gender', '$age', '$address', '$release_date', '$entry_date')";
    $remind_sql = "INSERT INTO remind_case(remind_id, name, gender, age, address, remind_unit, hearing_date) VALUES('$remind_id', '$remind_name', '$remind_gender', '$remind_age', '$remind_address', '$remind_unit', '$remind_hearing_date')";
    $lawyer_sql = "INSERT INTO prisoner_lawyer(prisoner_id, lawyer_id, full_name, gender, phone, email, address) VALUES('$lawyer_pri_id', '$lawyer_id', '$lawyer_name', '$lawyer_gender', '$lawyer_phone', '$lawyer_email', '$lawyer_address')";
    $transfer_sql = "INSERT INTO prisoner_transfer(id, transfer_reason, location_from, location_to, transfer_date, prisoner_id) VALUES('$transfer_id', '$transfer_reason', '$location_from', '$location_to', '$transfer_date', '$transfer_pri_id')";
    $crime_sql = "INSERT INTO crime(crime_type, description) VALUES('$crime_type', '$crime_description')";

    $_SESSION['msg'] = "RECORD SUCCESSFULLY ADDED...!!!";
    mysqli_query($db, $sql);
    mysqli_query($db, $remind_sql);
    mysqli_query($db, $lawyer_sql);
    mysqli_query($db, $transfer_sql);
    mysqli_query($db, $crime_sql);
  }


  $check = $_GET['edit'];
  $prisoner_record_results = mysqli_query($db, "SELECT * FROM prisoner WHERE prisoner_id='$check'");
  $remind_record_results = mysqli_query($db, "SELECT * FROM remind_case WHERE remind_id='$check'");
  $lawyer_record_results = mysqli_query($db, "SELECT * FROM prisoner_lawyer WHERE lawyer_id='$check'");
  $transfer_record_results = mysqli_query($db, "SELECT * FROM prisoner_transfer WHERE id='$check'");
  $crime_record_results = mysqli_query($db, "SELECT * FROM crime WHERE id='$check'");


  // ----------------------------- UPDATE DATABASE AND DISPLAY
  if(isset($_POST['update'])) {
    $remind_id = $_POST['remind_id'];
    $remind_name = $_POST['remind_name'];
    $remind_gender = $_POST['remind_gender'];
    $remind_age = $_POST['remind_age'];
    $remind_address = $_POST['remind_address'];
    $remind_unit = $_POST['remind_unit'];
    $remind_hearing_date = $_POST['remind_hearing-date'];
    //PRISONER DETAILS
    $prisoner_id = $_POST['prisoner_id'];
    $name = $_POST['prisoner_name'];
    $gender = $_POST['prisoner_gender'];
    $age = $_POST['prisoner_age'];
    $address = $_POST['prisoner_address'];
    $entry_date = $_POST['prisoner_entry-date'];
    $release_date = $_POST['prisoner_release-date'];
    //LAWYER DETAILS
    $lawyer_pri_id = $_POST['lawyer_pri_id'];
    $lawyer_id = $_POST['lawyer_id'];
    $lawyer_name = $_POST['lawyer_name'];
    $lawyer_gender = $_POST['lawyer_gender'];
    $lawyer_email = $_POST['lawyer_email'];
    $lawyer_phone = $_POST['lawyer_phone'];
    $lawyer_address = $_POST['lawyer_address'];
    //TRANSFER DETAILS
    $transfer_pri_id = $_POST['transfer_pri_id'];
    $transfer_id = $_POST['transfer_id'];
    $location_from = $_POST['location_from'];
    $location_to = $_POST['location_to'];
    $transfer_date = $_POST['transfer_date'];
    $transfer_reason = $_POST['transfer_reason'];
    //CRIME DETAILS
    $crime_type = $_POST['crime_type'];
    $crime_description = $_POST['crime_description'];

    mysqli_query($db, "UPDATE prisoner SET prisoner_id='$prisoner_id', name='$name', gender='$gender', age='$age', address='$address', entry_date='$release_date', release_date='$entry_date' WHERE prisoner_id='$check'");
    mysqli_query($db, "UPDATE remind_case SET remind_id='$remind_id', name='$remind_name', gender='$remind_gender', age='$remind_age', address='$remind_address', remind_unit='$remind_unit', hearing_date='$remind_hearing_date' WHERE remind_id='$check'");
    mysqli_query($db, "UPDATE prisoner_lawyer SET prisoner_id='$lawyer_pri_id', lawyer_id='$lawyer_id', full_name='$lawyer_name', gender='$lawyer_gender', phone='$lawyer_phone', email='$lawyer_email', address='$lawyer_address' WHERE lawyer_id='$check'");
    mysqli_query($db, "UPDATE prisoner_transfer SET id='$transfer_id', transfer_reason='$transfer_reason', location_from='$location_from', location_to='$location_to', transfer_date='$transfer_date', prisoner_id='$transfer_pri_id' WHERE id='$check'");
    mysqli_query($db, "UPDATE crime SET crime_type='$crime_type', description='$crime_description' WHERE id='$check'");

    $_SESSION['msg'] = "RECORD SUCCESSFULLY UPDATED...!!!";
  }

  // --------------------- DELETE FROM RECORD -----------------------
  if(isset($_GET['del'])) {
    $del_value = $_GET['del'];
    mysqli_query($db, "DELETE FROM prisoner WHERE prisoner_id='$del_value'");
    mysqli_query($db, "DELETE FROM remind_case WHERE remind_id='$del_value'");
    $lawyer_record_results = mysqli_query($db, "DELETE FROM prisoner_lawyer WHERE lawyer_id='$del_value'");
    $transfer_record_results = mysqli_query($db, "DELETE FROM prisoner_transfer WHERE id='$del_value'");
    $crime_record_results = mysqli_query($db, "DELETE FROM crime WHERE id='$del_value'");

    $_SESSION['msg'] = "RECORD DELETED...!!!";
  }


  //Retrieve the records
  $results = mysqli_query($db, "SELECT * FROM prisoner");
  $remind_results = mysqli_query($db, "SELECT * FROM remind_case");
  $lawyer_results = mysqli_query($db, "SELECT * FROM prisoner_lawyer");
  $transfer_results = mysqli_query($db, "SELECT * FROM prisoner_transfer");
  $case_results = mysqli_query($db, "SELECT * FROM crime");


  // if(isset($_POST['go_back'])) {
  //   header('location: prisoner.php');
  // }
 ?>
