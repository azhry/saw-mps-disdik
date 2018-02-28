<?php 

class Saw_m extends MY_Model {

	public function __construct() {

		parent::__construct();
		$this->data['table_name']	= 'penilaian';
		$this->data['primary_key']	= 'id_nilai';

	}

	private function normalize( $id_kriteria ) {

		$this->db->select( '*, MAX(nilai) AS max_nilai' );
		$this->db->from( $this->data['table_name'] );
		$this->db->join( 'kriteria', $this->data['table_name'] . '.id_kriteria = kriteria.id_kriteria' );
		$this->db->join( 'bobot', $this->data['table_name'] . '.id_bobot = bobot.id_bobot' );
		$this->db->where([ 'bobot.id_kriteria' => $id_kriteria ]);
		$query = $this->db->get();
		return $query->row()->max_nilai;

	}

	public function get_result( $id_sekolah ) {

		$this->db->select( '*' );
		$this->db->from( $this->data['table_name'] );
		$this->db->join( 'bobot', $this->data['table_name'] . '.id_bobot = bobot.id_bobot' );
		$this->db->join( 'sekolah', $this->data['table_name'] . '.id_sekolah = sekolah.id_sekolah' );
		$this->db->where([ $this->data['table_name'] . '.id_sekolah' => $id_sekolah ]);
		$query = $this->db->get();
		$result = $query->result();

		if ( count( $result ) > 0 ) {

			$final_result = 0;
			foreach ( $result as $row ) {
				// echo '1/5 * ' . $row->nilai/$this->normalize( $row->id_kriteria ) . ' = ' . ( 1/5 ) * ( $row->nilai/$this->normalize( $row->id_kriteria ) ) . '<br>';
				$final_result += ( 1/5 ) * ( $row->nilai/$this->normalize( $row->id_kriteria ) );
			}

			return $final_result;

		}

		return null;

	}

}