<?php 

class Mahasiswa extends MY_Controller {

	public function __construct() {

		parent::__construct();
		$this->data['id_pengguna']	= $this->session->userdata( 'id_pengguna' );
		if ( !isset( $this->data['id_pengguna'] ) ) {

			$this->session->sess_destroy();
			$this->flashmsg( 'Anda harus login terlebih dahulu', 'warning' );
			redirect( 'login' );
			exit;

		}

		$this->data['role']	= $this->session->userdata( 'role' );
		if ( $this->data['role'] != 'mahasiswa' ) {

			$this->session->sess_destroy();
			$this->flashmsg( 'Anda harus login sebagai mahasiswa', 'warning' );
			redirect( 'login' );
			exit;

		}

		$this->load->model( 'pengguna_m' );
		$this->data['mahasiswa'] = $this->pengguna_m->get_mahasiswa( [ 'mahasiswa.id_pengguna' => $this->data['id_pengguna'] ] );

		$this->load->model( 'jawaban_pengguna_m' );
		$this->data['pertanyaan_terjawab'] = $this->jawaban_pengguna_m->get( [ 'id_pengguna' => $this->data['id_pengguna'] ] );

		$this->load->model( 'lingkup_m' );
		$this->load->model( 'pertanyaan_m' );
		$this->load->model( 'pertanyaan_fakultas_m' );
		$this->load->model( 'pertanyaan_jurusan_m' );

		$this->data['pertanyaan_universitas']	= [];
		$this->data['pertanyaan_fakultas']		= [];
		$this->data['pertanyaan_jurusan']		= [];
		$this->data['lingkup']					= $this->lingkup_m->get();
		foreach ( $this->data['lingkup'] as $lingkup ) {

			if ( strtolower( $lingkup->nama ) == 'universitas' or strtolower( $lingkup->nama ) == 'fakultas' or strtolower( $lingkup->nama ) == 'jurusan' ) {

				if ( strtolower( $lingkup->nama ) == 'fakultas' ) {

					$this->data['pertanyaan_' . strtolower( str_replace( ' ', '_', $lingkup->nama ) )] = $this->pertanyaan_fakultas_m->get_list_pertanyaan( $this->data['mahasiswa']->id_fakultas );

				} else if ( strtolower( $lingkup->nama ) == 'jurusan' ) {

					$this->data['pertanyaan_' . strtolower( str_replace( ' ', '_', $lingkup->nama ) )] = $this->pertanyaan_jurusan_m->get_list_pertanyaan( $this->data['mahasiswa']->id_jurusan );

				} else {

					$this->data['pertanyaan_' . strtolower( str_replace( ' ', '_', $lingkup->nama ) )] = $this->pertanyaan_m->get_pertanyaan( [ 'id_lingkup' => $lingkup->id_lingkup ] );

				}

			}

		}

	}

	public function index() {

		$this->data['title'] 	= 'Dashboard | ' . $this->title;
		$this->data['content']	= 'mahasiswa/dashboard';
		$this->template( $this->data );

	}

	public function survei() {

		$this->load->model( 'kategori_pertanyaan_m' );
		$this->load->model( 'pilihan_jawaban_m' );
		$this->load->model( 'jawaban_pengguna_m' );

		if ( $this->POST( 'save_data' ) ) {

			$response		= [];
			$id_pertanyaan 	= $this->POST( 'id_pertanyaan' );
			$id_jawaban 	= $this->POST( 'id_jawaban' );
			$check_jawaban 	= $this->jawaban_pengguna_m->get_row( [ 'id_pengguna' => $this->data['id_pengguna'], 'id_pertanyaan' => $id_pertanyaan ] );
			if ( isset( $check_jawaban ) ) {

				if ( $check_jawaban->status != 1 ) {

					$this->jawaban_pengguna_m->update($check_jawaban->id_jawaban_pengguna, [
						'id_jawaban'	=> $id_jawaban,
						'updated_at'	=> date('Y-m-d H:i:s')
					]);

				}
				
				$response['action'] = 'update';

				$jawaban = $this->pilihan_jawaban_m->get_row( [ 'id_jawaban' => $id_jawaban ] );
				if ( !isset( $jawaban ) ) $response['data'] = '<span class="text-error">Error</span>';
				else $response['data'] = $jawaban->jawaban;

			} else {

				$this->jawaban_pengguna_m->insert([
					'id_jawaban_pengguna'	=> $this->generate_id(),
					'id_pengguna'			=> $this->data['id_pengguna'],
					'id_pertanyaan'			=> $id_pertanyaan,
					'id_jawaban'			=> $id_jawaban
				]);

				$response['action'] = 'insert';

				$jawaban = $this->pilihan_jawaban_m->get_row( [ 'id_jawaban' => $id_jawaban ] );
				if ( !isset( $jawaban ) ) $response['answer'] = '<span class="text-error">Error</span>';
				else {

					$pertanyaan = $this->pertanyaan_m->get_row( [ 'id_pertanyaan' => $id_pertanyaan ] );
					$response['question'] 	= isset( $pertanyaan ) ? $pertanyaan->pertanyaan : '<span class="text-error">Pertanyaan tidak ditemukan</span>';
					$response['answer'] 	= $jawaban->jawaban;

				} 

			}

			echo json_encode( $response );
			exit;

		}

		if ( $this->POST( 'jawab_pertanyaan' ) ) {

			foreach ( $this->data['pertanyaan_universitas'] as $pertanyaan ) {

				$jawaban 		= $this->POST( 'jawaban_' . $pertanyaan->id_pertanyaan );
				if ( !isset( $jawaban ) or empty( $jawaban ) ) continue;

				$check_jawaban 	= $this->jawaban_pengguna_m->get_row( [ 'id_pengguna' => $this->data['id_pengguna'], 'id_pertanyaan' => $pertanyaan->id_pertanyaan ] );
				if ( isset( $check_jawaban ) ) {

					$this->jawaban_pengguna_m->update($check_jawaban->id_jawaban_pengguna, [
						'id_jawaban'	=> $jawaban,
						'status'		=> 1,
						'updated_at'	=> date( 'Y-m-d H:i:s' )
					]);

				} else {

					$this->jawaban_pengguna_m->insert([
						'id_jawaban_pengguna'	=> $this->generate_id(),
						'id_pengguna'			=> $this->data['id_pengguna'],
						'id_pertanyaan'			=> $pertanyaan->id_pertanyaan,
						'id_jawaban'			=> $jawaban,
						'status'				=> 1
					]);

				}

			}

			foreach ( $this->data['pertanyaan_fakultas'] as $pertanyaan ) {

				$jawaban 		= $this->POST( 'jawaban_' . $pertanyaan->id_pertanyaan );
				if ( !isset( $jawaban ) or empty( $jawaban ) ) continue;

				$check_jawaban 	= $this->jawaban_pengguna_m->get_row( [ 'id_pengguna' => $this->data['id_pengguna'], 'id_pertanyaan' => $pertanyaan->id_pertanyaan ] );
				if ( isset( $check_jawaban ) ) {

					$this->jawaban_pengguna_m->update($check_jawaban->id_jawaban_pengguna, [
						'id_jawaban'	=> $jawaban,
						'status'		=> 1,
						'updated_at'	=> date( 'Y-m-d H:i:s' )
					]);

				} else {

					$this->jawaban_pengguna_m->insert([
						'id_jawaban_pengguna'	=> $this->generate_id(),
						'id_pengguna'			=> $this->data['id_pengguna'],
						'id_pertanyaan'			=> $pertanyaan->id_pertanyaan,
						'id_jawaban'			=> $jawaban,
						'status'				=> 1
					]);

				}

			}

			foreach ( $this->data['pertanyaan_jurusan'] as $pertanyaan ) {

				$jawaban 		= $this->POST( 'jawaban_' . $pertanyaan->id_pertanyaan );
				if ( !isset( $jawaban ) or empty( $jawaban ) ) continue;

				$check_jawaban 	= $this->jawaban_pengguna_m->get_row( [ 'id_pengguna' => $this->data['id_pengguna'], 'id_pertanyaan' => $pertanyaan->id_pertanyaan ] );
				if ( isset( $check_jawaban ) ) {

					$this->jawaban_pengguna_m->update($check_jawaban->id_jawaban_pengguna, [
						'id_jawaban'	=> $jawaban,
						'status'		=> 1,
						'updated_at'	=> date( 'Y-m-d H:i:s' )
					]);

				} else {

					$this->jawaban_pengguna_m->insert([
						'id_jawaban_pengguna'	=> $this->generate_id(),
						'id_pengguna'			=> $this->data['id_pengguna'],
						'id_pertanyaan'			=> $pertanyaan->id_pertanyaan,
						'id_jawaban'			=> $jawaban,
						'status'				=> 1
					]);

				}

			}	

			redirect( 'mahasiswa/survei' );
			exit;
		}

		$this->data['selesai']				= false;
		$this->data['jawaban_tersimpan']	= $this->jawaban_pengguna_m->get([ 'id_pengguna' => $this->data['id_pengguna'], 'status' => 1 ]);
		if ( count( $this->data['jawaban_tersimpan'] ) == count( $this->data['pertanyaan_universitas'] ) + count( $this->data['pertanyaan_fakultas'] ) + count( $this->data['pertanyaan_jurusan'] ) ) {

			$this->data['selesai']	= true;

		}
		$this->data['kategori_pertanyaan']	= $this->kategori_pertanyaan_m->get();
		$this->data['title']				= 'Survei Mahasiswa | ' . $this->title;
		$this->data['content']				= 'mahasiswa/survei_mahasiswa';
		$this->data['page_script']			= 'mahasiswa/survei_mahasiswa_script';
		$this->template( $this->data );

	}

}