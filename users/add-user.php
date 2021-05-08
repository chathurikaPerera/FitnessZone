<?php 
require '../config.php';
?>
<!doctype html>
<html lang="en">

  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="/FitnessZone/styles/navbar.css">
    <title>Add User</title>
  </head>
  <body>
      <div class="topic"><h2>Add Customer</h2></div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <div class="container">
    <form class="row g-3" action="./add-user.php" method="post">
  <div class="col-md-6">
    <label for="firstname" class="form-label">First Name</label>
    <input type="text" class="form-control" id="firstname" name="firstname" required>
  </div>
  <div class="col-md-6">
    <label for="lastname" class="form-label">Last Name</label>
    <input type="text" class="form-control" id="lastname" name="lastname" required>
  </div>
  <div class="col-12">
    <label for="address" class="form-label">Address</label>
    <input type="text" class="form-control" id="address" placeholder="1234 Main St" name="address" required>
  </div>
  <div class="col-md-6">
    <label for="nic" class="form-label">NIC</label>
    <input type="text" class="form-control" id="nic" name="nic" required>
  </div>
  <div class="col-md-4">
    <label for="gender" class="form-label">Gender</label>
    <select id="gender" class="form-select">
      <option value='male'>Male</option>
      <option value="female">Female</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="age" class="form-label">Age</label>
    <input type="number" class="form-control" id="age" name="age"required>
  </div>
  <div class="col-md-6">
    <label for="weight" class="form-label">Weight</label>
    <input type="number" class="form-control" id="weight" name="weight" required>
  </div>
  <div class="col-md-4">
    <label for="height" class="form-label">Height</label>
    <input type="number" class="form-control" id="height" name="height" required>
  </div>
  <div class="col-md-2">
    <label for="register" class="form-label">Register Date</label>
    <input type="date" class="form-control" id="register" name="register" required>
  </div>
  <div class="col-md-6">
    <label for="mobile1" class="form-label">Mobile Number</label>
    <input type="number" class="form-control" id="mobile1" name="mobile1" required>
  </div>
  <div class="col-md-6">
    <label for="mobile2" class="form-label">Mobile Number (optional)</label>
    <input type="number" class="form-control" id="mobile2" name="mobile2">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Add Customer</button>
  </div>
</form>
    </div>

    
  </body>
</html>

