<?php 
defined( 'BASEPATH' ) OR exit( 'No direct script access allowed' );

class Web extends MY_Controller {

	public function __construct() {

		parent::__construct();

	}

	public function index() {

		$this->data['title'] 	= 'Dashboard';
		$this->data['content']	= 'siswa/dashboard';
		$this->template( $this->data, 'web' );
		
	}

	public function data_sekolah() {

		$this->load->model( 'sekolah_m' );
		$this->data['sekolah']	= $this->sekolah_m->get();
		$this->data['title']	= 'Data Sekolah';
		$this->data['content']	= 'siswa/sekolah_data';
		$this->template( $this->data, 'web' );

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
			redirect('web/komentar');
			exit;
		}

		$this->load->model('pengguna_m');
		$this->load->model('siswa_m');
		$this->data['komentar'] = $this->komentar_m->get_by_order('created_at', 'DESC');
		$this->data['title']	= 'Beri Komentar';
		$this->data['content']	= 'web/komentar';
		$this->template($this->data, 'web');
	}

}