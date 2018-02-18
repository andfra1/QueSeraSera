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
          <form action="comp/addPost.php" method="POST">
            <input type="text" name="post-title" value="Post title">
            <textarea name="post-content" id="" cols="30" rows="10">Some text here</textarea>
            <button class="btn" name="submit" type="submit">
              save
            </button>
          </form>
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
        ?>
        <h3>
        Posts list
      </h3>
      <?php
        include_once('../dbdata.php');

        $sql = "SELECT * FROM `posts` WHERE 1";
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
                    Title
                  </td>
                  <td>
                    Last update
                  </td>
                </tr>
              </thead>
              <tbody>
            
          <?php
          while($row = $result->fetch_assoc()):
            ?>
                <tr>
                  <td>
                    <?=$row["post id"]?>
                  </td>
                  <td>
                    <?=$row["post title"]?>
                  </td>
                  <td>
                    <?=$row["post update"]?>
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