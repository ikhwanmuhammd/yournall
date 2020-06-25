<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('pages/member/v_contact');
        $this->load->view('templates/footer');
    }

    public function send_mail()
    {

        $name       = $this->input->post('name');
        $from_email = $this->input->post('email');
        $to_email   = 'yournallindonesia@gmail.com';
        $subject    = $this->input->post('subject');
        $message    = $this->input->post('message');

        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'yournallindonesia@gmail.com',
            'smtp_pass' => 'yournallindonesia123',
            'mailtype'  => 'html',
            'charset'   => 'iso-8859-1'
        );

        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");

        $this->email->from($from_email, $name);
        $this->email->to($to_email);
        $this->email->subject($subject);
        $this->email->message($message);

        //Send mail 
        if ($this->email->send()) {
            $this->session->set_flashdata("notif", "Success send Email.");
        } else {
            $this->session->set_flashdata("notif", "Failed send Email.");
            $this->load->view('member/contact');
        }
    }
}
