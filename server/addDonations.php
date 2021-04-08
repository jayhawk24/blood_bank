<?php

require('database.php');
session_start();

    // Check if user is logged in as hospital
    if (!$_SESSION['userType']){
        header('location: login.php');
    }
    elseif ($_SESSION['userType'] != 'donors'){
        header('location: 404.html');
    }

if (isset($_POST['addDonations'])){

    $username = mysqli_real_escape_string($mysqli, $_SESSION['username']);
    $hId = mysqli_real_escape_string($mysqli, $_POST['hospital']);
    $sId = mysqli_real_escape_string($mysqli, $_POST['bloodGroup']);
    $date = mysqli_real_escape_string($mysqli, $_POST['date']);
    // Get Donor Id
    $getDonorId = "Select id from donors where username='$username' LIMIT 1";
    $res = mysqli_query($mysqli,$getDonorId) ;
    $user = mysqli_fetch_assoc($res);
    $dId = $user['id'];

    // Check if existing Donor has requested sample 
    $query = "SELECT donorId FROM donations where donorId=$dId";
    $res = mysqli_query($mysqli, $query);
    $remainingQty = mysqli_fetch_assoc($res);

    // Exit if already requested  
        if ($remainingQty){
            $_SESSION['success'] = "You have already made a request.";
        }
        else{
    // If No existing data, Create data
            $query = "INSERT INTO donations (donorId, sampleId, hospitalId, date) Values($dId, $sId, $hId, '$date')";
            mysqli_query($mysqli, $query);
            $_SESSION['success'] = 'Successfully requested donation.';
        }

    header('location: donateSample.php');

}