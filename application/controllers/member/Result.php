<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Result extends CI_Controller
{

    // public function index()
    // {
    //     $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    //     $data['journal'] = $this->m_result->get_journal()->result();

    //     $this->load->view('templates/header', $data);
    //     $this->load->view('pages/member/v_result', $data);
    //     $this->load->view('templates/footer');
    // }

    public function international()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['journal_i'] = $this->m_result->journal_i()->result();

        $this->load->view('templates/header', $data);
        $this->load->view('pages/member/v_result_i', $data);
        $this->load->view('templates/footer');
    }

    public function national()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['journal_n'] = $this->m_result->journal_n()->result();

        $this->load->view('templates/header', $data);
        $this->load->view('pages/member/v_result_n', $data);
        $this->load->view('templates/footer');
    }
}
