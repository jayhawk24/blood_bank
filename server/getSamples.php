<?php
include('database.php');

$query = "SELECT * FROM hospitalSamples";
$results = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ".mysqli_error($mysqli), E_USER_ERROR);
$sno = 1;
// Get every row of relation table

if (mysqli_num_rows($results) > 0) {
    while($row = mysqli_fetch_assoc($results)) {
        $hId = $row['hospitalId'];
        $sId = $row['sampleId'];
        $qty = $row['quantity'];
        $sno ++;
        // For every row of relation table get hospital and sample names.
        $query = "SELECT (SELECT title from hospitals where id=$hId) AS hospital, (SELECT title
        from samples where id=$sId) AS sample";
        $res2 = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ".mysqli_error($mysqli), E_USER_ERROR);
        if (mysqli_num_rows($res2) > 0){
            while ($row2 = mysqli_fetch_assoc($res2)){
                echo "<tr><th scope='row'>" . $sno . "</th>";
                echo "<td>" . $row2['hospital'] . "</td>" ;
                echo "<td>" . $row2['sample'] . "</td>" ;
                echo "<td>" . $qty . "</td></tr>" ;
            }
        }
    }
  }
else {
    echo "0 results";
	array_push($errors, "Could not connect to database.");
}