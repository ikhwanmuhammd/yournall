<?php 

class m_journal extends CI_Model{
	public function get_journal()
	{
		return $this->db->get('journal');
	}
}