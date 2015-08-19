<?php
	//	/extensions/debugExtension.php

	function var_dumper($var) {
		echo '<pre>';
		var_dump($var);
		echo '</pre>';
		die();
	}


?>