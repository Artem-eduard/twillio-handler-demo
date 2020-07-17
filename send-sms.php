<?php

// Update the path below to your autoload.php,
// see https://getcomposer.org/doc/01-basic-usage.md

require __DIR__ . '/vendor/autoload.php';

use Twilio\Rest\Client;

$from = "+";//$_POST['from'];
$to = "+1";//$_POST['to'];
$body = "asdadasd";//$_POST['body'];
print($from);
print($to);
$callbackURL = "https://f8f718775bd3.ngrok.io/twillio-handler-demo/twilio-sms-status.php";

// Find your Account Sid and Auth Token at twilio.com/console
// DANGER! This is insecure. See http://twil.io/secure
$sid    = "your sid";
$token  = "your token";
$twilio = new Client($sid, $token);
print($twilio);

$message = $twilio->messages
                  ->create($to, // to
                         array(
                               "body" => $body,
                               "from" => $from,
                               "statusCallback"=> "https://f8f718775bd3.ngrok.io/twillio-handler-demo/twilio-sms-status.php"
		       )
                  );


print($message->sid);

?>




