<?php

    $host = "localhost";
    $port = "3306";
    $db = "bloodBank";
    $user = "bloodBankAdmin";
    $pass = "securePassword";

    $mysqli = mysqli_connect(
            $host,
            $user,
            $pass,
            $db
        );

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }