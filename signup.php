<?php
include "php/connect.php";
session_start();
if (isset($_SESSION['unique_id'])) {
  header('location: home.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign up</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <div class="container mt-4 col-6 signup">
    <div class="card">
      <div class="card-header">
        <h4>Sign Up</h4>
      </div>
      <div class="card-body">

        <form method="post" action="#" enctype="multipart/form-data">
          <div class="error-text alert alert-danger" style="display: none;"></div>
          <div class="mb-3">
            <label class="form-label">First Name</label>
            <input type="text" name="firstname" class="form-control">
          </div>
          <div class="mb-3">
            <label class="form-label">Last Name</label>
            <input type="text" name="lastname" class="form-control">
          </div>
          <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" name="email" class="form-control">
          </div>
          <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control">
          </div>
          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
        <div>
          have an account? <a href="login.php">Login</a>
        </div>
      </div>
    </div>
  </div>

  <script src="javascript/signup.js"></script>
</body>

</html>