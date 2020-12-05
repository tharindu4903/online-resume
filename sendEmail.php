<?php

if($_POST) {

   $name = trim(stripslashes($_POST['contactName']));
   $email = trim(stripslashes($_POST['contactEmail']));
   $subject = trim(stripslashes($_POST['contactSubject']));
   $contact_message = trim(stripslashes($_POST['contactMessage']));

   // Check Name
	if (strlen($name) < 2) {
		$error['name'] = "Please enter your name.";
	}
	// Check Email
	if (!preg_match('/^[a-z0-9&\'\.\-_\+]+@[a-z0-9\-]+\.([a-z0-9\-]+\.)*+[a-z]{2}/is', $email)) {
		$error['email'] = "Please enter a valid email address.";
	}
	// Check Message
	if (strlen($contact_message) < 15) {
		$error['message'] = "Please enter your message. It should have at least 15 characters.";
	}
   // Subject
	if ($subject == '') { $subject = "Contact Form Submission"; }

	$to='tharindudhananjaya66@gmail.com'; // Receiver Email ID, Replace with your email ID
	$headers="From: ".$name."\n"."Phone :".$email;

	if(mail($to, $subject, $message, $headers)){
		echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
	}
	else{
		echo "Something went wrong!";
	}

}

?>