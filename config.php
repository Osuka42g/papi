<?php
	//	config.php
	//	define constants of the app and values such the conection to the database or the controller
	

	global $debug_mode;


	$default_config = [
		'standard_response_type' => 'json',		// json | xml | plain
		'use_tokenizer' => false
	];


	$debug_mode = [
		'die_on_error' => false,				// true | false
		'print_errors' => false 				// true | false
	];

	$db_type = 'MySQL';			// set config for MySQL or MariaDB 
	$db_username = 'root';
	$db_password = 'dhzBSYNbeqzG';
	$db_host = 'localhost';
	$db_database = 'mundialis';


	$conn = mysql_connect($db_host, $db_username, $db_password) or die(mysql_error());
	mysql_select_db($db_database);

	if(mysql_error()) {
		echo mysql_error();
	}
?>