<?php

class apply_filter extends twig_extention {
	
	protected $extention_list = array("apply_filter");
	
	public function __construct(&$twig) {
		parent::__construct($twig);
	}
	
	public function apply_filter($filter) {
		return $filter;
	}
}

?>