<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct() {
		parent:: __construct();
		$this->load->model('User_model');
		$this->load->library('pagination');
	}

	public function index()	{
		$config['base_url'] 	= base_url();
		$config['total_rows'] 	= 200;
		$config['per_page'] 	= 20;
		$this->pagination->initialize($config);
		$data['links'] 			= $this->pagination->create_links();
		$data['user_info'] 		= $this->User_model->getAllUsers();
		$this->load->view('main', $data);
	}

	public function updateColumn() {
		print_r($this->input->post());
	}

	public function getForm() {
		$id = $this->input->post('id');
		$q  = $this->db->get_where('user', array('id' => $id));
		$data['id'] 	= $id;
		$data['result'] = $q->row();
		$this->load->view('frmUpdate', $data);
	}

	public function submittedData() {
		$fn = $this->input->post('fn');
		$ln = $this->input->post('ln');
		$un = $this->input->post('un');
		$id = $this->input->post('id');

		$data = array(
		        'firstname' => $fn,
		        'lastName' 	=> $ln,
		        'username' 	=> $un
		);

		$this->db->where('id', $id);
		$this->db->update('user', $data);

		$data['user_info'] 		= $this->User_model->getAllUsers();
		$this->load->view('updatedDiv', $data);
	}
}