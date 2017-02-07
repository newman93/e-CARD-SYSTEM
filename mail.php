<?php
$to      = $_POST['exampleInputEmail1'];
$subject =  'e-Card - '.$_POST['exampleInputName'];
$message = $_POST['exampleInputMessage'];
$mail = $_POST['exampleInputEmail'];
$headers = 'From: '.$mail. "\r\n" .
    'Reply-To: '.$mail. "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?> 