<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct() {
		parent:: __construct();
		$this->load->model('User_model');
	}

	public function index()	{
		$data['user_info'] = $this->User_model->getAllUsers();
		$this->load->view('main', $data);
	}
}