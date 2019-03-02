<?php
  session_start();

  $errors = array();
  include('config.php');

  if(isset($_POST['register'])) {
    $name = $_POST['name'];
    $employee_id = $_POST['employee_id'];
    $gender = $_POST['gender'];
    $employee_rank = $_POST['employee_rank'];
    $email = $_POST['email'];
    $password_1 = $_POST['password_1'];
    $password_2 = $_POST['password_2'];

    if(empty($email)) {
      array_push($errors, "Email is required");
    }
    if($gender == 'select gender') {
      array_push($errors, "Gender is required");
    }
    if($employee_rank == 'select rank') {
      array_push($errors, "Rank status required");
    }
    if(empty($password_1)) {
      array_push($errors, "Password is required");
    }
    if(empty($name)) {
      array_push($errors, "Username is required");
    }
    if(empty($employee_id)) {
      array_push($errors, "Employee ID required");
    }
    if($password_1 != $password_2) {
      array_push($errors, "Your passwords do not match");
    }

    if(count($errors) == 0) {
      $password = md5($password_1);
      $sql = "INSERT INTO register(name, employee_id, gender, employee_rank, email, password) VALUES('$name', '$employee_id','$gender', '$employee_rank', '$email', '$password')";

      mysqli_query($db, $sql);
      $_SESSION['success'] = "Account successfully created.";
      header('location: ../register_sign-in/login.php');
    }
  }

  if(isset($_POST['login'])) {
    $employee_id = $_POST['employee_id'];
    $password_1 = $_POST['password_1'];

    if(empty($employee_id)) {
      array_push($errors, "Employee ID required");
    }
    if(empty($password_1)) {
      array_push($errors, "Password is required");
    }
    if(count($errors) == 0) {
      $password = md5($password_1);
      $query = "SELECT * FROM register WHERE employee_id='$employee_id' AND password='$password'";
      $result = mysqli_query($db, $query);
      if (mysqli_num_rows($result) == 1) {
        header('location: ../jailor_index.php');
      } else {
        array_push($errors, "Incorrect employee id/password combination");
      }
    }
  }

  if(isset($_GET['logout'])) {
    session_destroy();
    header('location: register_sign-in/login.php');
  }
?>
