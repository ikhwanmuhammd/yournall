<?php

class m_user extends CI_Model
{
	
    public function get_user()
    {
        return $this->db->get('user');
    }

    public function u_admin()
    {
        // $admin = array('1');
        $this->db->where_in('role_id', '1');
        return $this->db->get('user');
    }

    public function u_member()
    {
        $member = array('2');
        $this->db->where_in('type', $member);
        return $this->db->get('user');
    }

    public function get_id_user($id)
    {
        $this->db->from('user');
        $this->db->where('id', $id);
        $result = $this->db->get('');
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function add_user($data)
    {
        return $this->db->insert('user', $data);
    }

    public function edit_user($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->replace('user', $data);
        return TRUE;
    }

    public function del_user($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');
    }
}
