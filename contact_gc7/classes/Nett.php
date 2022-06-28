<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 -2022.
 */

namespace GC7\featureContactForm;

class Nett
{
	public static function ss($var)
	{
		foreach ($var as $v) {
			if ($v != strip_tags($v)) {
				return 0;
			}
		}
    return 1;
	}
}
