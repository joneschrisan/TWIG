<?php

define("hashKey2nameUnderScore2Space",	2);
define("hashKey2nameUCWords",			4);
define("hashKey2nameUCFirst",			8);

$hashKey2name = new Twig_SimpleFilter(
	"hashKey2name",
	function($name, $type = 6) {
		$out = $name;
		if ((pow(2, 1) & $type) == pow(2, 1)) {
			$out = str_replace("_", " ", $out);
		}
		if ((pow(2, 2) & $type) == pow(2, 2)) {
			$out = ucwords($out);
		}
		if ((pow(2, 3) & $type) == pow(2, 3)) {
			$out = ucfirst($out);
		}
		return $out;
	}
);

$twig->addFilter($hashKey2name);

?>