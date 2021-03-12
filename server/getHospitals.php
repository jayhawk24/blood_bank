<?php
include('database.php');

$query = "SELECT id,title FROM hospitals";
$results = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ".mysqli_error($mysqli), E_USER_ERROR);

if (mysqli_num_rows($results) > 0) {
    while($row = mysqli_fetch_assoc($results)) {
      echo "<option value=" . $row['id'] . ">" . $row['title'] . "</option>";
    }
  }
else {
    echo "0 results";
	array_push($errors, "Could not connect to database.");
}