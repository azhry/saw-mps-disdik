<?php 

class Pilihan_jawaban_m extends MY_Model {

	public function __construct() {

		parent::__construct();
		$this->data['table_name']	= 'pilihan_jawaban';
		$this->data['primary_key']	= 'id_jawaban';

	}

}