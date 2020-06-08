<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['users'] = $this->m_user->get_user()->result();

		$this->load->view('pages/administrator/templates/a_header');
		$this->load->view('pages/administrator/templates/a_sidebar');
		$this->load->view('pages/administrator/templates/a_topbar', $data);
		$this->load->view('pages/administrator/v_user', $data);
		$this->load->view('pages/administrator/templates/a_footer');
	}

	public function admin()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['admin'] = $this->m_user->u_admin()->result();

		$this->load->view('pages/administrator/templates/a_header');
		$this->load->view('pages/administrator/templates/a_sidebar');
		$this->load->view('pages/administrator/templates/a_topbar', $data);
		$this->load->view('pages/administrator/v_user', $data);
		$this->load->view('pages/administrator/templates/a_footer');
	}

	public function member()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['member'] = $this->m_user->u_member()->result();

		$this->load->view('pages/administrator/templates/a_header');
		$this->load->view('pages/administrator/templates/a_sidebar');
		$this->load->view('pages/administrator/templates/a_topbar', $data);
		$this->load->view('pages/administrator/v_user', $data);
		$this->load->view('pages/administrator/templates/a_footer');
	}

	public function add()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		// $data['category'] = $this->m_category->get_category()->result();

		$this->load->view('pages/administrator/templates/a_header');
		$this->load->view('pages/administrator/templates/a_sidebar');
		$this->load->view('pages/administrator/templates/a_topbar', $data);
		$this->load->view('pages/administrator/v_add_user');
		$this->load->view('pages/administrator/templates/a_footer');
	}

	public function edit($id)
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		// $data['category'] = $this->m_category->get_category()->result();
		// $data['journal'] = $this->m_journal->get_id_journal($id);

		$this->load->view('pages/administrator/templates/a_header');
		$this->load->view('pages/administrator/templates/a_sidebar');
		$this->load->view('pages/administrator/templates/a_topbar', $data);
		$this->load->view('pages/administrator/v_edit_user', $data);
		$this->load->view('pages/administrator/templates/a_footer');
	}

	public function delete($id)
	{
		$this->m_user->del_user($id);
		$this->session->set_flashdata('flash', 'Deleted');
		redirect('administrator/user');
	}
}
