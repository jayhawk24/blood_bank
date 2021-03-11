<?php

require('database.php');
session_start();

    // Check if user is logged in as hospital
    if (!$_SESSION['userType']){
        header('location: login.php');
    }
    elseif ($_SESSION['userType'] != 'hospitals'){
        header('location: 404.html');
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

    // Check if existing hospital data is left
    $query = "SELECT quantity FROM hospitalSamples where hospitalId=$hId and sampleId = $sId";
    $res = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ".mysqli_error($mysqli), E_USER_ERROR);
    $remainingQty = mysqli_fetch_assoc($res);

    // Update existing quantity    
        if ($remainingQty){
            $qty += $remainingQty['quantity'];
            $query = "UPDATE hospitalSamples SET quantity = $qty where hospitalId = $hId and sampleId = $sId";
            mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ".mysqli_error($mysqli), E_USER_ERROR);
        }
        else{
    // If No existing data, Create data
            $query = "INSERT INTO hospitalSamples (hospitalId, sampleId, quantity) Values($hId, $sId, $qty)";
            mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ".mysqli_error($mysqli), E_USER_ERROR);
        }

    $_SESSION['success'] = 'Successfully added sample.';
    header('location: addInfo.php');

}