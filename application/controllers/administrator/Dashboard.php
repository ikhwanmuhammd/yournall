<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('pages/administrator/templates/a_sidebar');
		$this->load->view('pages/administrator/templates/a_header', $data);
		$this->load->view('pages/administrator/v_dashboard');
		$this->load->view('pages/administrator/templates/a_footer');
	}
}
