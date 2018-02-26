<?php 

class Survei_m extends MY_Model {

	public function __construct() {
		parent::__construct();
		$this->data['table_name']	= 'survei';
		$this->data['primary_key']	= 'id_survei';
	}
	
}