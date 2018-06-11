<?php
if(!isset($_POST['submit']))
{
	echo "error; you need to submit the form!";
}
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['subject'];

$email_from = 'kontakt@jakubmachowski.pl';
$email_subject = "Formularz";
$email_body = "Od: $name\n".
    "Mail: $visitor_email\n".
    "Tresc wiadomosci:\n $message\n\n".
        
    
$to = "kontakt@jakubmachowski.pl";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header('Location: http://jakubmachowski.pl');
?> 