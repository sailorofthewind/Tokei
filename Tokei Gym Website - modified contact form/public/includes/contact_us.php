			<section id="contact_us">

			<?php


			$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : []; // se ci sono valori relativi agli errori nella $_SESSION superglobal variable li assegno (come array) alla variabile $errors, altrimenti gli assegno un array vuoto.
			$fields = isset($_SESSION['fields']) ? $_SESSION['fields'] : []; // se l'utente ha inserito valori relativi alla form(fields) nella $_SESSION superglobal variable li assegno (come array) alla variabile $fields, altrimenti gli assegno un array vuoto.


			?>

				<div class="contact_us_left_box">

					<div id="getintouch">

						<p class="address">
							Lion Court<br>
							28 Magdalene Street<br>
							London<br>
							SE1 2EN
						</p>
						<p class="phone"><a href="tel:02074035979">020 74035979</a></p>
						<p class="mail"><a href="mailto:infomation@tokeicentre.org?subject=Mail from The Tokei Centre" target="_top">infomation@tokeicentre.org</a></p>
						<a href="https://www.facebook.com/tokeicentre" target="_blank"><img id="facebook_contact_us" src="img/facebook.png" alt=""></a>

					</div>

					<div id="opening_times">
				
						<h4>Opening Times</h4>

						<table id="opening_times_table">
							<tr>
								<td>MON-FRI</td>
								<td>06:30 - 22:00</td>
							</tr>
							<tr>
								<td>SAT</td>
								<td>09:00 - 18:00</td>
							</tr>
							<tr>
								<td>SUN</td>
								<td>10:00 - 15:00</td>
							</tr>
						</table>

					</div>

					<div id="how_to_find">

						<h4>How To Find Us</h4>

						<p style="text-align: justify;">Located south of the river between London Bridge and Tower Bridge in Southwark. Within easy reach of More London and London Bridge station. </p>

					</div>


				</div>

				<div class="contact_us_right_box">
						
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.525541273848!2d-0.08345008413070744!3d51.50357367963442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487603454f48a3a5%3A0x8f896e52b8f8734b!2sTokei+Martial+Arts+and+Fitness+Centre!5e0!3m2!1sen!2suk!4v1481201327336" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

				</div>


				<div class="clear"></div>

				

				<div id="quick_enquiry"></div>

				<div id="enquiry_wrapper">

					<h4>Quick Enquiry</h4>


					<!-- Creo il markup per mostrare gli errori -->

					<?php if(!empty($_SESSION['errors'])) : ?>

					<h1><ul><li><?php echo implode('</li><li>', $errors); ?></li></ul></h1>

					<?php endif; ?>	



					<form action="mail.php" method="post" class="awesome-form">

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
								<input type="submit" name="submit" value="SUBMIT">
							</div>

						</div>

					</form>

				<div class="clear"></div>
					
				</div>

				<div class="clear"></div>

				<?php unset($_SESSION['errors']); ?>
				<?php unset($_SESSION['fields']); ?>

			</section>