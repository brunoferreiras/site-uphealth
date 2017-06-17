<?php
session_start();	
$name = trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING));
$email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING));
$message = trim(filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING));
$subject = 'Up Health - Nova mensagem, de ' . $name;
if(strtolower($_REQUEST['code']) == strtolower($_SESSION['random_number']))
{
$TO = "fs.brunoferreira@gmail.com";
$h = "De: " . $email;
$content = "$name ($email) enviou a seguinte mensagem :\n\n$message";
mail($TO, $subject, $content, $h);		
	echo 1;		
}	
else
{
	echo 0; // invalid code
}
?>