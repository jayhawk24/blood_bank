<?php
session_start();

if (isset($_SESSION['username'])){
  header('location: index.php');
}

include('database.php');

$username = "";
$errors = array();

if (isset($_POST['loginUser'])) {
    $username = mysqli_real_escape_string($mysqli, $_POST['username']);
    $password = mysqli_real_escape_string($mysqli, $_POST['password']);
    $regType = mysqli_real_escape_string($mysqli, $_POST['regType']);
  
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM $regType WHERE username='$username' AND password='$password'";
        $results = mysqli_query($mysqli, $query) ;
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['username'] = $username;
        $_SESSION['userType'] = $regType;
          $_SESSION['success'] = "You are logged in";
          header('location: index.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }