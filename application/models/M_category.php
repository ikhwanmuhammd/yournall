<?php

class m_category extends CI_Model
{
    public function get_category()
    {
        return $this->db->get('category');
    }

    public function add_category()
    {
        $data = array(
            'category_name' => $this->input->post('category_name', TRUE)
        );
        $this->db->insert('category', $data);
    }

    public function edit_category($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->replace('category', $data);
        return TRUE;
    }

    public function delete_category($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('category');
    }
}
