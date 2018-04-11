<?php 
defined( 'BASEPATH' ) OR exit( 'No direct script access allowed' );

class Web extends MY_Controller {

	public function __construct() {

		parent::__construct();

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