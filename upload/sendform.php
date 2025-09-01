<?php
    $name = $_REQUEST['name'] ;
    $email = $_REQUEST['email'] ;
    $phone = $_REQUEST['phone'] ;
    $message = $_REQUEST['message'] ;

    $content = "Name: $name\nEmail: $email\nPhone Number: $phone\nMessage: $message" ;

    mail( "s.conway501@gmail.com", "Message from Nettle Contact Form", "Info:\n\n\$message", "From: $email") ;
    
    header( "Location: http://www.mettleofnettle.com/upload/contact.html" ) ;
    
?>