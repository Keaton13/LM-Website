<?php
 $to = array(
   "keatonkrieger@gmail.com",
   "bajabuggy313@gmail.com",
 );
 $subject = $_POST['subject'];
 $body = "From, ".$_POST['name']."\n\n"."Email, ".$_POST['email']."\n\n"."Residence, ".$_POST['Residence']."\n\n"."Message, ".$_POST['message']."\n\n"."Invest, ".$_POST['haveYouInvested'];
 if (mail($to, $subject, $body)) {
  $responseArray = array('class' => 'alert alert-success', 'message' => 'Message sent successfully. Thank you, will get back to you soon!');
  } else {
  $responseArray = array('class' => 'alert alert-danger', 'message' => 'There was an error while submitting the form. Please try again later.');
     
  }

    $encoded = json_encode($responseArray);

    header('Content-Type: application/json');

    echo $encoded;

 ?>