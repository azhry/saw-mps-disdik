<?php 
defined( 'BASEPATH' ) OR exit( 'No direct script access allowed' );

class Kepala_dinas extends MY_Controller {

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
		if ( $this->data['id_role'] != 2 ) {

			$this->session->sess_destroy();
			$this->flashmsg( 'Anda harus login sebagai kepala dinas', 'warning' );
			redirect( 'login' );
			exit;

		}

		$this->load->model( 'pengguna_m' );
		$this->data['pengguna']	= $this->pengguna_m->get_row([ 'id_pengguna' => $this->data['id_pengguna'] ]);

	}

	public function index() {

		$this->data['title'] 	= 'Dashboard';
		$this->data['content']	= 'kepala_dinas/dashboard';
		$this->template( $this->data, 'kepala_dinas' );

	}


	public function data_penilaian() {

		$this->load->model( 'sekolah_m' );
		$this->load->model( 'saw_m' );

		$this->data['sekolah'] = $this->sekolah_m->get();
		$nilai = [];
		for ( $i = 0; $i < count( $this->data['sekolah'] ); $i++ ) {

			$this->data['sekolah'][$i]->nilai = $this->saw_m->get_result( $this->data['sekolah'][$i]->id_sekolah );
			$nilai[$this->data['sekolah'][$i]->id_sekolah] = $this->data['sekolah'][$i]->nilai;

		}

		array_multisort( $nilai, SORT_DESC, $this->data['sekolah'] );
		$this->data['title']	= 'Data Penilaian Sekolah';
		$this->data['content']	= 'kepala_dinas/penilaian_data';
		$this->template( $this->data, 'kepala_dinas' );

	}

	public function komentar() 
	{
		$this->load->model('komentar_m');
		if ($this->POST('submit'))
		{
			$this->data['komentar'] = [ 'komentar' => $this->POST('komentar') ];
			$this->data['id_pengguna'] = $this->session->userdata('id_pengguna');
			if (isset($this->data['id_pengguna']))
			{
				$this->data['komentar']['id_pengguna'] 	= $this->session->userdata('id_pengguna');
				$this->data['komentar']['id_role']		= $this->session->userdata('id_role');
			}
			$this->komentar_m->insert($this->data['komentar']);
			$this->flashmsg('Komentar berhasil dimasukkan');
			redirect('kepala_dinas/komentar');
			exit;
		}

		$this->load->model('pengguna_m');
		$this->load->model('siswa_m');
		$this->data['komentar'] = $this->komentar_m->get_by_order('created_at', 'DESC');
		$this->data['title']	= 'Beri Komentar';
		$this->data['content']	= 'kepala_dinas/komentar';
		$this->template($this->data, 'kepala_dinas');
	}

}