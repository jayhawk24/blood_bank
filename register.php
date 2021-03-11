<?php include('server/server.php') ?>
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
              <a class="nav-link active" aria-current="page" href="login.php"
                >Login</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="register.php">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="addInfo.php">Add Info</a>
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
    <div class="container-sm mt-5">
      <form class="row" method="post" action="register.php">
        

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label"
            >Username / E-mail</label
          >
          <input
          name="username"
          type="email"
            class="form-control"
            id="exampleInputEmail1"
            aria-describedby="emailHelp"
          />
          <div id="emailHelp" class="form-text">
            We'll never share your email with anyone else.
          </div>
        </div>
        <div class="mb-3 col-md-6">
          <label for="name" class="form-label">Name</label>
          <input
          name="name"
            type="text"
            class="form-control"
            id="name"
            aria-describedby="emailHelp"
          />
        </div>

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

        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input
          name="pass"
            type="password"
            class="form-control"
            id="exampleInputPassword1"
          />
        </div>
        <div class="mb-3">
          <label for="confirmPassword" class="form-label"
            >Confirm Password</label
          >
          <input
          name="confirmPass"
            type="password"
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
            <label class="form-check-label" for="flexRadioDefault1">
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
            <label class="form-check-label" for="flexRadioDefault2">
              Reciever
            </label>
          </div>
        </div>
        <div class="mb-3">
          <button type="submit" class="btn btn-primary" name="registerUser">
            Submit
          </button>
        </div>

        <?php include("server/errors.php") ?>
        
      </form>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
      crossorigin="anonymous"
    ></script>
    <script src="js/register.js"></script>
  </body>
</html>
