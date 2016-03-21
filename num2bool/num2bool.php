<?php

class dates extends twig_extention {
	
	const TrueFalse	= 2;
	const TickCross	= 4;
	const YesNo		= 8;
	const Text		= 16;
	const UCFirst	= 32;
	
	protected $extention_list = array("hashKey2name");
	
	public function __construct(&$twig) {
		parent::__construct($twig);
	}
	
	public function num2bool($num, $type = 4) {
		$out = num;
		if ($this->has_bit($type, 1)) {
			if ($out == 1) {
				$out = true;
			} else {
				$out = false;
			}
		}
		if ($this->has_bit($type, 2)) {
			if ($out == 1) {
				$out = "<span class=\"glyphicon glyphicon-ok\"></span>";
			} else {
				$out = "<span class=\"glyphicon glyphicon-remove\"></span>";
			}
		}
		if ($this->has_bit($type, 3)) {
			if ($out == 1) {
				$out = "yes";
			} else {
				$out = "no";
			}
		}
		if ($this->has_bit($type, 4)) {
			if ($out == 1 || $out == true) {
				$out = "true";
			} else {
				$out = "false";
			}
		}
		if ($this->has_bit($type, 5)) {
			$out = ucfirst($out);
		}
		return $out;
	}
}

?>