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

	public function add()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['category'] = $this->m_journal->get_category()->result();

		$this->load->view('pages/administrator/templates/a_header');
		$this->load->view('pages/administrator/templates/a_sidebar');
		$this->load->view('pages/administrator/templates/a_topbar', $data);
		$this->load->view('pages/administrator/v_add_journal');
		$this->load->view('pages/administrator/templates/a_footer');
	}

	public function save()
	{
		$issn 			= $this->input->post('issn');
		$title 			= $this->input->post('title');
		$type 			= $this->input->post('type');
		$category 		= $this->input->post('category');
		$year 			= $this->input->post('year');
		$file 			= $_FILES['file'];
		if ($file = '') {
		} else {
			$config['upload_path']		= './uploads';
			$config['allowed_types']	= 'pdf';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('file')) {
				$this->load->view('pages/administrator/v_add_journal');
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Format journal must pdf.</div>');
			} else {
				$upload_journal = $this->upload->data();
				// print_r($upload_journal);
				$data = array(
					'filename' => $upload_journal['file_name']
				);
			}
		}

		$data = array(
			'issn'			=> $issn,
			'title'			=> $title,
			'type'			=> $type,
			'category'		=> $category,
			'year'			=> $year,
			'file'			=> $file

		);
		$this->m_journal->add_journal($data);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Congratulation! Journal has uploaded.</div>');
		redirect('administrator/journal');
	}

	public function delete($id)
	{
		$this->m_journal->del_journal($id);
		$this->session->set_flashdata('flash', 'Deleted');
		redirect('administrator/journal');
	}
}
