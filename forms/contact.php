<?php
  $name=$_REQUEST['name'];
  $email=$_REQUEST['email'];
  $subject=$_REQUEST['subject'];
  $message=$_REQUEST['message'];

// the message
$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("someone@example.com","My subject",$msg);

?>
