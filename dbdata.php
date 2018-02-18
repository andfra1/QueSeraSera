<style>
  #dbErr {
    display: block;
    font-size: 14px;
    font-family: Heveltica, Arial, Sans-serif;
    vertical-align: middle;
    width: 80%;
    text-align: center;
    /* top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    position: absolute; */
  }

  #dbErr > .bigError {
    color: red;
    font-weight: bold;
    display: block;
  }
</style>
<?php
$dbServer = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'simplecms';

@$conn = mysqli_connect($dbServer, $dbUser, $dbPass, $dbName);
 
if(!$conn) {
  die("<p id='dbErr'>Ojej! A co to się porobiło?<span class='bigError'>" . mysqli_connect_error($conn) . '</p>');
}
?>