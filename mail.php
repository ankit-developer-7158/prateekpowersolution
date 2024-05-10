<?php


if (!empty($_POST)) {

 $name = $_POST['name'];
    $email = $_POST['email'];
   $phone = $_POST['phone'];
    $message = $_POST['message'];


$to = "Prateekpowersolution@gmail.com";
$subject = "Received Query from " . $phone;

$messages = 
"<html>
<head>
</head>
<body>
<p><strong>Name : </strong>" . $name . "</p>
<p><strong> Email :</strong>" . $email . "</p>
<p><strong>Phone  : </strong>" . $phone . "</p>

<p><strong>Message  <br> </strong>" . $message . " </p>
</body>
</html>";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


$headers = "From: \r\n";
$headers .= "Reply-To: \r\n";
$headers .= "Content-type: text/html\r\n";

// Send email
if (mail($to, $subject, $messages, $headers)) {
    header("Location: thanks.html");
} else {
     header("Location: index.html");
}
}
?>