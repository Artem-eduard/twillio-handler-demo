<?php
// Get the PHP helper library from https://twilio.com/docs/libraries/php

require __DIR__ . '/vendor/autoload.php';
use Twilio\TwiML\MessagingResponse;

//$response = new MessagingResponse();
//$response->message("The Robots are coming! Head for the hills!");
syslog(LOG_INFO, "SID: $sid, Status: $status");
?>