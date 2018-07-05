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
					redirect('admin/data-sekolah');
					break;
				case 2:
					redirect('kepala-dinas/data-penilaian');
					break;
				case 3:
					redirect('siswa/data-sekolah');
					break;
				case 4:
					redirect('assessor/data-penilaian');
					break;

			}

		}

	}

	public function index() {

		// $this->load->library( 'electre' );
		// $data = [
		// 	[
		// 		'Alternatif'	=> 'M1',
		// 		'K1'			=> 3,
		// 		'K2'			=> 2,
		// 		'K3'			=> 5,
		// 		'K4'			=> 5,
		// 		'K5'			=> 2,
		// 		'K6'			=> 1
		// 	],
		// 	[
		// 		'Alternatif'	=> 'M2',
		// 		'K1'			=> 5,
		// 		'K2'			=> 3,
		// 		'K3'			=> 4,
		// 		'K4'			=> 5,
		// 		'K5'			=> 2,
		// 		'K6'			=> 2
		// 	],
		// 	[
		// 		'Alternatif'	=> 'M3',
		// 		'K1'			=> 4,
		// 		'K2'			=> 5,
		// 		'K3'			=> 3,
		// 		'K4'			=> 1,
		// 		'K5'			=> 2,
		// 		'K6'			=> 4
		// 	],
		// 	[
		// 		'Alternatif'	=> 'M4',
		// 		'K1'			=> 2,
		// 		'K2'			=> 2,
		// 		'K3'			=> 5,
		// 		'K4'			=> 4,
		// 		'K5'			=> 5,
		// 		'K6'			=> 1
		// 	],
		// 	[
		// 		'Alternatif'	=> 'M5',
		// 		'K1'			=> 3,
		// 		'K2'			=> 2,
		// 		'K3'			=> 2,
		// 		'K4'			=> 3,
		// 		'K5'			=> 1,
		// 		'K6'			=> 2
		// 	],
		// 	[
		// 		'Alternatif'	=> 'M6',
		// 		'K1'			=> 2,
		// 		'K2'			=> 4,
		// 		'K3'			=> 5,
		// 		'K4'			=> 4,
		// 		'K5'			=> 1,
		// 		'K6'			=> 1
		// 	],
		// 	[
		// 		'Alternatif'	=> 'M7',
		// 		'K1'			=> 5,
		// 		'K2'			=> 2,
		// 		'K3'			=> 4,
		// 		'K4'			=> 1,
		// 		'K5'			=> 5,
		// 		'K6'			=> 2
		// 	],
		// 	[
		// 		'Alternatif'	=> 'M8',
		// 		'K1'			=> 5,
		// 		'K2'			=> 4,
		// 		'K3'			=> 1,
		// 		'K4'			=> 2,
		// 		'K5'			=> 4,
		// 		'K6'			=> 2
		// 	],
		// 	[
		// 		'Alternatif'	=> 'M9',
		// 		'K1'			=> 2,
		// 		'K2'			=> 5,
		// 		'K3'			=> 2,
		// 		'K4'			=> 3,
		// 		'K5'			=> 4,
		// 		'K6'			=> 4
		// 	]
		// ];

		// $excludedCols = [ 'Alternatif' ];
		// $weights = [ 4, 3, 5, 3, 2, 1 ];
		// $this->electre->fit( $data, $weights, $excludedCols );
		// $this->electre->alternative();
		// exit;

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