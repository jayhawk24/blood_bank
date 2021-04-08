<?php

require('database.php');
session_start();

    // Check if user is logged in as hospital
    if (!$_SESSION['userType']){
        header('location: login.php');
    }
    elseif ($_SESSION['userType'] === 'hospitals'){
        header('location: 404.html');
    }

if (isset($_POST['addRequests'])){

    $username = mysqli_real_escape_string($mysqli, $_SESSION['username']);
    $hId = mysqli_real_escape_string($mysqli, $_POST['hospital']);
    $sId = mysqli_real_escape_string($mysqli, $_POST['bloodGroup']);
    $qty = mysqli_real_escape_string($mysqli, $_POST['quantity']);
    
    // Get Reciever Id
    $getRecieverId = "Select id from reciever where username='$username' LIMIT 1";
    $res = mysqli_query($mysqli,$getRecieverId) ;
    $user = mysqli_fetch_assoc($res);
    $rId = $user['id'];

    // Check if existing Reciever has requested sample 
    $query = "SELECT recieverId FROM requests where recieverId=$rId";
    $res = mysqli_query($mysqli, $query) ;
    $remainingQty = mysqli_fetch_assoc($res);

    // Exit if already requested  
        if ($remainingQty){
            $_SESSION['success'] = "You have already made a request.";
        }
        else{
    // If No existing data, Create data
            $query = "INSERT INTO requests (recieverId,sampleId, hospitalId, quantity) Values($rId, $sId, $hId, $qty)";
            mysqli_query($mysqli, $query) ;
            $_SESSION['success'] = 'Successfully requested sample.';
        }

    header('location: requestSamples.php');

}