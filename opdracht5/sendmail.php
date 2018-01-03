<?php
//mail variabelen maken
$to = '22320@ma-web.nl';
$subject = $_POST['subject'];
$message = $_POST['message'];
$headers = 'From: ' . $_POST['from'];

//mail versturen
mail($to, $subject, $message, $headers);

// Bevestigen voor de gebruiker
echo 'Uw mail is verstuurd. Bedankt!';
?>