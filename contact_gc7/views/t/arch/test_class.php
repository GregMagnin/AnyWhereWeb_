<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 -2022.
 */

namespace GC7\featureContactForm;

require 'classes/Nett.php';

$arr = [
	'username' => 'Lionel',
	'email'    => 'gg@gg.com',
];

$rep = Nett::ss($arr);
echo 'Rép: ' . (int) $rep;
