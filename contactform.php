<?php

ini_set('SMTP', "smtp.gmail.com"); 
ini_set('smtp_port', 465 );
ini_set('sendmail_from', "fireblazeaischool@gmail.com" );

if($_POST){
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
    $subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
    $contact_subject_prefix = "Contact Form Message: ";

    mail("fireblazeaischool@gmail.com", $contact_subject_prefix . $subject, $message,
         "From: ".$name." <".$email.">" . PHP_EOL
        ."Reply-To: ".$email . PHP_EOL
        ."X-Mailer: PHP/" . phpversion()
    );
}
?>