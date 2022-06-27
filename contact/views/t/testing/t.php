<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 -2022.
 */

namespace GC7\featureContactForm;

require_once 'tools/db/save_contact.php';

require_once dirname(__FILE__, 4) . '/tools/mail/send_mail.php';

$contact = [
	'username' => 'Lionel',
	'email'    => 'gg@gg.com',
	'object'   => 4,
	'message'  => 'The message',
];

echo (saveContact($contact) && sendMail($contact)) ? 'All is OK :-) !' : 'Sniff :-( !';
