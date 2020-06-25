<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Result extends CI_Controller
{

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['journal'] = $this->m_result->get_journal()->result();

        $this->load->view('templates/header', $data);
        $this->load->view('pages/member/v_result', $data);
        $this->load->view('templates/footer');
    }
}
