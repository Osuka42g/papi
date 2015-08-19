<?php
	//	core.php
	//	the brain of pApi
	header('Content-Type: text/html; charset=utf-8');


	function run() {
		$func = $_GET['pApifw'];
		if(isset($_GET['pApifwnext']))
			$next = $_GET['pApifwnext'];
		else
			$next = false;


		if(is_callable($func)) { 
			if($next) {
				call_user_func($func, $next);
			} else {
				call_user_func($func);
			}
		} else {
			response_error();
			return false;
		}

		return 0;
	}

	function log_write($var = '') {
		$pApifw_log[] = $var;
	}
?>