 <?php include "includes/arrays.php" ?>


 <nav class="nav-main">

<!-- 		<div id="nav_left_section"><a href="#header"><img id="nav_logo" src="img/logo_white.png" alt=""></a></div> -->

		<div id="nav_left_section"><a href="index.php#header"><img class="nav_logo_no_header" src="img/logo_white.png" alt=""></a></div>

		<img id="mobile_logo" src="img/mobile_logo.png" alt="logo mobile version">

		<ul>

			<?php 

				foreach ($navItems as $item) {
					echo "<li><a href='$item[slug]' class='nav-item'>$item[title]</a></li><!-- -->";
				}

			?><!-- --><li><a id="more" href="#" class="nav-item">MORE</a>

				<div class="nav-content">
					<div class="nav-sub">
						<ul>

							<?php

								foreach ($moreNavItems as $item) {

									echo "<li><a href='$item[slug]'>$item[title]</a></li><!-- -->";
								}


							?>

						</ul>
					</div>
				</div>

			</li><!-- -->
		</ul>

		<div id="handle"><i class="fa fa-bars" aria-hidden="true"></i></div>
	</nav>