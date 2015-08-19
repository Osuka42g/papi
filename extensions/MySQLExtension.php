<?php
	//	/extensions/MySQLExtension.php
	//	takes the contoller for MySQL and MariaDB

	function insert() {


	}

	function select($table, $options = false) {

		$sql = '';

		mysql_query("SET NAMES utf8");

		$sql = 'SELECT * FROM '.$table;

		if(is_array($options)) {
			$sql = $sql . ' WHERE '.key($options).' = "'.$options[key($options)].'"';
		}

		$result = mysql_query($sql);
		$result = mysql_to_array($result);

		return $result;

	}

	function update() {


	}

	function delete($table = null, $options = false) {

		$sql = 'DELETE FROM ' . $table;

		if(is_array($options)) {
			$sql = $sql . ' WHERE '.key($options).' = "'.$options[key($options)].'"';
			$result = mysql_query($sql);
		} else {
			return false;
		}

		return true;
	}
?>