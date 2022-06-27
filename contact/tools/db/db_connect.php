<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 -2022.
 */

namespace GC7\featureContactForm;

function connectDB()
{
	require_once '/var/www/feature_contact-form/env.php';
	$DBParams = getDBParams();

	$db_servername = 'localhost';

	try {
		$db = new \PDO("mysql:host=${db_servername};dbname=${DBParams['dbName']}", $DBParams['dbUsername'], $DBParams['dbPw']);
		// set the PDO error mode to exception
		$db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
		// echo "Connected successfully";
		return $db;
	} catch (\PDOException $e) {
		echo 'Connection failed: ' . $e->getMessage();
	}
}
