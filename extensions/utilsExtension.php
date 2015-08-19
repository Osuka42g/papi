<?php
	//	/extensions/utilsExtension.php
	//	define some stuff we need day by day...

	//	define if a string is a valid email format

	function is_email_format($var = false) {
		if($var) {
			if(filter_var($var, FILTER_VALIDATE_EMAIL) === false) {
			   return false;
			}
			else {
				return true;
			}
		}
		return false;
	}


	//	converts a mysql result into an array

	function mysql_to_array($result = false) {
		if(!$result)
			return false;

		while($row = mysql_fetch_assoc($result)) { 
		   $result_array[] = $row; 
		}

		return $result_array;
	}


	function get($param = null) {
		return $_GET[$param];
	}
?>