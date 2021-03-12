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

$query="SELECT reciever.title as rTitle, samples.title as sTitle, hospitals.title as hTitle, quantity 
        from requests left join reciever on reciever.id = requests.recieverId 
        left join samples on samples.id = requests.sampleId 
        left join hospitals on hospitals.id = requests.hospitalId 
        and requests.hospitalId=$hId where hospitals.title is not null";

$results = mysqli_query($mysqli, $query) ;
$sno = 1;
// Get every row of relation table

if (mysqli_num_rows($results) > 0) {
    while($row = mysqli_fetch_assoc($results)) {
        $sno ++;
        echo "<tr><th scope='row'>" . $sno . "</th>";
        echo "<td>" . $row['rTitle'] . "</td>" ;
        echo "<td>" . $row['sTitle'] . "</td>" ;
        echo "<td>" . $row['quantity'] . "</td></tr>" ;
    }
  }
else {
    echo "<tr><th scope='row'>0 results</th></tr>";
	array_push($errors, "Could not connect to database.");
}