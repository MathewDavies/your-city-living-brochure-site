<?php

$to_email = "mattdavies.property@gmail.com";
$name = $_POST['name'];
$subject = "Lloyd Wright House Enquiry";
$email = $_POST['email'];
$message = $_POST['message'];
$headers = "From: " . $email;

if(($name != null) && ($email !=null) && ($message != null)){

    mail($to_email, $subject, $message, $headers);
    header("Location: http://localhost/yourcityliving/contact.php?mail=Form Submitted#contact-form");
}else{

    header("Location: http://localhost/yourcityliving/contact.php?fail=Form fail#contact-form");
}

?>