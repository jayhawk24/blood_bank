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
      <h2>Requested Samples</h2>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Reciever</th>
            <th scope="col">Requested Blood Group</th>
            <th scope="col">Quantity</th>
          </tr>
        </thead>
        <tbody>
          <?php include('server/getRequests.php'); ?>
        </tbody>
      </table>
    </div>
  </body>
</html>
