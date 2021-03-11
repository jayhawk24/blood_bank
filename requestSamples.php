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
      <form>
        <div class="mb-3">
          <select
            class="form-select form-select-sm"
            aria-label=".form-select-sm example"
          >
            <option selected disabled>Hospital</option>
            <option value="A+">A RhD positive (A+)</option>
            <option value="A-">A RhD negative (A-)</option>
            <option value="B+">B RhD positive (B+)</option>
            <option value="B-">B RhD negative (B-)</option>
            <option value="O+">O RhD positive (O+)</option>
            <option value="O-">O RhD negative (O-)</option>
            <option value="AB+">AB RhD positive (AB+)</option>
            <option value="AB-">AB RhD negative (AB-)</option>
          </select>
        </div>
        <div class="mb-3">
          <select
            class="form-select form-select-sm"
            aria-label=".form-select-sm example"
          >
            <option selected disabled>Select Blood Group</option>
            <option value="A+">A RhD positive (A+)</option>
            <option value="A-">A RhD negative (A-)</option>
            <option value="B+">B RhD positive (B+)</option>
            <option value="B-">B RhD negative (B-)</option>
            <option value="O+">O RhD positive (O+)</option>
            <option value="O-">O RhD negative (O-)</option>
            <option value="AB+">AB RhD positive (AB+)</option>
            <option value="AB-">AB RhD negative (AB-)</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="quantity" class="form-label">Quantity (Bottles)</label>
          <input type="number" class="form-control" id="quantity" />
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
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
