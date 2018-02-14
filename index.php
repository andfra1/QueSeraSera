<?php
include_once ("path.php");
include_once (ROOT . "html/inc/head.php");
?>

		<div class="login">
			<div class="login__wrapper">
			<div class="borderOnly"></div>
				<form method="POST" action="html/comp/login.php" class="login__form">
					<p class="login__error">
						<?php
						//form validation
						if($_SERVER['QUERY_STRING'] == 'login=empty') {
							echo "Fill username and password.";
						}
						if($_SERVER['QUERY_STRING'] == 'login=error') {
							echo "Username or password is not valid!";
						}
						?>
					</p>
					<p class="login__success">
						<?php
						if($_SERVER['QUERY_STRING'] == 'signup=success') {
							echo "You're registered!<br>Now fill username and password.";
						}
						?>
					</p>
					<div class="row">
						<div class="box box__label">
							<label class="box__labelText" for="login">Login</label>
						</div>
						<div class="box box__field">
						<div class="borderOnly"></div>
							<input type="text" id="login" name="login" class="box__fieldInput">
						</div>
					</div>
					<div class="row">
						<div class="box box__label">
							<label class="box__labelText" for="password">Password</label>
						</div>
						<div class="box box__field">
						<div class="borderOnly"></div>
							<input type="password" id="password" class="box__fieldInput" name="password">
						</div>
					</div>
					<div class="row">
						<div class="box box__field box__field--button">
							<div class="borderOnly borderOnly--button"></div>
							<input type="submit" name="submit" value="Login" class="box__fieldButton">
						</div>
					</div>
				</form>
			</div>
		</div>

		<?php
include_once (ROOT . "html/inc/footer.php");
?>