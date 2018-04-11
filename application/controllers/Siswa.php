<?php 
defined( 'BASEPATH' ) OR exit( 'No direct script access allowed' );

class Siswa extends MY_Controller {

	public function __construct() {

		parent::__construct();
		$this->data['id_pengguna']	= $this->session->userdata( 'id_pengguna' );
		if ( !isset( $this->data['id_pengguna'] ) ) {

			$this->session->sess_destroy();
			$this->flashmsg( 'Anda harus login terlebih dahulu', 'warning' );
			redirect( 'login' );
			exit;

		}

		$this->data['id_role']	= $this->session->userdata( 'id_role' );
		if ( $this->data['id_role'] != 3 ) {

			$this->session->sess_destroy();
			$this->flashmsg( 'Anda harus login sebagai admin', 'warning' );
			redirect( 'login' );
			exit;

		}

		$this->load->model( 'pengguna_m' );
		$this->data['pengguna']	= $this->pengguna_m->get_row([ 'id_pengguna' => $this->data['id_pengguna'] ]);

	}

	public function index() {

		$this->data['title'] 	= 'Dashboard';
		$this->data['content']	= 'siswa/dashboard';
		$this->template( $this->data, 'siswa' );
		
	}

	public function data_sekolah() {

		$this->load->model( 'sekolah_m' );
		$this->data['sekolah']	= $this->sekolah_m->get();
		$this->data['title']	= 'Data Sekolah';
		$this->data['content']	= 'siswa/sekolah_data';
		$this->template( $this->data, 'siswa' );

	}

}