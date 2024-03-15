<?php
session_start();
if (isset($_SESSION['unique_id'])) {
  header("location: home.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
<div class="container mt-4 col-6 login">
  <div class="card">
    <div class="card-header">
      <h4>Login</h4>
    </div>
  <div class="card-body">
  
    <form method="post" enctype="multipart/form-data">
      <div class="error-text alert alert-danger" style="display: none;"></div>
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
      Don't have an account? <a href="signup.php">Sign up</a>
    </div>
  </div>
  </div>
  </div>

  <script src="javascript/login.js"></script>
</body>

</html>