<?php
   
    $name =_POST['name'];
     $visitor_email = $_POST['email'];
     $message = $_POST['message'];
    

     $email_from = 'akshaykadam914@gmail.com';

     $email_subject = "Visitor massage";

     $email_body = "User Name: $name.\n".
                     "User Email: $visitor_email.\n".
                        "user Message: $message.\n";

     $to = "akshaykadam914@gmail.com";
      
     $headers = "From: $email_from\r\n";

     $headers .= "Replay-To: $visitor_email \r\n";

     mail($to,$email_subject,$email_body,$headers);

     header("Location: index.html");

?>
