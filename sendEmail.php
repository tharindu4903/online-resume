<?php
if(isset($_POST['submit'])) {

   $name = $_POST['contactName'];
   $email = $_POST['contactEmail'];
   $subject = $_POST['contactSubject'];
   $contact_message = $_POST['contactMessage'];



	$to='tharindudhananjaya66@gmail.com'; // Receiver Email ID, Replace with your email ID
	$headers="From: ".$name."\n"."email :".$email;

	if(mail($to, $subject, $contact_message, $headers)){
		echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
	}
	else{
		echo "Something went wrong!";
	}

}

?>