<?php

session_start();

if (isset($_POST['submit'])) { //checks if 'submit' button used
  
  include_once("../../dbdata.php");

  $login = mysqli_real_escape_string($conn, $_POST['login']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  //check empty fields
  if (empty($login) || empty($password)) {
    header("Location: ../../index.php?login=empty");
    exit();
  }
  else {
    //check user exists
    $sql = "SELECT * FROM `users` WHERE `login`='$login' OR `mail`='$login'";
    $result = mysqli_query($conn, $sql); //checks sql query
    $resultCheck = mysqli_num_rows($result); //check how many results we have
    if($resultCheck < 1) { //if nothing
      header("Location: ../../index.php?login=error");
      exit();
    }
    else {
      //if user exist, push it into $row array
      if($row = mysqli_fetch_assoc($result)) {
        //hashed password checking
        $hashedPass = password_verify($password, $row['pass']);
        if($hashedPass == false) {
          header("Location: ../../index.php?login=error");
          exit();
        }
        //elseif cause in veird situation when !false, need to check it is true (for sure)
        elseif($hashedPass == true) {
          //login user here
          $_SESSION['login'] = $row['login'];
          $_SESSION['fname'] = $row['fname'];
          $_SESSION['lname'] = $row['lname'];
          $_SESSION['mail'] = $row['mail'];

          header("Location: ../index.php");
          exit();
        }
      }
    }
  }
}
else {
  header("Location: ../../index.php");
}
?>