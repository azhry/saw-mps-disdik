<?php 

class Lingkup_survei_m extends MY_Model {

	public function __construct() {

		parent::__construct();
		$this->data['table_name']	= 'lingkup_survei';
		$this->data['primary_key']	= 'id_survei';

	}

}