<?php
include 'connect.php';

if(isset($_GET['deleteid'])){
  $id = $_GET['deleteid'];

  $sql = "delete from `tasks` where id = $id";
  $result = mysqli_query($conn, $sql);
  if($result){
    header("location: ../home.php");
  }else{
    echo "Task is not deleted ".mysqli_error($conn);
  }

}
?>