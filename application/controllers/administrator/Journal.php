<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Journal extends CI_Controller
{

	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['journal'] = $this->m_journal->get_journal()->result();


		$this->load->view('pages/administrator/templates/a_header');
		$this->load->view('pages/administrator/templates/a_sidebar');
		$this->load->view('pages/administrator/templates/a_topbar', $data);
		$this->load->view('pages/administrator/v_journal', $data);
		$this->load->view('pages/administrator/templates/a_footer');
	}

	public function journal_int()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['journal'] = $this->m_journal->journal_i()->result();

		$this->load->view('pages/administrator/templates/a_header');
		$this->load->view('pages/administrator/templates/a_sidebar');
		$this->load->view('pages/administrator/templates/a_topbar', $data);
		$this->load->view('pages/administrator/v_journal', $data);
		$this->load->view('pages/administrator/templates/a_footer');
	}

	public function journal_nat()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['journal'] = $this->m_journal->journal_n()->result();

		$this->load->view('pages/administrator/templates/a_header');
		$this->load->view('pages/administrator/templates/a_sidebar');
		$this->load->view('pages/administrator/templates/a_topbar', $data);
		$this->load->view('pages/administrator/v_journal', $data);
		$this->load->view('pages/administrator/templates/a_footer');
	}

	public function add()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['category'] = $this->m_category->get_category()->result();

		$this->load->view('pages/administrator/templates/a_header');
		$this->load->view('pages/administrator/templates/a_sidebar');
		$this->load->view('pages/administrator/templates/a_topbar', $data);
		$this->load->view('pages/administrator/v_add_journal');
		$this->load->view('pages/administrator/templates/a_footer');
	}

	public function edit($id)
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['category'] = $this->m_category->get_category()->result();
		$data['journal'] = $this->m_journal->get_id_journal($id);

		$this->load->view('pages/administrator/templates/a_header');
		$this->load->view('pages/administrator/templates/a_sidebar');
		$this->load->view('pages/administrator/templates/a_topbar', $data);
		$this->load->view('pages/administrator/v_edit_journal', $data);
		$this->load->view('pages/administrator/templates/a_footer');
	}

	public function save()
	{
		$user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$issn 			= $this->input->post('issn');
		$title 			= $this->input->post('title');
		$type 			= $this->input->post('type');
		$category 		= $this->input->post('category');
		$year 			= $this->input->post('year');
		$upload_by		= $user->name;
		$file 			= $_FILES['file'];
		if ($file = '') {
		} else {
			$config['upload_path']		= './uploads/journal/';
			$config['allowed_types']	= 'pdf';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('file')) {
				$this->load->view('pages/administrator/v_add_journal');
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Format journal must pdf.</div>');
			} else {
				$file = $this->upload->data('file_name');
				$this->session->set_flashdata('flash', 'Uploaded');
			}
		}

		$data = array(
			'issn'			=> $issn,
			'title'			=> $title,
			'type'			=> $type,
			'category'		=> $category,
			'year'			=> $year,
			'upload_by'		=> $upload_by,
			'file'			=> $file

		);
		$this->m_journal->add_journal($data);
		$this->session->set_flashdata('flash', 'Saved');
		redirect('administrator/journal');
	}

	public function update()
	{
		$id 	= $this->input->post('id');
		$file	= $_FILES['file'];
		if ($file = '') {
			$data = $this->m_journal->get_id_journal($id);
			$file = $data->file;
		} else {
			$config['upload_path']		= './uploads/journal/';
			$config['allowed_types']	= 'pdf';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('file')) {
			} else {
				$file = $this->upload->data('file_name');
			}
		}
		$data = array(
			'id' 		=> $this->input->post('id', TRUE),
			'issn'		=> $this->input->post('issn', TRUE),
			'title'		=> $this->input->post('title', TRUE),
			'type'		=> $this->input->post('type', TRUE),
			'category'	=> $this->input->post('category', TRUE),
			'year'		=> $this->input->post('year', TRUE),
			'file'		=> $file
		);

		$this->m_journal->edit_journal($id, $data);
		$this->session->set_flashdata('flash', 'Updated');
		redirect('administrator/journal');
	}

	public function delete($id)
	{
		$data = $this->m_journal->get_id_journal($id);
		$path = './uploads/journal/';
		@unlink($path . $data->file);

		$this->m_journal->del_journal($id);
		$this->session->set_flashdata('flash', 'Deleted');
		redirect('administrator/journal');
	}
}
