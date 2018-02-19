<?php
if (isset($_POST['submit']) //check if submitted
//&& strstr($_SERVER['HTTP_REFERER'],'.php',true) == 'http://localhost/QueSeraSera/signup_form') //and sended from this URL
{
  include_once("../../dbdata.php");

  $fname = mysqli_real_escape_string($conn, $_POST['fname']);
  $lname = mysqli_real_escape_string($conn, $_POST['lname']);
  $mail = mysqli_real_escape_string($conn, $_POST['mail']);
  $login = mysqli_real_escape_string($conn, $_POST['login']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  //empty fields
  if (empty($fname) || empty($lname) || empty($mail) || empty($login) || empty($password)) {
    header("Location: ../../signup_form.php?signup=empty");
    exit();
  }
  else {
    //check character is valid
    if(!preg_match("/^[a-zA-Z]*$/", $fname) || !preg_match("/^[a-zA-Z]*$/", $lname)) {
      header("Location: ../../signup_form.php?signup=invalid");
      exit();
    }
    else {
      //check email is valid
      if(!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../../signup_form.php?signup=email");
        exit();
      }
      else {
        $sql = "SELECT * FROM users WHERE `login`='$login' OR `mail`='$login' OR `mail`='$mail'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        
        if($resultCheck > 0) {
          header("Location: ../../signup_form.php?signup=userexists");
          exit();
        }
        else {
          //hashing password
          $hashPass = password_hash($password, PASSWORD_DEFAULT);
          //insert data to db
          $insert = "INSERT INTO users (`fname`, `lname`, `mail`, `login`, `pass`) VALUES ('$fname', '$lname', '$mail', '$login', '$hashPass');";
          $r = mysqli_query($conn, $insert);
          header("Location: ../../index.php?signup=success");
          exit();
        }
      }
    }
  }
}
else {
  header("Location: ../../signup_form.php?wtf");
  exit();
}
?>