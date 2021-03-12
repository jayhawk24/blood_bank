<?php include('server/addRequestSamples.php'); ?>
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
  </body>
</html>
