<?php

# submit is the name of the buttob
if (isset($_POST['submit'])) {
    $name = $_POST['name'] ;
    $subject = $_POST['subject'] ;
    $mailFrom = $_POST['email'] ;
    $message = $_POST['message'] ;


    $mail_to = "s.conway501@gmail.com";
    $headers = "From: ".$mailFrom ;
    $txt = "Message from ".$name.".\n\n".$message;


    # three parameters the email we will send to, the subject and the message
    mail($mail_to, $subject, $txt, $headers);
    header( "Location: http://www.mettleofnettle.com/upload/index.html?mailsend" ) ;

}
    $name = $_REQUEST['name'] ;
    $email = $_REQUEST['email'] ;
    $phone = $_REQUEST['phone'] ;
    $message = $_REQUEST['message'] ;

    $content = "Name: $name\nEmail: $email\nPhone Number: $phone\nMessage: $message" ;

    mail( "s.conway501@gmail.com", "Message from Nettle Contact Form", "Info:\n\n\$message", "From: $email") ;
    
    
?>