<?php

include('database.php');
session_start();
    // Check if user is logged in as hospital
    if (!$_SESSION['userType']){
        header('location: login.php');
    }
    elseif ($_SESSION['userType'] != 'hospitals'){
        header('location: 404.html');
    }

// Get Hospital Id
$username = $_SESSION['username'];
$getHospitalId = "Select id from hospitals where username='$username' LIMIT 1";
$res = mysqli_query($mysqli,$getHospitalId) ;
$user = mysqli_fetch_assoc($res);
$hId = $user['id'];

// Only get request for currently logged in hospital.

$query="SELECT donors.title as donor, samples.title as bloodGroup, date
        from donations inner join donors on donors.id = donations.donorId 
        inner join samples on samples.id = donations.sampleId 
        inner join hospitals on hospitals.id = donations.hospitalId 
        and donations.hospitalId=$hId where hospitals.title is not null";

$results = mysqli_query($mysqli, $query) ;
$sno = 0;
// Get every row of relation table

if (mysqli_num_rows($results) > 0) {
    while($row = mysqli_fetch_assoc($results)) {
        $sno ++;
        echo "<tr><th scope='row'>" . $sno . "</th>";
        echo "<td>" . $row['donor'] . "</td>" ;
        echo "<td>" . $row['bloodGroup'] . "</td>" ;
        echo "<td>" . $row['date'] . "</td>" ;
    }
  }
else {
    echo "<tr><th scope='row'>0 results</th></tr>";
	array_push($errors, "Could not connect to database.");
}