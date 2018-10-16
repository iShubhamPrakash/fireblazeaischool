<?php

ini_set('SMTP', "smtp.gmail.com"); 
ini_set('smtp_port', 465 );
ini_set('sendmail_from', "fireblazeaischool@gmail.com" );


if($_POST){
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
    $course = filter_var($_POST['course'], FILTER_SANITIZE_STRING);
    $mobile = filter_var($_POST['messmobileage'], FILTER_SANITIZE_STRING);
    $contact_subject_prefix = "Course Application : ";

    mail("fireblazeaischool@gmail.com", $contact_subject_prefix . $course, $name,
         "From: ".$name." <".$email."> <".$mobile.">" . PHP_EOL
        ."Reply-To: ".$email . PHP_EOL
        ."X-Mailer: PHP/" . phpversion()
    );
}
?>