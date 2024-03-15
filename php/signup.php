<?php 
include "connect.php";
session_start();

  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  // all fields are required
  if(!empty($firstname) && !empty($lastname) && !empty($email) && !empty($password)){

    // check email already exist or not
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      $sql = mysqli_query($conn, "select * from `registration` where email = '$email'");

      // check email is already present or not
      if(mysqli_num_rows($sql)>0){
        echo "$email - this email already exist!";
      }else{
        $unique_id = rand(time(), 100000000);

        $sql = "insert into `registration` (firstname, lastname, email, password, unique_id) values ('$firstname', '$lastname', '$email', '$password', '$unique_id')";

        $result = mysqli_query($conn, $sql);
        
        if(!$result){
          echo "database error".mysqli_error($conn);
        }else{
          $_SESSION['unique_id'] = $unique_id;
          echo "success";
        }
      }
    }else{
      echo "enter valid email";
    }
  }else{
    echo "fill all fields";
  }

  

?>
