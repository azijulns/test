<?php
// Email Send
$subject = 'test';
$to = "azijulhoque076@gmail.com";
$message =
	'<p style="margin-bottom:20px;">We want to make this text "Tak fordi du har valgt at bruge Eksportbud.dk</p>
';
$headers = 'From: Eksport <test@gmail.com>';

// Send the email
echo mail($to, $subject, $message, $headers);
