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

    public function add()
    {

        $this->m_journal->add_category();
        $this->session->set_flashdata('flash', 'Added');
        redirect('administrator/category');
    }

    public function edit()
    {

        $this->m_journal->edit_category($data, $id);
        $this->session->set_flashdata('flash', 'Edited');
        redirect('administrator/category');
    }

    public function delete($id)
    {

        $this->m_journal->delete_category($id);
        $this->session->set_flashdata('flash', 'Deleted');
        redirect('administrator/category');
    }
}
