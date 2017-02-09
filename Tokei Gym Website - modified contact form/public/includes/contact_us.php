<?php


$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : []; // se ci sono valori relativi agli errori nella $_SESSION superglobal variable li assegno (come array) alla variabile $errors, altrimenti gli assegno un array vuoto.
$fields = isset($_SESSION['fields']) ? $_SESSION['fields'] : []; // se l'utente ha inserito valori relativi alla form(fields) nella $_SESSION superglobal variable li assegno (come array) alla variabile $fields, altrimenti gli assegno un array vuoto.


?>

			<section id="contact_us">

				<div class="contact_us_top_box">

					<div id="getintouch" class="contact_us_section">

						<h4 class="font1">Contacts</h4>

						<p class="address">
							Lion Court<br>
							28 Magdalene Street<br>
							London<br>
							SE1 2EN
						</p><br>
						<p class="phone"><a href="tel:02074035979">020 74035979</a></p><br>
						<p class="mail"><a href="mailto:infomation@tokeicentre.org?subject=Mail from The Tokei Centre" target="_top">infomation@tokeicentre.org</a></p><br>
						<p class="facebook"><a href="https://www.facebook.com/tokeicentre" target="_blank">facebook</a></p>


					</div>

					<div id="opening_times" class="contact_us_section">
				
						<h4 class="font1">Opening Times</h4>

						<p id="times_mon_fri">MON-FRI</p>
						<p id="times_sat">SAT</p>
						<p id="times_sun">SUN</p>

					</div>

					<div id="how_to_find" class="contact_us_section">

						<h4 class="font1">How To Find Us</h4>

						<p>Located south of the river between London Bridge and Tower Bridge in Southwark. Within easy reach of More London and London Bridge station. </p>

					</div>


				</div>


				<div class="clear"></div>

				

				<div id="quick_enquiry"></div>

				<div id="enquiry_wrapper">

					<h4>Quick Enquiry</h4>


					<!-- Creo il markup per mostrare gli errori -->

					<?php if(!empty($_SESSION['errors'])) : ?>

					<h1><ul><li><?php echo implode('</li><li>', $errors); ?></li></ul></h1>

					<?php endif; ?>	



					<form action="mail.php" method="post">

						<div class="form-left-block">
							<div class="input-group">
								<label for="name">Your Name</label>
								<input type="text" name="name" placeholder="YOUR NAME" <?php echo isset($fields['name']) ? ' value="' . escape_injection($fields['name']) . '" ' : '' ?> >
							</div>

							<div class="input-group">
								<label for="email">Your Email</label>
								<input type="email" name="email" placeholder="YOUR EMAIL" <?php echo isset($fields['email']) ? ' value="' . escape_injection($fields['email']) . '" ' : '' ?> >
							</div>

							<div class="input-group">
								<label for="email">Your Phone</label>				
								<input type="tel" name="phone" placeholder="YOUR PHONE" <?php echo isset($fields['phone']) ? ' value="' . escape_injection($fields['phone']) . '" ' : '' ?> >
							</div>

						</div>

						<div class="form-right-block">

							<div class="input-group">
								<label for="message">Message</label>
								<textarea name="message" placeholder="YOUR MESSAGE"><?php echo isset($fields['message']) ? escape_injection($fields['message']) . ' ' : '' ?></textarea>
							</div>

							<div class="input-group">
								<div class="submit_wrapper">					
									<input type="submit" name="submit" value="SUBMIT">
								</div>	
							</div>

						</div>

					</form>

				<div class="clear"></div>
					
				</div>

				<div class="clear"></div>

			</section>

			<div class="map-wrap">

			    <div class="overlay" onClick="style.pointerEvents='none'"></div><!-- wrap map iframe to turn off mouse scroll and turn it back on on click -->

					<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.525541273848!2d-0.08345008413070744!3d51.50357367963442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487603454f48a3a5%3A0x8f896e52b8f8734b!2sTokei+Martial+Arts+and+Fitness+Centre!5e0!3m2!1sen!2suk!4v1481201327336" frameborder="0" style="border:0" allowfullscreen></iframe>

			</div>

<?php unset($_SESSION['errors']); ?>
<?php unset($_SESSION['fields']); ?>