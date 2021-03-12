<?php require('server/addSamples.php') ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blood Bank | Add Samples</title>
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

    <div class="container-sm mt-4">
      <h2>Add Samples</h2>
      <form class="row" method="post" action="addInfo.php">
      <div id="bloodGroup" class="col-md-6">
        <label for="bloodGroup" class="form-label">Blood Group</label>
          <select
            class="form-select form-select-sm"
            name="bloodGroup"
            type="text"
            class="form-control"
            id="bloodGroupInput"
            aria-describedby="emailHelp"
            >
              <?php include('server/getBloodGroup.php') ?>
          </select>
        </div>
        <div class="mb-3 col-md-6">
          <label for="quantity" class="form-label">Quantity (Bottles)</label>
          <input type="number" class="form-control" id="quantity" name='quantity'/>
        </div>

        <button type="submit" class="btn btn-primary col-2" name="addSamples" >Submit</button>
      </form>

    </div>

  </body>
</html>
