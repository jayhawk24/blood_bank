<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blood Bank | Samples</title>
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
      <h2>Available Samples</h2>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Hospital</th>
            <th scope="col">Blood Group</th>
            <th scope="col">Quantity</th>

            <?php session_start();if($_SESSION['userType'] != 'hospitals') : ?>
            <th>
              <a href="requestSamples.php">
                <button class="btn btn-primary">
                  <nobr> Request Sample </nobr>
                </button>
              </a>
            </th>
            <?php endif ?>
          </tr>
        </thead>
        <tbody>
          <?php include('server/getSamples.php'); ?>
        </tbody>
      </table>
    </div>
  </body>
</html>
