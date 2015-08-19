<?php
	//	/extensions/deployExtension.php


	function output($var, $response = '200', $method = false ) {

		if(!$method) {
			global $default_config;
			$method = $default_config['standard_response_type'];
		}

		switch($method) {
			case 'json':
				echo array_to_json($var);
			break;

			case 'xml':
				$xml = new SimpleXMLElement('<root/>');
				array_walk_recursive($var, array ($xml, 'addChild'));
				print $xml->asXML();
			break;

			case 'plain':
				if(is_array($var))
					var_dump($var);
				else
					print $var;
			break;

			case 'dump':
				echo '<pre>';
				var_dump($var);
				echo '</pre>';
			break;

			default:
			//	log_write('Error: render document not defined');
			break;
		}

		http_response_code($response);
	}



	function response_error($response = '404') {
		http_response_code($response);
	}

	function response_ok($response = 'Ok') {
		http_response_code(200);
	}

	function array_to_json($var) {

		return json_encode($var, JSON_UNESCAPED_UNICODE);
	}

	function array_to_xml() {

	}
?>