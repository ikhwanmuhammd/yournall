<?php

class m_journal extends CI_Model
{
	public function get_journal()
	{
		return $this->db->get('journal');
	}

	public function get_category()
	{
		return $this->db->get('category');
	}

	public function add_journal($data)
	{
		return $this->db->insert('journal', $data);
	}

	public function del_journal($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('journal');
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
		$id = $this->input->post('id');
		$data = array(
			'id' => $this->input->post('id', TRUE),
			'category_name' => $this->input->post('category_name', TRUE)
		);

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
