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

		$this->load->view('pages/administrator/templates/a_header');
		$this->load->view('pages/administrator/templates/a_sidebar');
		$this->load->view('pages/administrator/templates/a_topbar', $data);
		$this->load->view('pages/administrator/v_add_journal');
		$this->load->view('pages/administrator/templates/a_footer');
	}
}
