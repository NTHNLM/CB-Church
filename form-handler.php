<?php
$name = $_POST['name'];
$visitor_birthday = $_POST['birthday'];
$phone = $_POST['phone'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'home@makedonia.com';

$email_subject = 'New Member Has Joined!';

$email_body = "Name: $name.\n".
              "Birthday: $visitor_birthday.\n".
              "Phone: $phone.\n".
              "Email: $visitor_email.\n".
              "Message: $message. \n";

$to = 'mellionardonathan30@gmail.com';

$headers = "From: $email_from \r\n";

$headers  .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>