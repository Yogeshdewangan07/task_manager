<?php 
session_start();
include "connect.php";

  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  if(!empty($email) && !empty($password)){
    $sql = "select * from `registration` where email = '$email'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)>0){
      $row = mysqli_fetch_assoc($result);
      $db_pass = $row['password'];
      $user_pass = $password;

      if($user_pass === $db_pass){
        $_SESSION['unique_id'] = $row['unique_id'];
        echo "success";
      }else{
        echo "password not match";
      }

    }else{
      echo "$email this email not exist";
    }
  } else{
    echo "all input fields are required";
  }
  

?>
