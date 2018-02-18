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
          Post create
        </h3>
        
        <input type="text" value="Post title">
        <textarea name="" id="" cols="30" rows="10">Some text here</textarea>
        <button class="btn">
          save
        </button>
        <!--
        <button class="btn jsAddRow">
          add row
        </button>
        <button class="btn jsUpdate">
          save
        </button>
        <div class="wrap" id="wrap">
        
          <div class="row">
            <?php
            for($cols = 0; $cols < 9; $cols++){
            ?>
          <button class="btn btn--col jsAddCol">col <?= ($cols+1)?></button>
          <?php
          }
          ?>
          <button class="btn btn--minus jsRmRow">-</button>
          </div>
          
        </div>
        <button class="btn jsAddRow">
          add row
        </button>
        <button class="btn jsUpdate">
          save
        </button>
        -->
        <?php
      }
      //posts list
      else {
        echo 'All posts will be displayed here';
      }
    ?>
    </div>


    <?php
	include_once (ROOT . "html/inc/footer.php");
?>