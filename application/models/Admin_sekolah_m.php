<?php 

class Admin_sekolah_m extends MY_Model 
{

	public function __construct() 
	{
		parent::__construct();
		$this->data['table_name']	= 'admin_sekolah';
		$this->data['primary_key']	= 'id';
	}

	public function get_admin($cond = '')
	{
		$this->db->select('*')
			->from($this->data['table_name'])
			->join('pengguna', $this->data['table_name'] . '.id_pengguna = pengguna.id_pengguna')
			->join('sekolah', $this->data['table_name'] . '.id_sekolah = sekolah.id_sekolah');
		if ((is_array($cond) && count($cond) > 1) or (is_string($cond) && !empty($cond)))
			$this->db->where($cond);
		$query = $this->db->get();
		return $query->result();
	}

}