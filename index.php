<?php 
  session_start(); 

  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	unset($_SESSION['regType']);
  	header("location: index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blood Bank</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
      crossorigin="anonymous"
    />
  </head>
  <body>

    <?php require('server/navbar.php'); ?>
    <?php require('server/successMsg.php'); ?>

    <div class="container row m-5">
      <div class="col-6">
        <h1>Blood <span>Donation</span></h1>
        <p>If you're a healthy adult, you can usually donate a pint (about half a liter) of blood without endangering your health. Within a few days of a blood donation, your body replaces the lost fluids. And after two weeks, your body replaces the lost red blood cells.</p>
      </div>
      <img class="col-6" src="assets/donation.jpg" alt="">
    </div>
  </body>
</html>
