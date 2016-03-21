<?php

define("num2boolTrueFalse", 2);
define("num2boolTickCross", 4);
define("num2boolYesNo",		8);
define("num2boolText",		16);
define("num2boolUCFirst",	32);

$num2bool = new Twig_SimpleFilter(
	"num2bool",
	function($num, $type = 4) {
		$out = num;
		if ((pow(2, 1) & $type) == pow(2, 1)) {
			if ($out == 1) {
				$out = true;
			} else {
				$out = false;
			}
		}
		if ((pow(2, 2) & $type) == pow(2, 2)) {
			if ($out == 1) {
				$out = "<span class=\"glyphicon glyphicon-ok\"></span>";
			} else {
				$out = "<span class=\"glyphicon glyphicon-remove\"></span>";
			}
		}
		if ((pow(2, 3) & $type) == pow(2, 3)) {
			if ($out == 1) {
				$out = "yes";
			} else {
				$out = "no";
			}
		}
		if ((pow(2, 4) & $type) == pow(2, 4)) {
			if ($out == 1 || $out == true) {
				$out = "true";
			} else {
				$out = "false";
			}
		}
		if ((pow(2, 5) & $type) == pow(2, 5)) {
			$out = ucfirst($out);
		}
		return $out;
	}
);

$twig->addFilter($num2bool);

?>