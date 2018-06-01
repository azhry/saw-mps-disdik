<?php 

class Siswa_m extends MY_Model {

	public function __construct() 
	{
		parent::__construct();
		$this->data['table_name']	= 'siswa';
		$this->data['primary_key']	= 'id_siswa';
	}

	public function get_siswa($cond = '') 
	{
		$this->db->select('*');
		$this->db->from($this->data['table_name']);
		$this->db->join('sekolah', $this->data['table_name'] . '.id_sekolah = sekolah.id_sekolah');

		if (!empty($cond) and (is_string($cond) or is_array($cond)))
			$this->db->where($cond);

		$query = $this->db->get();
		return $query->result();
	}

}