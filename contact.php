<?php

 

$to = 'jonkforesome@outlook.com';

$email_subject = "Contact form submission";

$email_body = "$_POST['email'] \n Message \n $_POST['message']";

 

$headers = "From: $myemail\n";

$headers .= "Reply-To: $_POST['email']";

 

mail($to,$email_subject,$email_body,$headers);

 

header('Location: contact-form-thank-you.html');

 

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>

                <title>Contact form handler</title>

</head>

 

<body>

<!-- This page is displayed only if there is some error -->

 

<h1>Failed</h1>

 

</body>

</html>