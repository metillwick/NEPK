<?php
if(isset($_POST['submit'])){
    $to = "metillwick@unomaha.edu, ctienken@unomaha.edu"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $interest = $_POST['interest'];
    $subject = "NEPK Contact Form";
    $subject2 = "Copy of your form submission";
    $message = $name . "\n\n" . $from . "\n\n" . $phone . "\n\n" . $interest . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $from . "\n\n" . $phone . "\n\n" . $interest . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $name . ", we will contact you as quickly as we can, but you know...we're probably training...";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>
<html>
  <body>
    <p>Sending a copy of your submission to your email...with love...</br></br>Return to <a href="index.html">Nebraska Parkour</a></p>
  </body>
</html>
