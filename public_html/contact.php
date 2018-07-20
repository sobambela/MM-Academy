<?php

// configure
$from = 'MM Academy Contact Form <christina@mm.academy>';
$sendTo = 'c.baumann@gmx.com';
$subject = 'New message from contact form';
$fields = array('name' => 'Name', 'surname' => 'Surname', 'phone' => 'Phone', 'email' => 'Email', 'message' => 'Message'); // array variable name => Text to appear in email
$okMessage = 'Contact form successfully submitted. Thank you, I will get back to you soon!';
$errorMessage = 'There was an error while submitting the form. Please try again later';

// Mail headers
$mailHeaders  = 'MIME-Version: 1.0' . "\r\n";
$mailHeaders .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$mailHeaders .= 'From: ' . 'Demo contact form <christina@mm.academy>' . "\r\n";
$mailHeaders .= 'Reply-To: '. $_POST['name'] .' <'.$_POST['email'].'>' . "\r\n";

// let's do the sending

$emailText = "<p>You have new message from contact form</p>";
$emailText .= "<p>=============================</p>";

foreach ($_POST as $key => $value) {

    if (isset($fields[$key])) {
        $emailText .= "<p>$fields[$key]: $value</p>";
    }
}

if(mail($sendTo, $subject, $emailText, $mailHeaders)){
    echo json_encode(array('type' => 'success', 'message' => $okMessage));
    die();
}else{
    echo json_encode(array('type' => 'danger', 'message' => $errorMessage));
    die();
}
