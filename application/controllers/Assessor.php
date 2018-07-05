<?php 

class Assessor extends MY_Controller 
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
		if ( $this->data['id_role'] != 4 ) {

			$this->session->sess_destroy();
			$this->flashmsg( 'Anda harus login sebagai kepala dinas', 'warning' );
			redirect( 'login' );
			exit;

		}

		$this->load->model( 'pengguna_m' );
		$this->data['pengguna']	= $this->pengguna_m->get_row([ 'id_pengguna' => $this->data['id_pengguna'] ]);
	}

	public function index()
	{
		redirect('assessor/data-penilaian');
	}

	public function data_penilaian() 
	{

		$this->load->model( 'sekolah_m' );
		$this->load->model( 'saw_m' );

		$this->data['sekolah'] = $this->sekolah_m->get();
		$nilai = [];
		for ( $i = 0; $i < count( $this->data['sekolah'] ); $i++ ) 
		{

			$this->data['sekolah'][$i]->nilai = $this->saw_m->get_result( $this->data['sekolah'][$i]->id_sekolah );
			$nilai[$this->data['sekolah'][$i]->id_sekolah] = $this->data['sekolah'][$i]->nilai;

		}

		array_multisort( $nilai, SORT_DESC, $this->data['sekolah'] );
		$this->data['title']	= 'Data Penilaian Sekolah';
		$this->data['content']	= 'assessor/penilaian_data';
		$this->template( $this->data, 'assessor' );

	}

	public function insert_penilaian() 
	{

		$this->load->model( 'kriteria_m' );
		$this->load->model( 'bobot_m' );
		$this->load->model( 'saw_m' );
		$this->load->model( 'sekolah_m' );

		if ( $this->POST( 'submit' ) ) 
		{

			$id_kriteria 	= $this->POST( 'id_kriteria' );
			$id_bobot 		= $this->POST( 'id_bobot' );
			for ( $i = 0; $i < count( $id_kriteria ); $i++ ) 
			{

				$this->data['penilaian'] = [
					'id_sekolah'	=> $this->POST( 'id_sekolah' ),
					'id_kriteria'	=> $id_kriteria[$i],
					'id_bobot'		=> $id_bobot[$i]
				];
				$this->saw_m->insert( $this->data['penilaian'] );

			}

			$this->flashmsg('Penilaian berhasil disimpan');
			redirect('assessor/insert-penilaian');

		}

		$this->data['sekolah']	= $this->sekolah_m->get();
		$this->data['kriteria']	= $this->kriteria_m->get();
		$this->data['title']	= 'Beri Nilai Sekolah';
		$this->data['content']	= 'assessor/penilaian_insert';
		$this->template( $this->data, 'assessor' );

	}
}