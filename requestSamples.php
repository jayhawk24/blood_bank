<?php include('server/handleRequestSamples.php'); ?>
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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Blood Bank</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="login.php"
                >Login</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="register.php">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="addInfo.php">Add Info</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="availableSamples.php"
                >Available Samples</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="viewRequests.php">View Requests</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-sm mt-4">
      <h2>Request Samples</h2>
      <form  method="post" action="requestSamples.php">
      <div class="row">
      
      <div id="hospital" class="mb-3">
          <label for="hospital" class="form-label">Hospital Name</label>
          <select
            class="form-select form-select"
            name="hospital"
            type="text"
            class="form-control"
            id="hospitalInput"
            aria-describedby="emailHelp"
            >
              <?php include('server/getHospitals.php') ?>

          </select>
          </div>

        <div id="bloodGroup" class="mb-3">
          <label for="bloodGroup" class="form-label">Blood Group</label>
          <select
            class="form-select form-select"
            name="bloodGroup"
            type="text"
            class="form-control"
            id="bloodGroupInput"
            aria-describedby="emailHelp"
            >

              <?php include('server/getBloodGroup.php') ?>

          </select>
          </div>
      </div>
      <div class="row">
        <div class="mb-3 col-6">
          <label for="quantity" class="form-label">Quantity (Bottles)</label>
          <input type="number" class="form-control" id="quantity" name="quantity" />
        </div>
      </div>
      <div class="mb-3 row">
        <button name="addRequests" type="submit" class="btn btn-primary col-2">Submit</button>
      </div>
      </form>

      <?php require('server/successMsg.php'); ?>
      
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
