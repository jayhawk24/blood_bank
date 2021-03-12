<?php session_start(); ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Blood Bank</a>
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

          <?php  if (!isset($_SESSION['username'])) : ?>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="login.php"
                >Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="register.php">Register</a>
            </li>
            
            <?php else:?>

              <?php if ($_SESSION['userType'] != 'reciever') : ?>
                <li class="nav-item">
                  <a class="nav-link" href="addInfo.php">Add Info</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="viewRequests.php">View Requests</a>
                </li>
              <?php endif ?>

          <?php endif ?>

            <li class="nav-item">
              <a class="nav-link" href="availableSamples.php"
                >Available Samples</a
              >
            </li>

            <li class="nav-item nav-link">
              <?php  if (isset($_SESSION['username'])) : ?>
               Welcome <b><?php echo $_SESSION['username']; ?></b>
            </li>

            <li class="nav-item active">
                <a href="index.php?logout='1'" class="nav-link">Logout</a>
              <?php endif ?>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<!-- Bootstrap js-->
<script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
      crossorigin="anonymous"
    ></script>