

<?php
include_once ("config.php");
include_once (ROOT . "html/core/head.php");
?>

		<div class="login">
			<div class="login__wrapper bradius">
				<img src="img/svg/logo.svg" alt="tiger cms logo" class="svg svg--logo">
				<form method="POST" action="login.php" class="login__form">
					<p class="login__error">
						
					</p>
					<div class="row">
						<div class="box box__label">
							<label class="box__labelText" for="login">Login</label>
						</div>
						<div class="box box__field">
							<input type="text" id="login" name="login" class="box__fieldInput">
						</div>
					</div>
					<div class="row">
						<div class="box box__label">
							<label class="box__labelText" for="password">Password</label>
						</div>
						<div class="box box__field">
							<input type="password" id="password" class="box__fieldInput" name="password">
						</div>
					</div>
					<div class="row">
						<div class="box box__select">
							<input type="submit" value="Login" class="box__selectButton">
						</div>
					</div>
				</form>
			</div>
		</div>

		<?php
include_once (ROOT . "html/core/footer.php");
?>