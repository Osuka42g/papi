<?php
	//	/extensions/loadAll.php
	//	load all extensions in extenisons dir
	//	define 'extension' as a file that ends in *Extension.php
	
	$handle = opendir('extensions');
    
    while(false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
            if(preg_match('/Extension.php/', $entry)) {
            	require_once('extensions/'.$entry);
            }
        }
    }
    closedir($handle);
?>