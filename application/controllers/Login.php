<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller
{

	public function __construct() {

		parent::__construct();
		$this->data['id_pengguna']	= $this->session->userdata( 'id_pengguna' );
		if ( isset( $this->data['id_pengguna'] ) ) {

			$this->data['id_role']	= $this->session->userdata( 'id_role' );
			switch ( $this->data['id_role'] ) {

				case 1:
					redirect( 'admin-dinas' );
					break;
				case 2:
					redirect( 'kadin' );
					break;
				case 3:
					redirect( 'siswa' );
					break;

			}

		}

	}

	public function index() {

		if ( $this->POST( 'login' ) ) {

			$this->load->model( 'login_m' );
			$pengguna = $this->login_m->login( $this->POST( 'nip' ), md5( $this->POST( 'password' ) ) );
			if ( !$pengguna ) {
				$this->flashmsg( 'NIP atau password salah', 'danger' );
			}

			redirect( 'login' );
			exit;

		}

		$this->load->view('login');
		
	}


}