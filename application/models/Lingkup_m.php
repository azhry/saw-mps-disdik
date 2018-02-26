<?php 

class Lingkup_m extends MY_Model {

	public function __construct() {

		parent::__construct();
		$this->data['table_name']	= 'lingkup';
		$this->data['primary_key']	= 'id_lingkup';

	}

}