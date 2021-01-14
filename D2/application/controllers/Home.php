<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('Home_model');
        $this->load->helper('url');
	}

	public function index()
	{
		$data['user'] = $this->Home_model->get_data_user()->result();
		$this->load->view('home', $data);
	}

	public function add_user()
	{
		$data = $this->input->post();
		$data_input = array(
			'usr_name' => $data['usr_name'],
			'usr_username' => $data['usr_username'],
			'usr_password' => $data['usr_password'],
		);
		$this->Home_model->input('user', $data_input);
		redirect('');
	}

	public function delete_user($id)
	{
		$where = array('usr_id' => $id);
		$this->Home_model->delete('user', $where);
		redirect('');
	}

	public function edit($id)
	{
		$where = array('usr_id' => $id);
		$data['user'] = $this->Home_model->get_one($where,'user')->result();
		$this->load->view('edit',$data);
	}

	public function edit_user()
	{
		$data = $this->input->post();

		$data_edit = array(
			'usr_name' => $data['usr_name'],
			'usr_username' => $data['usr_username'],
			'usr_password' => $data['usr_password'],
		);

		$where = array('usr_id' => $data['usr_id']);

		$this->Home_model->update('user', $data_edit, $where);
		redirect('');
	}
}
