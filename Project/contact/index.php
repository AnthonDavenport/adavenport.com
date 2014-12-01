<?php

 
if ($_POST['action'] == 'Send'){

// Collect the data

$firstname = $_POST['firstname'];

$lastname = $_POST['lastname'];

$email = $_POST['email'];

$subject = $_POST['subject'];

$message = $_POST['message'];

$captcha = strtolower($_POST['captcha']);

 }



?>
