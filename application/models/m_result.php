<?php

class m_result extends CI_Model
{
	
    public function get_journal()
    {
        return $this->db->get('journal');
    }

    public function journal_i()
    {
        $international = array('International');
        $this->db->where_in('type', $international);
        return $this->db->get('journal');
    }

    public function journal_n()
    {
        $national = array('National');
        $this->db->where_in('type', $national);
        return $this->db->get('journal');
    }

    public function get_id_journal($id)
    {
        $this->db->from('journal');
        $this->db->where('id', $id);
        $result = $this->db->get('');
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }
}
