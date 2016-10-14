<?php

//Check to see if the honeypot captcha field was filled in
if(trim($_POST['checking']) !== '') {
	$captchaError = true;
} else {

	//Check to make sure that the name field is not empty
	if(trim($_POST['contactName']) === '') {
		$nameError = __('You forgot to enter your name.', 'pts');
		$hasError = true;
	} else {
		$name = trim($_POST['contactName']);
	}
	
	//Check to make sure sure that a valid email address is submitted
	if(trim($_POST['email']) === '')  {
		$emailError = __('You forgot to enter your email address.', 'pts');
		$hasError = true;
	} else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
		$emailError = __('You entered an invalid email address.', 'pts');
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}
		
	//Check to make sure comments were entered	
	if(trim($_POST['comments']) === '') {
		$commentError = __('You forgot to enter your comments.', 'pts');
		$hasError = true;
	} else {
		if(function_exists('stripslashes')) {
			$comments = stripslashes(trim($_POST['comments']));
		} else {
			$comments = trim($_POST['comments']);
		}
	}
		
	//If there is no error, send the email
	if(!isset($hasError)) {

		$emailTo = $_POST['emailAddress'];
		$subject = __('Contact Form Submission from ', 'pts').$name;
		$sendCopy = trim($_POST['sendCopy']);
		$body = "Name: $name \n\nEmail: $email \n\nComments: $comments";
		$headers = 'From: My Site <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;
		
		mail($emailTo, $subject, $body, $headers);

		if($sendCopy == true) {
			$subject = __('You emailed Your Name', 'pts');
			$headers = 'From: '.__('Your Name <noreply@somedomain.com>', 'pts');
			mail($email, $subject, $body, $headers);
		}

		$emailSent = true;

	}
}