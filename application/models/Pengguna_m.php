<?php 

class Pengguna_m extends MY_Model {

	public function __construct() {

		parent::__construct();
		$this->data['table_name']	= 'pengguna';
		$this->data['primary_key']	= 'id_pengguna';

	}

	public function get_admin( $cond = '' ) {

		$this->db->select( '*' );
		$this->db->from( $this->data['table_name'] );
		$this->db->join( 'admin', 'admin.id_pengguna = ' . $this->data['table_name'] . '.id_pengguna' );
		if ( (is_array( $cond ) && count( $cond ) > 0) OR (is_string( $cond ) && strlen( $cond ) >= 3 ) ) {
			$this->db->where($cond);
		}

		$query = $this->db->get();
		return $query->row();

	}

	public function get_mahasiswa( $cond = '' ) {

		$this->db->select( '*' );
		$this->db->from( $this->data['table_name'] );
		$this->db->join( 'mahasiswa', 'mahasiswa.id_pengguna = ' . $this->data['table_name'] . '.id_pengguna' );
		if ( (is_array( $cond ) && count( $cond ) > 0) OR (is_string( $cond ) && strlen( $cond ) >= 3 ) ) {
			$this->db->where($cond);
		}

		$query = $this->db->get();
		return $query->row();

	}

}