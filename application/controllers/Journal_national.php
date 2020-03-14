<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Journal_national extends CI_Controller {

	public function index(){
		$this->load->view('templates/header');
		$this->load->view('pages/v_jnat');
		$this->load->view('templates/footer');
	}
}
