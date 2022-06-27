<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 -2022.
 */

namespace GC7\featureContactForm;

function saveContact($contact)
{
	include_once dirname(__FILE__, 1) . '/db_connect.php';
	$db = connectDB();

	extract($contact, EXTR_PREFIX_SAME, 'wddx');

	$sql   = 'INSERT INTO `contacts` (`username`, `email`, `object`, `message`, `created_at`) VALUES (:username, :email, :object, :message, NOW())';
	$query = $db->prepare($sql);

	foreach ($contact as $k => $v) {
		$query->bindValue(':' . $k, $v, \PDO::PARAM_STR);
	}

	return $query->execute();
}
