<?php

$extentions = scandir(__DIR__);

foreach($extentions as $extention) {
	$extention_path = __DIR__ . DIRECTORY_SEPARATOR . $extention;
	if (file_exists($extention_path . DIRECTORY_SEPARATOR . "init.php")) {
		$filename = $extention_path . DIRECTORY_SEPARATOR . "init.php";
	} elseif (file_exists($extention_path . DIRECTORY_SEPARATOR . $extention . ".php")) {
		$filename = $extention_path . DIRECTORY_SEPARATOR . $extention . ".php";
	} else {
		throw new \Exception("no valid extention file found");
	}
	
	require_once($filename);
}

?>