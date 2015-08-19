<?php
	//	//	//	//	//	//	//	//	//	//	//	//
	//	pApi framework v 0.1	08 . 04 . 2015	//
	//		https://github.com/Osuka42g/pApi 	//
	//	//	//	//	//	//	//	//	//	//	//	//
	
	// Please use app.php to make your own functions (or an extension instead)
	// to modify this file might end on a missfunction

	require_once('config.php');
	require_once('core.php');

	// Note that we are loading all extensions at once, but we can load just the ones we need
	require_once('extensions/loadAll.php');

	require_once('app.php');
	
	run();
?>