<?php
include_once ("../path.php");
include_once (ROOT . "html/inc/head.php");
if(!isset($_SESSION['login'])) {
	header("Location: ../");
	exit();
}
?>

  <div class="wrapperPanel">
    <?php
		include_once('comp/panel-menu.php');
		?>

     <div class="main">
        <?php
    //post creation
      if($_SERVER['QUERY_STRING'] == 'create') {
        ?>
        <h3>
        Add acount
      </h3>
      <?php
      }
      //posts list
      else {
?>
          <h3>
            Accounts list
          </h3>
<?php
        include_once('../dbdata.php');

        $sql = "SELECT * FROM `users` WHERE 1";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0) {
          // output data of each row
          ?>
          <table class="queryTable">
              <thead>
                <tr>
                  <td>
                    ID
                  </td>
                  <td>
                    First Name
                  </td>
                  <td>
                    Last Name
                  </td>
                  <td>
                    Mail
                  </td>
                  <td>
                    Creation date
                  </td>
                  <td>
                    Modification date
                  </td>
                </tr>
              </thead>
              <tbody>
            
          <?php
          while($row = $result->fetch_assoc()):
            ?>
                <tr>
                  <td>
                    <?=$row["id"]?>
                  </td>
                  <td>
                    <?=$row["fname"]?>
                  </td>
                  <td>
                    <?=$row["lname"]?>
                  </td>
                  <td>
                    <?=$row["mail"]?>
                  </td>
                  <td>
                    <?=$row["creation date"]?>
                  </td>
                  <td>
                    <?=$row["modification date"]?>
                  </td>
                </tr>

            <?php
          endwhile;
          ?>
            </tbody>
            </table>
          <?php
      } else {
          echo "0 results";
      }
      $conn->close();
      }
    ?>
      </div>
    ?>


<?php
	include_once (ROOT . "html/inc/footer.php");
?>