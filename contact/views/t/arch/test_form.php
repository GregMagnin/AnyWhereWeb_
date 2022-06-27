<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 -2022.
 */

namespace GC7\featureContactForm;

$name    = 'Nom';
$email   = 'gg@gg.com';
$to      = 01;
$message = 'Tatati...1';

$info = [$name ?? null, $email ?? null, $to ?? null, $message ?? null];

$verif = (
	($name ?? null) &&
  ($email ?? null) &&
  ($to ?? null) &&
  ($message ?? null) && ('Tatati...' != $message)
);

echo implode('<br>', $info) .
  '<hr><h1>' .
  ($verif ? 'All \'s OK' : 'Not good !') .
  '</h1>';
