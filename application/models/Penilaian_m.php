<?php 

class Penilaian_m extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->data['table_name']	= 'penilaian';
		$this->data['primary_key']	= 'id_nilai';
	}

	public function get_penilaian_sekolah($id_sekolah)
	{
		$query = $this->db->query('SELECT * FROM kriteria LEFT JOIN penilaian ON kriteria.id_kriteria = penilaian.id_kriteria AND penilaian.id_sekolah = ' . $id_sekolah . ' LEFT JOIN bobot ON penilaian.id_bobot = bobot.id_bobot');
		return $query->result();
	}
}