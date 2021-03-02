<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'pcmishra22@gmail.com';

if(isset($_POST['email'])){
    $to = $receiving_email_address; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];

    $subject = $_POST['subject'];
   
    $message = $name .  " wrote the following:" . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    if (mail($to,$subject,$message,$headers))
      echo "Mail Sent. Thank you !" . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    else
       echo "Mail Not Sent, Please try again !";

    }

?>
