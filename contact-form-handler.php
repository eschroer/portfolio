<?php
    $name= $_POST['name'];
    $visitor_email=$_POST['email'];
    $message = $_POST['message'];

    $email_from = 'schroer.emerson@gmail.com';
    $email_subject = "New Form Submission";

    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                        "User Message: $message.\n";
    $to = "schroer.emerson@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor-email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");
?>