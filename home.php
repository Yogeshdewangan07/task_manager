<?php
session_start();
include "php/connect.php";
if(!isset($_SESSION['unique_id'])){
  header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <?php
      $sql = mysqli_query($conn, "SELECT * FROM registration WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
  ?>
  <div class="container mt-4 col-8 d-flex justify-content-between">
    <div>
      <h2>Welcome <?php echo $row['firstname'] ." ". $row['lastname'] ?>! Manage your daily task</h2>
    </div>
    <div>
    <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>"><button class="btn btn-primary">Log out</button></a>
    </div>
  </div>

  <div class="container mt-4 mb-3 col-8 d-flex justify-content-between">
    <h1>Task Manager</h1>
    <a href="task.php?unique_id=<?php echo $row['unique_id']; ?>"><button class="btn btn-primary">Add New Task</button> </a>
  </div>

  <div class="container mt-4 col-8">

    <?php
      $query = mysqli_query($conn, "SELECT * FROM tasks where user_id = {$_SESSION['unique_id']}");
      if($query){
        while($row = mysqli_fetch_assoc($query)){
          $taskid = $row['id'];
          $taskname = $row['task_name'];
          $category = $row['category'];
          $startdate = $row['start_date'];
          $enddate = $row['end_date'];
          $description = $row['description'];

          echo '
          <div class="card mb-4">
      <div class="card-header d-flex justify-content-between">
        <h5>Task name : '.$taskname.'</h5>
        <a href="php/deletetask.php?deleteid='.$taskid.'"><button class="btn btn-danger">Delete</button></a>
      </div>
      <div class="card-body">
        <h6>Catagory : '.$category.' </h6>
        <div class="d-flex justify-content-between">
          <h6>Start Date : '.$startdate.' </h6>
          <h6>End Date : '.$enddate.' </h6>
        </div>
        <div class="d-flex">
          <h6>Description : '.$description.'</h6>
        </div>
      </div>
    </div>
          ';
        }
      }
    ?>
    
</body>
</html>