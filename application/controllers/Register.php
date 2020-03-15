<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index(){
		$this->load->view('templates/header');
		$this->load->view('administrator/v_register');
		$this->load->view('templates/footer');
	}
}
