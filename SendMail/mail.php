<?php

mail('stefan.hanotiau@hotmail.com', 'Mon Sujet', 'Mon super message!');

$message = "Mon super message qui fait tant bien que mal plus de 70 caractères, c'est pas cool ça ?";
$message = wordwrap($message, 70, "\r\n");

$to = 'stefan.hanotiau@hotmail.com';
$subject = 'Un mail propre avec une en-tête';
$message = "Mon super message qui fait tant bien que mal plus de 70 caractères, c'est pas cool ça ?";
$message = wordwrap($message, 70, "\r\n");
$headers = array(
    'Reply-To' => 'stefan.hanotiau@gmail.com',
    'Cc' => 'laurie_dumetz@hotmail.com',
    'Bcc' => 'stef-jumpen@live.be',
    'X-Mailer' => 'PHP/' . phpversion(),
);

mail($to, $subject, $message, $headers, '-f stefan.hanotiau@gmail.com');
