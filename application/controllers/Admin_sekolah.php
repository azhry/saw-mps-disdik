<?php 

class Admin_sekolah extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->data['id_pengguna']	= $this->session->userdata( 'id_pengguna' );
		if ( !isset( $this->data['id_pengguna'] ) ) {

			$this->session->sess_destroy();
			$this->flashmsg( 'Anda harus login terlebih dahulu', 'warning' );
			redirect( 'login' );
			exit;

		}

		$this->data['id_role']	= $this->session->userdata( 'id_role' );
		if ( $this->data['id_role'] != 5 ) {

			$this->session->sess_destroy();
			$this->flashmsg( 'Anda harus login sebagai admin', 'warning' );
			redirect( 'login' );
			exit;

		}

		$this->load->model( 'pengguna_m' );
		$this->data['pengguna']	= $this->pengguna_m->get_row([ 'id_pengguna' => $this->data['id_pengguna'] ]);

		$this->load->model('admin_sekolah_m');
		$this->data['admin']	= $this->admin_sekolah_m->get_row(['id_pengguna' => $this->data['id_pengguna']]);
		if (!isset($this->data['admin']))
		{
			$this->session->sess_destroy();
			$this->flashmsg( 'Anda harus login sebagai admin sekolah', 'warning' );
			redirect('login');
		}

		$this->load->model('sekolah_m');
		$this->data['sekolah']	= $this->sekolah_m->get_row(['id_sekolah' => $this->data['admin']->id_sekolah]);

	}

	public function index() 
	{
		$this->data['title'] 	= 'Dashboard';
		$this->data['content']	= 'admin_sekolah/dashboard';
		$this->template($this->data, 'admin_sekolah');
	}

	public function data_sekolah()
	{
		$this->data['title'] 	= 'Data Sekolah';
		$this->data['content']	= 'admin_sekolah/data_sekolah';
		$this->template($this->data, 'admin_sekolah');	
	}

	public function data_penilaian()
	{
		$this->load->model('penilaian_m');
		$this->data['penilaian']	= $this->penilaian_m->get_penilaian_sekolah($this->data['admin']->id_sekolah);
		$this->data['title'] 		= 'Data Penilaian Sekolah';
		$this->data['content']		= 'admin_sekolah/data_penilaian_sekolah';
		$this->template($this->data, 'admin_sekolah');	
	}
}