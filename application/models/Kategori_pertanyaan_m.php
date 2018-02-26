<?php 

class Kategori_pertanyaan_m extends MY_Model {

	public function __construct() {

		parent::__construct();
		$this->data['table_name']	= 'kategori_pertanyaan';
		$this->data['primary_key']	= 'id_kategori';

	}

}