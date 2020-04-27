<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category extends CI_Controller
{

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['category'] = $this->m_journal->get_category()->result();

        $this->load->view('pages/administrator/templates/a_header');
        $this->load->view('pages/administrator/templates/a_sidebar');
        $this->load->view('pages/administrator/templates/a_topbar', $data);
        $this->load->view('pages/administrator/v_category', $data);
        $this->load->view('pages/administrator/templates/a_footer');
    }
}
