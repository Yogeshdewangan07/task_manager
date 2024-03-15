<?php
session_start();
include "php/connect.php";
if (!isset($_SESSION['unique_id'])) {
  header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Task Manager</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <div class="container mt-4 mb-3 col-6">
    <h1>Task Manager</h1>
  </div>
  <div class="container mt-4 col-6">
    <form action="php/addtask.php" method="post" enctype="multipart/form-data">
    <div class="error-text alert alert-danger" style="display: none;"></div>
      <div class="d-flex flex-row justify-content-between">
        <div class="mb-3 flex-fill me-3">
          <label class="form-label">Task Name</label>
          <input type="text" name="taskname" class="form-control">
        </div>
        <div class="mb-3 ">
          <label class="form-label">Category</label>
          <select class="form-select" name="category" aria-label="Default select example">
            <option selected>Select Catagory</option>
            <option value="work">work</option>
            <option value="personal">personal</option>
            <option value="shoping">shoping</option>
            <option value="study">study</option>
          </select>
        </div>
      </div>
      <div class="d-flex flex-row">
        <div class="mb-3 flex-fill me-3">
          <label class="form-label">Start Date</label>
          <input type="date" name="startdate" class="form-control">
        </div>
        <div class="mb-3 flex-fill">
          <label class="form-label">End Date</label>
          <input type="date" name="enddate" class="form-control">
        </div>
      </div>
      <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea name="description" class="form-control"></textarea>
      </div>

      <button type="submit" name="submit" class="btn btn-primary">Add Task</button>
    </form>
  </div>

</body>

</html>