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

    <div class="mainWindow">
      Accounts
    </div>


<?php
	include_once (ROOT . "html/inc/footer.php");
?>