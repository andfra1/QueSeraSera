
	<?php
include_once ("../../config.php");
include_once (ROOT . "html/core/head.php");
?>

		<div class="wrapperPanel">
			<div class="side">
				<div class="account">
					<p>Witaj
						
				</div>
				<ul class="side__menu">
					<li class="side__menuItem">item 1</li>
					<li class="side__menuItem">item 2
						<ul class="side__subMenu">
							<li class="side__subMenuItem">item 2.1</li>
							<li class="side__subMenuItem">item 2.2</li>
							<li class="side__subMenuItem">item 2.3</li>
							<li class="side__subMenuItem">item 2.4</li>
						</ul>
					</li>
					<li class="side__menuItem">item 3
						<ul class="side__subMenu">
							<li class="side__subMenuItem">item 3.1</li>
							<li class="side__subMenuItem">item 3.2</li>
							<li class="side__subMenuItem">item 3.3</li>
							<li class="side__subMenuItem">item 3.4</li>
							<li class="side__subMenuItem">item 3.5</li>
							<li class="side__subMenuItem">item 3.6</li>
						</ul>
					</li>
					<li class="side__menuItem">item 4</li>
				</ul>
			</div>

			<div class="mainWindow"> 30 min pracy ;] </div>
		</div>

		<?php
	include_once (ROOT . "html/core/footer.php");
?>