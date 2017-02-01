<?php require_once("../resources/config.php"); ?>
 
	<!--------------- HEADER -------------->


	<?php include "includes/header.php" ?>


	<!--------------- NAVIGATION -------------->


<nav class="nav-main">

	<div id="nav_left_section"><a href="index.php#header"><img img id="nav_logo" src="img/logo_white.png" alt=""></a></div>

	<img id="mobile_logo" src="img/mobile_logo.png" alt="logo mobile version">

	<ul>
		<li><a href="#overview" class="nav-item">OVERVIEW</a></li><!-- --><li><a href="#membership" class="nav-item">MEMBERSHIP</a></li><!-- --><li><a href="#contact_us" class="nav-item">CONTACT US</a></li><!-- --><li><a href="timetable.php" class="nav-item">TIMETABLE</a></li><!-- --><li><a href="#" class="nav-item">MORE</a>

			<div class="nav-content">
				<div class="nav-sub">
					<ul>
						<li><a href="about.php">ABOUT US</a></li><!-- --><li><a href="gallery.php">GALLERY</a></li><!-- --><li><a href="testimonials.php">TESTIMONIALS</a></li><!-- --><li><a href="rules.php">RULES</a></li><!-- --><li><a href="links.php">LINKS</a></li>
					</ul>
				</div>
			</div>

		</li><!-- -->
	</ul>

	<div id="handle"><i class="fa fa-bars" aria-hidden="true"></i></div>
</nav>

	<!--------------- MAIN -------------->


	<div class="wrapper">

		<section id="main">


			<!--------------- OVERVIEW -------------->


			<?php include "includes/overview.php" ?>

	
			<!--------------- MEMBERSHIP -------------->


			<?php include "membership.php" ?>


			<!--------------- CONTACT US -------------->

		
			<?php include "includes/contact_us.php" ?>


		</section>

	</div>


	<!--------------- FOOTER -------------->


	<?php include "includes/footer.php" ?>


