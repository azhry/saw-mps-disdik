<?php 

class Admin_m extends MY_Model {

	public function __construct() {

		parent::__construct();
		$this->data['table_name']	= 'admin';
		$this->data['primary_key']	= 'nik';

	}

	public function get_lingkup_admin( $nik ) {

		$this->data['table_name']	= 'admin_fakultas';
		$admin = $this->get_row( [ 'nik' => $nik ] );
		if ( isset($admin) ) {
			return [
				'lingkup'		=> 'Fakultas',
				'id_fakultas'	=> $admin->id_fakultas
			];
		}

		$this->data['table_name']	= 'admin_jurusan';
		$admin = $this->get_row( [ 'nik' => $nik ] );
		if ( isset($admin) ) {
			return [
				'lingkup'		=> 'Jurusan',
				'id_jurusan'	=> $admin->id_jurusan
			];
		}

		return NULL;

	}

}