<?php 

class Jawaban_pengguna_m extends MY_Model {

	public function __construct() {

		parent::__construct();
		$this->data['table_name']	= 'jawaban_pengguna';
		$this->data['primary_key']	= 'id_jawaban_pengguna';

	}

	public function skor_per_fakultas() {


	}

	public function skor_per_jurusan() {

		
	}

}