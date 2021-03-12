<?php
include('database.php');

$query = "SELECT hospitals.title AS hTitle, samples.title AS sTitle, quantity 
FROM hospitalSamples 
LEFT JOIN hospitals on hospitals.id = hospitalSamples.hospitalId 
LEFT JOIN samples on samples.id = hospitalSamples.sampleId";

$results = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ".mysqli_error($mysqli), E_USER_ERROR);
$sno = 1;
// Get every row of relation table

if (mysqli_num_rows($results) > 0) {
    while($row = mysqli_fetch_assoc($results)) {
        echo "<tr><th scope='row'>" . $sno . "</th>";
        echo "<td>" . $row['hTitle'] . "</td>" ;
        echo "<td>" . $row['sTitle'] . "</td>" ;
        echo "<td>" . $row['quantity'] . "</td></tr>" ;
        $sno++;
    }
  }
else {
    echo "0 results";
	array_push($errors, "Could not connect to database.");
}