<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 -2022.
 */

namespace GC7\featureContactForm;

function sendMail($contact)
{
	extract($contact, EXTR_PREFIX_SAME, 'wddx');

	$service = ['Service Commercial', 'Service Techique', 'Proposition', 'S.A.V.'];

	$to = 'Solange <s.picard@codeur.online>';
	$headers   = 'From: ' . $username . '<' . $email . ">\r\n";

	// exit(implode('<br>', $contact));

	return mail($to, $service[$object - 1] . ' < ' . $username, $message, $headers);
}
