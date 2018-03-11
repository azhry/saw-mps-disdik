<?php 

class Login_m extends MY_Model {

	public function __construct() {

		parent::__construct();
		$this->data['table_name']	= 'pengguna';
		$this->data['primary_key']	= 'id_pengguna';

	}

	public function login( $nip, $password ) {

		$check_account = $this->get_row([ 'nip' => $nip, 'password' => $password ]);
		if ( isset( $check_account ) ) {

			$this->session->set_userdata([
				'id_pengguna'	=> $check_account->id_pengguna,
				'id_role'		=> $check_account->id_role,
				'nip'			=> $check_account->nip
			]);

			return $check_account;

		}

		return false;

	}

}