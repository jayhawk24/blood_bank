<?php

require('database.php');
session_start();

    // Check if user is logged in 
    if (!$_SESSION['username']){
        header('location: login.php');
    }

if (isset($_POST['addSamples'])){

    $sId = mysqli_real_escape_string($mysqli, $_POST['bloodGroup']);
    $username = mysqli_real_escape_string($mysqli, $_SESSION['username']);
    $qty = mysqli_real_escape_string($mysqli, $_POST['quantity']);
    
    // Get Hospital Id
    $getHospitalId = "Select * from hospitals where username='$username' LIMIT 1";
    $res = mysqli_query($mysqli,$getHospitalId) or trigger_error("Query Failed! SQL: $query - Error: ".mysqli_error($mysqli), E_USER_ERROR);
    $user = mysqli_fetch_assoc($res);
    $hId = $user['id'];
    // Create data
    $query = "INSERT INTO hospitalSamples (hospitalId, sampleId, quantity) Values($hId, $sId, $qty)";
    mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ".mysqli_error($mysqli), E_USER_ERROR);

    $_SESSION['success'] = 'Successfully added sample.';
    header('location: addInfo.php');
}