<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 -2022.
 */

namespace GC7\featureContactForm;

echo 'Test email.';

$username = 'Lionel';
$email    = 'l.cote@codeur.com';
$subject  = 'Mon sujet';
$message  = 'Tatati...';

$mail_recipient = 's.picard@codeur.online';
$mail_headers   = 'From: ' . $username . '<' . $email . ">\r\n";

mail($mail_recipient, $subject, $message, $mail_headers);
