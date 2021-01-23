<?php
if (isset($_POST['Submit']))
{
  $name = $_POST['name'];
  $email = $_POST['email'];
  $msg = $_POST['message'];
 $subject = "Customer mail ";
$mailTo = "saadimtiaz98@gmail.com";
$headers = "From: ".$email;
$txt = "You have received an email from  " .$name.".\n\n".$msg;

mail($mailTo,$subject, $txt, $headers);
header("Location: index.html?mailsend");

}
 ?>
