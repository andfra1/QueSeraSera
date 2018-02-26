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
      /*form validation*/
      if($_SERVER['QUERY_STRING'] == 'create=userexists') {
        echo '<p class="info info--bad">Username or e-mail is already exists on our database!';
      }
      if($_SERVER['QUERY_STRING'] == 'create=empty') {
        echo '<p class="info info--bad">Some fields are empty.';
      }
      if($_SERVER['QUERY_STRING'] == 'create=invalid') {
        echo '<p class="info info--bad">First and/or last name are invalid!';
      }
      if($_SERVER['QUERY_STRING'] == 'create=email') {
        echo '<p class="info info--bad">E-mail is invalid.';
      }
      if($_SERVER['QUERY_STRING'] == 'create=registered') {
        echo '<p class="info info--good">Account added.';
      }
      echo '<button class="info__close">' . file_get_contents("../img/svg/cross.svg") . '</button></p>';
    /*account creation*/
      if($_SERVER['QUERY_STRING'] == 'create') {
      ?>
        <h3>
          Add acount
        </h3>

        <form method="POST" action="comp/addAccount.php" class="form">
          <div class="row">
            <div class="box box__label">
              <label class="box__labelText" for="fname">
                First Name
              </label>
            </div>
            <div class="box box__field">
              <input type="text" id="fname" name="fname" class="box__fieldInput" value="">
            </div>
          </div>
          <div class="row">
            <div class="box box__label">
              <label class="box__labelText" for="lname">
                Last Name
              </label>
            </div>
            <div class="box box__field">
              <input type="text" id="lname" name="lname" class="box__fieldInput" value="">
            </div>
          </div>
          <div class="row">
            <div class="box box__label">
              <label class="box__labelText" for="mail">
                E-mail
              </label>
            </div>
            <div class="box box__field">
              <input type="text" id="mail" name="mail" class="box__fieldInput" value="">
            </div>
          </div>
          <div class="row">
            <div class="box box__label">
              <label class="box__labelText" for="login">
                Login
              </label>
            </div>
            <div class="box box__field">
              <input type="text" id="login" name="login" class="box__fieldInput">
            </div>
          </div>
          <div class="row">
            <div class="box box__label">
              <label class="box__labelText" for="password">
                Password
              </label>
            </div>
            <div class="box box__field">
              <input type="password" id="password" class="box__fieldInput" name="password">
            </div>
          </div>
          <div class="row">
            <div class="box box__field box__field--button">
              <input type="submit" name="submit" value="Signin" class="box__fieldButton">
            </div>
          </div>
    </div>
    </form>

    <?php
      }
      /* accounts list */
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
              <?php
              $tableLabels = ['id', 'first name', 'last name', 'e-mail', 'created', 'last modification'];
              foreach($tableLabels as $val) {
                echo ("<td>" . $val . "</td>");
              }
              ?>
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


  <?php
	include_once (ROOT . "html/inc/footer.php");
?>