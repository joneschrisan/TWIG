<?php

class dates extends twig_extention {
	
	protected $extention_list = array(
		"dateSQL",
		"datetimeSQL",
		"dateUSA",
		"datetimeUSA",
		"dateUK",
		"datetimeUK"
	);
	
	public function __construct(&$twig) {
		parent::__construct($twig);
	}
	
	public function dateSQL($date) {
		return $date ? format_date($date, "Y-m-d") : null;
	}
	
	public function datetimeSQL($date) {
		return $date ? format_date($date, "Y-m-d H:i:s") : null;
	}
	
	public function dateUSA($date) {
		return $date ? format_date($date, "m/d/Y") : null;
	}
	
	public function datetimeUSA($date) {
		return $date ? format_date($date, "m/d/Y H:i:s") : null;
	}
	
	public function dateUK($date) {
		return $date ? format_date($date, "d/m/Y") : null;
	}
	
	public function datetimeUK($date) {
		return $date ? format_date($date, "d/m/Y H:i:s") : null;
	}
	
	private function format_date($date, $format) {
		$d = new DateTime($date);
		return $d->format($format);
	}
	
}

?>