<?php
$name = $_REQUEST["name"];
$email = $_REQUEST["email"];
$phone = $_REQUEST["phone"];
$msg = "Name is: " . $name . " Phone Number: " . $phone . " and Email id is: " . $email;
echo $msg;
$subject = "New Enquiry at IFS.";
mail("pardhiman832@gmail.com", $subject, $msg);
header("Location: index.html");
?>
