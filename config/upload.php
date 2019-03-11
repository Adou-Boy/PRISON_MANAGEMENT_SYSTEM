<?php
  include('config.php');

  if(isset($_POST['save'])) {
    $name = $_POST['prisoner_name'];
    $gender = $_POST['prisoner_gender'];
    $age = $_POST['prisoner_age'];
    $address = $_POST['prisoner_address'];
    $entry_date = $_POST['prisoner_entry-date'];
    $release_date = $_POST['prisoner_release-date'];

    $sql = "INSERT INTO prisoner(name, gender, age, address, entry_date, release_date) VALUES('$name', '$gender', '$age', '$address', '$release_date', '$entry_date')";
    mysqli_query($db, $sql);
    header('location: ../prisoner.php');
  }

 ?>
