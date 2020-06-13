<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Journal_international extends CI_Controller
{

	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('pages/member/v_jinter');
		$this->load->view('templates/footer');
	}
}
