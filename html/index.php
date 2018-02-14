<?php
include_once ("../path.php");
include_once (ROOT . "html/inc/head.php");
if(!isset($_SESSION['login'])) {
	header("Location: ../");
	exit();
}
?>

	<div class="wrapperPanel">
		<div class="side">
			<div class="account">
				<div class="account__avatar">
					<?php echo file_get_contents("../img/svg/user.svg"); ?>
				</div>
				<span class="account__greeting">
					Hawk,
					<?=$_SESSION['fname']?>!
				</span>
				<ul class="account__menu">
					<li class="account__menuItem">
						<a href="#">
							<span>
							profile
							</span>
						</a>
					</li>
					<li class="account__menuItem">
						<a href="logout.php">
						<span>
							logout
							</span>
						</a>
					</li>
				</ul>
			</div>
			<ul class="side__menu">
				<li class="side__menuItem">
					<a href="#">
						<div class="menuItem__icon">
							<?php echo file_get_contents("../img/svg/pencil2.svg"); ?>
						</div>
						<div class="menuItem__text">
							posts
						</div>
					</a>
				</li>
				<li class="side__menuItem">
					<a href="#">
						<div class="menuItem__icon">
							<?php echo file_get_contents("../img/svg/equalizer.svg"); ?>
						</div>
						<div class="menuItem__text">
							settings
						</div>
					</a>
					<ul class="side__subMenu">
						<li class="side__subMenuItem">
							<a href="#">
								<div class="menuItem__text">
									profile
								</div>
							</a>
						</li>
					</ul>
				</li>
				<li class="side__menuItem">
					<a href="#">
						<div class="menuItem__icon">
							<?php echo file_get_contents("../img/svg/users.svg"); ?>
						</div>
						<div class="menuItem__text">
							accounts
						</div>
					</a>
					<ul class="side__subMenu">
						<li class="side__subMenuItem">
							<a href="#">
								<div class="menuItem__text">
									privileges
								</div>
							</a>
						</li>
					</ul>
				</li>
				<li class="side__menuItem">
					<a href="#">
						<div class="menuItem__icon">
							<?php echo file_get_contents("../img/svg/wrench.svg"); ?>
						</div>
						<div class="menuItem__text">
							general
						</div>
					</a>
				</li>
			</ul>
		</div>

		<div class="mainWindow"></div>
	</div>

	<?php
	include_once (ROOT . "html/inc/footer.php");
?>