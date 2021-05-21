<?php 

    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $contact = $_POST['contact'];
    $company = $_POST['company'];
    $message = $_POST['message'];

    // //Second setup
    // $to = "oldhamtyrone@yahoo.com"
    // $body = ""

    // $body .= "From ".$name. "\r\n";
    // $body .= "Email ".$visitor_email. "\r\n";
    // $body .= "Contact ".$contact. "\r\n";
    // $body .= "Company ".$company. "\r\n";
    // $body .= "Message ".$message. "\r\n";

    // mail($to,$message,$body)


    //Frist Setup
    $email_from = "random@gmail.com";
    $email_subject = "New Form Submission";
    $email_body = "User Name: $name.\n".
                  "User Email: $visitor_email. \n".
                  "User Contact: $contact. \n".
                  "User Company: $company. \n".
                  "User Message: $message. \n";

    $to = "oldhamtyrone@yahoo.com"
    $headers = "From: $email_from\r\n";
    $headers = "Reply-To: $visitor_email \r\n";
    mail($to,$email_subject,$email,$headers);

    header("location: contacts.html");


?>