<?php
defined( 'BASEPATH' ) OR exit( 'No direct script access allowed' );

class Admin extends MY_Controller {

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
		if ( $this->data['id_role'] != 1 ) {

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
		$this->data['content']	= 'admin/dashboard';
		$this->template( $this->data );

	}

	public function data_kriteria() {

		$this->load->model( 'kriteria_m' );
		if ( $this->GET( 'delete' ) && $this->GET( 'id_kriteria' ) ) {

			$this->kriteria_m->delete( $this->GET( 'id_kriteria' ) );
			$this->flashmsg( 'Data kriteria berhasil dihapus' );
			redirect( 'admin/data-kriteria' );
			exit;

		}

		$this->data['kriteria']	= $this->kriteria_m->get();
		$this->data['title']	= 'Data Kriteria Penilaian';
		$this->data['content']	= 'admin/kriteria_data';
		$this->template( $this->data );

	}

	public function insert_kriteria() {

		$this->load->model( 'kriteria_m' );
		if ( $this->POST( 'submit' ) ) {

			$this->data['kriteria']	= [
				'kriteria'			=> $this->POST( 'kriteria' ),
				'deskripsi'			=> $this->POST('deskripsi'),
				'nilai_prioritas'	=> $this->POST('nilai_prioritas')
			];
			$this->kriteria_m->insert( $this->data['kriteria'] );
			$this->flashmsg( 'Data kriteria berhasil ditambahkan' );
			redirect( 'admin/data-kriteria' );
			exit;

		}

		$this->data['title']	= 'Insert Kriteria Penilaian';
		$this->data['content']	= 'admin/kriteria_insert';
		$this->template( $this->data );

	}

	public function edit_kriteria() {

		$this->data['id_kriteria']	= $this->uri->segment( 3 );
		$this->check_allowance( !isset( $this->data['id_kriteria'] ) );

		$this->load->model( 'kriteria_m' );
		$this->data['kriteria']	= $this->kriteria_m->get_row([ 'id_kriteria' => $this->data['id_kriteria'] ]);
		$this->check_allowance( !isset( $this->data['kriteria'] ), [ 'Data not found', 'danger' ] );
		
		if ( $this->POST( 'submit' ) ) {

			$this->data['kriteria']	= [
				'kriteria'			=> $this->POST( 'kriteria' ),
				'deskripsi'			=> $this->POST('deskripsi'),
				'nilai_prioritas'	=> $this->POST('nilai_prioritas')
			];
			$this->kriteria_m->update( $this->data['id_kriteria'], $this->data['kriteria'] );
			$this->flashmsg( 'Data kriteria berhasil disunting' );
			redirect( 'admin/edit-kriteria/' . $this->data['id_kriteria'] );
			exit;

		}

		$this->data['title']	= 'Edit Kriteria Penilaian';
		$this->data['content']	= 'admin/kriteria_edit';
		$this->template( $this->data );

	}

	public function data_bobot() {

		$this->load->model( 'bobot_m' );
		if ( $this->GET( 'delete' ) && $this->GET( 'id_bobot' ) ) {

			$this->bobot_m->delete( $this->GET( 'id_bobot' ) );
			$this->flashmsg( 'Data bobot berhasil dihapus' );
			redirect( 'admin/data-bobot' );
			exit;

		}

		$this->data['bobot']	= $this->bobot_m->get_bobot();
		$this->data['title']	= 'Data Bobot Penilaian';
		$this->data['content']	= 'admin/bobot_data';
		$this->template( $this->data );

	}

	public function insert_bobot() {

		$this->load->model( 'bobot_m' );
		$this->load->model( 'kriteria_m' );
		if ( $this->POST( 'submit' ) ) {

			$this->data['bobot']	= [
				'nama'			=> $this->POST( 'nama' ),
				'nilai'			=> $this->POST( 'nilai' ),
				'id_kriteria'	=> $this->POST( 'id_kriteria' )
			];
			$this->bobot_m->insert( $this->data['bobot'] );
			$this->flashmsg( 'Data bobot berhasil ditambahkan' );
			redirect( 'admin/data-bobot' );
			exit;

		}

		$this->data['kriteria']	= $this->kriteria_m->get();
		$this->data['title']	= 'Insert Bobot Penilaian';
		$this->data['content']	= 'admin/bobot_insert';
		$this->template( $this->data );

	}

	public function edit_bobot() {

		$this->data['id_bobot']	= $this->uri->segment( 3 );
		$this->check_allowance( !isset( $this->data['id_bobot'] ) );

		$this->load->model( 'bobot_m' );
		$this->data['bobot']	= $this->bobot_m->get_row([ 'id_bobot' => $this->data['id_bobot'] ]);
		$this->check_allowance( !isset( $this->data['bobot'] ), [ 'Data not found', 'danger' ] );
		
		$this->load->model( 'kriteria_m' );

		if ( $this->POST( 'submit' ) ) {

			$this->data['bobot']	= [
				'nama'			=> $this->POST( 'nama' ),
				'nilai'			=> $this->POST( 'nilai' ),
				'id_kriteria'	=> $this->POST( 'id_kriteria' )
			];
			$this->bobot_m->update( $this->data['id_bobot'], $this->data['bobot'] );
			$this->flashmsg( 'Data bobot berhasil disunting' );
			redirect( 'admin/edit-bobot/' . $this->data['id_bobot'] );
			exit;

		}

		$this->data['kriteria']	= $this->kriteria_m->get();
		$this->data['title']	= 'Edit Bobot Penilaian';
		$this->data['content']	= 'admin/bobot_edit';
		$this->template( $this->data );

	}

	public function data_sekolah() {

		$this->load->model( 'sekolah_m' );
		if ( $this->GET( 'delete' ) && $this->GET( 'id_sekolah' ) ) {

			$this->sekolah_m->delete( $this->GET( 'id_sekolah' ) );
			$this->flashmsg( 'Data sekolah berhasil dihapus' );
			redirect( 'admin/data-sekolah' );
			exit;

		}

		$this->data['sekolah']	= $this->sekolah_m->get();
		$this->data['title']	= 'Data Sekolah';
		$this->data['content']	= 'admin/sekolah_data';
		$this->template( $this->data );

	}

	public function insert_sekolah() {

		$this->load->model( 'sekolah_m' );
		if ( $this->POST( 'submit' ) ) {

			$this->data['sekolah']	= [
				'nama_sekolah'		=> $this->POST( 'nama_sekolah' ),
				'lokasi_sekolah'	=> $this->POST( 'lokasi_sekolah' ),
				'npsn'				=> $this->POST( 'npsn' ),
				'kabupaten'			=> $this->POST( 'kabupaten' ),
				'desa'				=> $this->POST( 'desa' ),
				'kelurahan'			=> $this->POST( 'kelurahan' ),
				'kecamatan'			=> $this->POST( 'kecamatan' ),
				'status'			=> $this->POST( 'status' )
			];
			$this->sekolah_m->insert( $this->data['sekolah'] );
			$this->flashmsg( 'Data sekolah berhasil ditambahkan' );
			redirect( 'admin/data-sekolah' );
			exit;

		}

		$this->data['title']	= 'Insert Sekolah';
		$this->data['content']	= 'admin/sekolah_insert';
		$this->template( $this->data );

	}

	public function edit_sekolah() {

		$this->data['id_sekolah']	= $this->uri->segment( 3 );
		$this->check_allowance( !isset( $this->data['id_sekolah'] ) );

		$this->load->model( 'sekolah_m' );
		$this->data['sekolah']	= $this->sekolah_m->get_row([ 'id_sekolah' => $this->data['id_sekolah'] ]);
		$this->check_allowance( !isset( $this->data['sekolah'] ), [ 'Data not found', 'danger' ] );
		
		if ( $this->POST( 'submit' ) ) {

			$this->data['sekolah']	= [
				'nama_sekolah'		=> $this->POST( 'nama_sekolah' ),
				'lokasi_sekolah'	=> $this->POST( 'lokasi_sekolah' ),
				'npsn'				=> $this->POST( 'npsn' ),
				'kabupaten'			=> $this->POST( 'kabupaten' ),
				'desa'				=> $this->POST( 'desa' ),
				'kelurahan'			=> $this->POST( 'kelurahan' ),
				'kecamatan'			=> $this->POST( 'kecamatan' ),
				'status'			=> $this->POST( 'status' )
			];
			$this->sekolah_m->update( $this->data['id_sekolah'], $this->data['sekolah'] );
			$this->flashmsg( 'Data sekolah berhasil disunting' );
			redirect( 'admin/edit-sekolah/' . $this->data['id_sekolah'] );
			exit;

		}

		$this->data['title']	= 'Edit Sekolah';
		$this->data['content']	= 'admin/sekolah_edit';
		$this->template( $this->data );

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
		$this->data['content']	= 'admin/penilaian_data';
		$this->template( $this->data );

	}

	public function insert_penilaian() {

		$this->load->model( 'kriteria_m' );
		$this->load->model( 'bobot_m' );
		$this->load->model( 'saw_m' );
		$this->load->model( 'sekolah_m' );

		if ( $this->POST( 'submit' ) ) {

			$id_kriteria 	= $this->POST( 'id_kriteria' );
			$id_bobot 		= $this->POST( 'id_bobot' );
			for ( $i = 0; $i < count( $id_kriteria ); $i++ ) {

				$this->data['penilaian'] = [
					'id_sekolah'	=> $this->POST( 'id_sekolah' ),
					'id_kriteria'	=> $id_kriteria[$i],
					'id_bobot'		=> $id_bobot[$i]
				];
				$this->saw_m->insert( $this->data['penilaian'] );

			}

		}

		$this->data['sekolah']	= $this->sekolah_m->get();
		$this->data['kriteria']	= $this->kriteria_m->get();
		$this->data['title']	= 'Beri Nilai Sekolah';
		$this->data['content']	= 'admin/penilaian_insert';
		$this->template( $this->data );

	}

	public function edit_penilaian() 
	{


	}

	public function data_siswa() 
	{

		$this->load->model( 'siswa_m' );
		if ( $this->GET( 'delete' ) && $this->GET( 'id_siswa' ) ) 
		{

			$this->siswa_m->delete( $this->GET( 'id_siswa' ) );
			$this->flashmsg( 'Data siswa berhasil dihapus' );
			redirect( 'admin/data-siswa' );
			exit;

		}

		$this->data['siswa']	= $this->siswa_m->get_siswa();
		$this->data['title']	= 'Data Sekolah';
		$this->data['content']	= 'admin/siswa_data';
		$this->template( $this->data );

	}

	public function insert_siswa() 
	{
		$this->load->model('siswa_m');
		$this->load->model('sekolah_m');

		if ($this->POST('submit'))
		{
			$this->data['siswa'] = [
				'nis'			=> $this->POST('nis'),
				'nama'			=> $this->POST('nama'),
				'jenis_kelamin'	=> $this->POST('jenis_kelamin'),
				'id_sekolah'	=> $this->POST('id_sekolah'),
				'tempat_lahir'	=> $this->POST('tempat_lahir'),
				'tanggal_lahir'	=> $this->POST('tanggal_lahir'),
				'password'		=> md5($this->POST('password'))
			];

			$this->siswa_m->insert($this->data['siswa']);
			$this->flashmsg('Data siswa berhasil dimasukkan');
			redirect('admin/data-siswa');
			exit;
		}

		$this->data['sekolah']	= $this->sekolah_m->get();
		$this->data['title']	= 'Insert Siswa';
		$this->data['content']	= 'admin/siswa_insert';
		$this->template($this->data);
	}

	public function edit_siswa() 
	{
		$this->data['id_siswa']	= $this->uri->segment( 3 );
		$this->check_allowance( !isset( $this->data['id_siswa'] ) );

		$this->load->model( 'siswa_m' );
		$this->data['siswa']	= $this->siswa_m->get_row([ 'id_siswa' => $this->data['id_siswa'] ]);
		$this->check_allowance( !isset( $this->data['siswa'] ), [ 'Data not found', 'danger' ] );

		$this->load->model('sekolah_m');
		$this->data['sekolah'] = array_map(function($sekolah) {
			return [ $sekolah->id_sekolah => $sekolah->nama_sekolah ];
		}, $this->sekolah_m->get());
		
		if ( $this->POST( 'edit' ) ) 
		{
			$this->data['siswa'] = [
				'nis'			=> $this->POST('nis'),
				'nama'			=> $this->POST('nama'),
				'jenis_kelamin'	=> $this->POST('jenis_kelamin'),
				'id_sekolah'	=> $this->POST('id_sekolah'),
				'tempat_lahir'	=> $this->POST('tempat_lahir'),
				'tanggal_lahir'	=> $this->POST('tanggal_lahir'),
			];
			$password = $this->POST('password');
			if (!empty($password)) $this->data['siswa']['password'] = md5($password);
			$this->siswa_m->update( $this->data['id_siswa'], $this->data['siswa'] );
			$this->flashmsg( 'Data siswa berhasil disunting' );
			redirect( 'admin/edit-siswa/' . $this->data['id_siswa'] );
			exit;
		}

		$this->data['title']	= 'Edit Siswa';
		$this->data['content']	= 'admin/siswa_edit';
		$this->template( $this->data );
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
			redirect('admin/komentar');
			exit;
		}

		$this->load->model('pengguna_m');
		$this->load->model('siswa_m');
		$this->data['komentar'] = $this->komentar_m->get_by_order('created_at', 'DESC');
		$this->data['title']	= 'Beri Komentar';
		$this->data['content']	= 'admin/komentar';
		$this->template($this->data, 'admin');
	}

	public function data_admin_sekolah()
	{
		$this->load->model('admin_sekolah_m');
		if ( $this->GET( 'delete' ) && $this->GET( 'id' ) ) 
		{

			$this->admin_sekolah_m->delete( $this->GET( 'id' ) );
			$this->flashmsg( 'Data admin sekolah berhasil dihapus' );
			redirect( 'admin/data-admin-sekolah' );
			exit;

		}
		$this->data['admin']	= $this->admin_sekolah_m->get_admin();
		$this->data['title']	= 'Data Admin Sekolah';
		$this->data['content']	= 'admin/data_admin_sekolah';
		$this->template($this->data, 'admin');
	}

	public function tambah_admin_sekolah()
	{
		$this->load->model('admin_sekolah_m');
		$this->load->model('sekolah_m');
		$this->load->model('pengguna_m');
		if ($this->POST('submit'))
		{
			$this->data['pengguna'] = [
				'nip'		=> $this->POST('nip'),
				'password'	=> md5($this->POST('password')),
				'nama'		=> $this->POST('nama'),
				'id_role'	=> 5
			];
			$this->pengguna_m->insert($this->data['pengguna']);

			$this->data['admin'] = [
				'id_pengguna'	=> $this->db->insert_id(),
				'id_sekolah'	=> $this->POST('id_sekolah')
			];
			$this->admin_sekolah_m->insert($this->data['admin']);
			$this->flashmsg('Admin sekolah berhasil ditambahkan');
			redirect('admin/data-admin-sekolah');
		}

		$this->data['sekolah']	= $this->sekolah_m->get();
		$this->data['title']	= 'Data Admin Sekolah';
		$this->data['content']	= 'admin/tambah_admin_sekolah';
		$this->template($this->data, 'admin');	
	}

	public function monster_lite() {

		redirect( base_url( 'assets/monster-lite' ) );

	}

}