<?php
include_once ("config.php");
include_once (ROOT . "html/inc/head.php");

//form validation
if($_SERVER['QUERY_STRING'] == 'signup=userexists') {
	echo "Username or e-mail is already exists on our database!";
}
if($_SERVER['QUERY_STRING'] == 'signup=empty') {
	echo "Some fields are empty.";
}
if($_SERVER['QUERY_STRING'] == 'signup=invalid') {
	echo "First and/or last name are invalid!";
}
if($_SERVER['QUERY_STRING'] == 'signup=email') {
	echo "E-mail is invalid.";
}
if($_SERVER['QUERY_STRING'] == 'signup=registered') {
	echo "Halleluyah! You made it!";
}
if($_SERVER['QUERY_STRING'] == 'signup=wtf') {
	echo "Tak nie można.";
}

$defaultFName = "firstname";
$defaultLName = "lastname";
$defaultMail = "some@some.com";
?>

		<div class="login">
			<div class="login__wrapper bradius">
				<form method="POST" action="register.php" class="login__form">
					<p class="login__error">
						
					</p>
					<div class="row">
						<div class="box box__label">
							<label class="box__labelText" for="fname">
              First Name
              </label>
						</div>
						<div class="box box__field">
							<input type="text" id="fname" name="fname" class="box__fieldInput" value="<?= $defaultFName?>">
						</div>
					</div>
          <div class="row">
						<div class="box box__label">
							<label class="box__labelText" for="lname">
              Last Name
              </label>
						</div>
						<div class="box box__field">
							<input type="text" id="lname" name="lname" class="box__fieldInput" value="<?= $defaultLName?>">
						</div>
					</div>
          <div class="row">
						<div class="box box__label">
							<label class="box__labelText" for="mail">
              E-mail
              </label>
						</div>
						<div class="box box__field">
							<input type="text" id="mail" name="mail" class="box__fieldInput" value="<?= $defaultMail?>">
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
							<label class="box__labelText" for="password">Password</label>
						</div>
						<div class="box box__field">
							<input type="password" id="password" class="box__fieldInput" name="password">
						</div>
					</div>
					<div class="row">
						<div class="box box__select">
							<button type="submit" name="submit" class="box__selectButton">Sign in</button>
						</div>
					</div>
				</form>
			</div>
		</div>

<?php
include_once (ROOT ."html/inc/footer.php");
?>