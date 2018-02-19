<?php
if (isset($_POST['submit']))
{
  include_once("../../dbdata.php");

  $pTitle = mysqli_real_escape_string($conn, $_POST['post-title']);
  $pContent = mysqli_real_escape_string($conn, $_POST['post-content']);

    $insert = "INSERT INTO `posts`(`post title`, `post content`) VALUES ('$pTitle', '$pContent');";
    $r = mysqli_query($conn, $insert);
    header("Location: ../panel-posts.php");
    exit();
}
else {
  header("Location: ../index.php");
  exit();
}
?>