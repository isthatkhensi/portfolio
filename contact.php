<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$errors ="";

if(empty($_POST['name']) ||

empty($_POST['email']))

{

$errors = '\n Error: all fields are required';

}

if (!preg_match(

"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", $email_address))

{

$errors = "\n Error: Invalid email address";

}

$email_from = 'khensimalaeka@gmail.com';//<== update the email address
$email_subject = "New Collaboration Email";
$email_body = "You have Recieved a new message from your website form. Here it is: \n
    Customer Name: $name \n
    Customer Email: $visitor_email \n
    
    Be sure to Email them back.";
    
    
$to = "khensimalaeka@gmail.com";//<== update the email address
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
header('Location: thank-you.html');
   
?>