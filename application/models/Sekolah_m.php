<?php 

class Sekolah_m extends MY_Model 
{

	public function __construct() 
	{
		parent::__construct();
		$this->data['table_name']	= 'sekolah';
		$this->data['primary_key']	= 'id_sekolah';
	}

}