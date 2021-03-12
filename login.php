<?php include('server/handleLogin.php') ?>
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

    <div class="container-sm mt-5">
      <form method="post" action="login.php">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Username</label>
          <input
            type="email"
            name="username"
            class="form-control"
            id="exampleInputEmail1"
            aria-describedby="emailHelp"
          />
          <div id="emailHelp" class="form-text">
            We'll never share your email with anyone else.
          </div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input
            type="password"
            name="password"
            class="form-control"
            id="exampleInputPassword1"
          />
        </div>
        <div class="mb-3 d-inline-flex">
          <div class="form-check m-2">
            <input
              class="form-check-input"
              type="radio"
              name="regType"
              id="regTypeH"
              value="hospitals"
              onclick="checkType()"
            />
            <label class="form-check-label" for="hospital">
              Hospital
            </label>
          </div>
          <div class="form-check m-2">
            <input
              class="form-check-input"
              type="radio"
              name="regType"
              id="regTypeR"
              value="reciever"
              onclick="checkType()"
              checked
            />
            <label class="form-check-label" for="reciever">
              Reciever
            </label>
          </div>
        </div>
        <div class="mb-3">
          <button type="submit" class="btn btn-primary" name="loginUser">Submit</button>
        </div>
        <?php include('server/errors.php'); ?>
      </form>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
