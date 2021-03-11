<?php
session_start();

include('database.php');

$username = "";
$email = "";
$errors = array();

if (isset($_POST['registerUser'])){

    $username = mysqli_real_escape_string($mysqli, $_POST['username']);
    $name = mysqli_real_escape_string($mysqli, $_POST['name']);
    $bloodGroup = mysqli_real_escape_string($mysqli, $_POST['bloodGroup']);
    $pass = mysqli_real_escape_string($mysqli, $_POST['pass']);
    $confirmPass = mysqli_real_escape_string($mysqli, $_POST['confirmPass']);
    $regType = mysqli_real_escape_string($mysqli, $_POST['regType']);
    
    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($name)) { array_push($errors, "Email is required"); }
    if (empty($pass)) { array_push($errors, "Password is required"); }
    if ($pass != $confirmPass) { array_push($errors, "The two passwords do not match"); }

    $userCheckQuery = "Select * from $regType Where username='$username' Limit 1";
    $result = mysqli_query($mysqli, $userCheckQuery);
    $user = mysqli_fetch_assoc($result);


  if ($user){
      if ($user['username'] === $username){
          array_push($errors, 'Username already exists');
      }
  }

  if (count($errors) == 0){
      $password = md5($pass);
      echo $regType;
      if ($regType === 'reciever'){
        $query = "INSERT INTO reciever (title,username,password,bloodGroup) Values('$name', '$username', '$password',$bloodGroup)";
      }
      else{
        $query = "INSERT INTO hospitals (title,username,password) Values('$name', '$username', '$password')";
      }

      mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ".mysqli_error($mysqli), E_USER_ERROR);
      
      $_SESSION['username'] = $username;
        $_SESSION['success'] = 'You are logged In...';
        header('location: index.php');
    }

}