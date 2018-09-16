<?php

    $name = $_POST['Nom'];
    $visitor_email = $_POST['E-mail'];
    $message = $_POST['message'];

    $email_from = 'arthursrv.000webhostapp.com';
    $email_subject = 'Nouveau Message'
        
    $email_body = "Nom : $name.\n".
                    "E-mail : $visitor_email.\n".
                        "Message : $message.\n";
   
    $to = "arthur.servantie@outlook.fr";

    $headers = "Venant de : $email_from \r\n";
    
    $headers .= "Répondre à : $visitor_email \r\n";

    mail($to, $email_subject, $email_body, $headers);
    
    header("Location : contact.html");
        
?>