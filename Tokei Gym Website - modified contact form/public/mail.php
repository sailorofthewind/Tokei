<?php require_once("../resources/config.php"); ?>
<?php require_once("libraries/SWIFTmailer/swift_required.php"); ?>

<?php

$errors = [];

if(isset($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['message'])) {

	$fields = [

		'name' => $_POST['name'],
		'email' => $_POST['email'],
		'phone' => $_POST['phone'],
		'message' => $_POST['message']

	];

	foreach($fields as $field => $data) {

		if(empty($data)) {

			$errors[] = 'The ' . $field . ' field is required';

			header("Location: index.php#quick_enquiry");

		}

	}

	if(empty($errors)) {


		// Create a transport

		$transport = \Swift_SmtpTransport::newinstance('smtp.gmail.com', 587, 'tls')
			->setUserName($contact_username)
			->setPassword($contact_password);

		// Create a SwiftMailer instance

		$swift = \Swift_Mailer::newInstance($transport);

		// Create content

		$content = 'From: ' . $fields['name'] . ' <br> Mail: (' . $fields['email'] . ') <br>' . ' Phone: (' . $fields['phone'] . ') <p>' . $fields['message'] . '</p>  ';

		// Create the message

		$message = Swift_Message::newInstance()

			// Give the message a subject
			->setSubject('Message from Tokei Fitness Centre\'s user "' . $fields['name'] . '" ')

			// Set the From address with an associative array
			->setFrom(array('paolo.ghidoni82@gmail.com' => 'Paolo Ghidoni'))

			// Set the To addresses with an associative array
			->setTo(array('paolo.ghidoni82@gmail.com' => 'Paolo Ghidoni'))

			// Give it a body
			->setBody($content, "text/html")

			// And optionally an alternative body
			->addPart(strip_tags($content), 'text/plain');

			
			// echo $message->toString();	//	fa il display del messaggio sotto forma di string


		  // Send message

		$result = $swift->send($message);

		if($result){

			$errors[] = 'Message Sent Successfully!';
			header("Location: index.php#quick_enquiry");  // Redirect on same page to show message sent greetings
			unset($fields);
			unset($_POST);

		} else {

			$errors[] = 'Message Not Sent..';
			// header("Location: contact.php");

		}

	}

} else {

	$errors[] = 'Please fill all the form fields.';
	header("Location: index.php#quick_enquiry");

}



$_SESSION['errors'] = $errors;
$_SESSION['fields'] = $fields;  //salva le informazioni immesse dall'utente in una sessione cosi se sbaglia non deve ricompilare tutti i campi


?>







