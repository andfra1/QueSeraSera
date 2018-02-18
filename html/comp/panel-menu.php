<div class="side">
			<div class="account">
				<div class="account__avatar">
					<?php echo file_get_contents("../img/svg/user.svg"); ?>
				</div>
				<div class="account__text">
					<span class="account__textGreeting">
						You are logged in as
					</span>
					<span class="account__textUsername">
						<?=$_SESSION['fname']?>
					</span>
				</div>
				<ul class="account__menu">
					<li class="account__menuItem">
						<a href="panel-profile.php">
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
					<a href="panel-posts.php">
						<div class="menuItem__icon">
							<?php echo file_get_contents("../img/svg/pencil2.svg"); ?>
						</div>
						<div class="menuItem__text">
							posts
						</div>
					</a>
					<ul class="side__subMenu">
					<li class="side__subMenuItem">
							<a href="panel-posts.php">
								<div class="menuItem__text">
									all posts
								</div>
							</a>
						</li>
						<li class="side__subMenuItem">
							<a href="panel-posts.php?create">
								<div class="menuItem__text">
									create a post
								</div>
							</a>
						</li>
						
					</ul>
				</li>
				<li class="side__menuItem">
					<a href="panel-settings.php">
						<div class="menuItem__icon">
							<?php echo file_get_contents("../img/svg/equalizer.svg"); ?>
						</div>
						<div class="menuItem__text">
							settings
						</div>
					</a>
					<ul class="side__subMenu">
					<li class="side__subMenuItem">
						<a href="panel-profile.php">
								<div class="menuItem__text">
									panel
								</div>
							</a>
						</li>
						<li class="side__subMenuItem">
						<a href="panel-profile.php">
								<div class="menuItem__text">
									profile
								</div>
							</a>
						</li>
					</ul>
				</li>
				<li class="side__menuItem">
					<a href="panel-accounts.php">
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
									all accounts
								</div>
							</a>
						</li>
						<li class="side__subMenuItem">
							<a href="#">
								<div class="menuItem__text">
									add account
								</div>
							</a>
						</li>
						<li class="side__subMenuItem">
							<a href="#">
								<div class="menuItem__text">
									set privileges
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