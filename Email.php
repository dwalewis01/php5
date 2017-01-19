<?php 

// one way to send out email via php
    $emailTo= "dwade238@aol.com";
    
    $subject = " I hope this works! ";

    $body = " I think you're great! ";
    
    $headers = "From: dwade238@aol.com ";

    if( mail($emailTo, $subject, $body, $headers)) {
        
        echo "The email was sent successfully";
    
    }else {
        
        echo "The email could not be sent";
    }
    

// Another way to send email via php





?>