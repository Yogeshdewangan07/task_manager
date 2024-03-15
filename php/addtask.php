<?php
include 'connect.php';
session_start();

if(isset($_POST['submit'])){
  $taskname = mysqli_real_escape_string($conn, $_POST['taskname']);
  $category = mysqli_real_escape_string($conn, $_POST['category']);
  $startdate = mysqli_real_escape_string($conn, $_POST['startdate']);
  $enddate = mysqli_real_escape_string($conn, $_POST['enddate']);
  $description = mysqli_real_escape_string($conn, $_POST['description']);
  $user_id = $_SESSION['unique_id'];

  if(!empty($taskname) && !empty($category) && !empty($startdate) && !empty($enddate) && !empty($description) && !empty($user_id)){

    $sql = "insert into `tasks` (task_name, category, start_date, end_date, description, user_id) values ('$taskname', '$category', '$startdate', '$enddate', '$description', '$user_id')";

    $result = mysqli_query($conn, $sql);
    if($result){
      header("location: ../home.php");
    }else{
      echo "Task not added ". mysqli_error($conn);
    }
  }else{
    echo "All fields are required";
  }
}
?>