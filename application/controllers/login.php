<?php
defined('BASEPATH') or exit('No direct script access allowed');

class login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mauth');
		$this->load->model('master/Muser');
	}
	public function index()
	{
		$data = array(
			'level' => $this->Muser->level_login(),
			'file'  => 'auth/login'
		);
		$this->load->view('auth/index', $data);
	}

	public function success()
	{
		$data = array(
			'page' => 'Dashboard',
			'info' => title(),
			'urls' => '',
			'file' => 'layout/content'
		);
		$this->parser->parse('layout/index', $data);
	}

	public function validate()
	{
		// $id = $this->input->post('id',true);
		$level = trim($this->input->post('level'));
		$username = trim($this->input->post('username'));
		$password = trim($this->input->post('password'));
		$check_user = $this->Mauth->check_user($level, $username);
		$check_pass = $this->Mauth->check_pass($level, $username, $password);
		$this->form_validation->set_rules('level', 'Level', 'required');
		$this->form_validation->set_rules('username', 'Username', 'callback_username_check[' . $check_user->num_rows() . ']');
		$this->form_validation->set_rules('password', 'Password', 'callback_password_check[' . $check_pass->num_rows() . ']');
		$this->form_validation->set_message('required', '%s tidak boleh kosong.');

		if ($this->form_validation->run() == TRUE) {
			$post  = $this->input->post(null, TRUE);
			$value = $this->Mauth->validate($post);
			// $this->Mauth->log($post);
			$this->session->set_userdata('masuk', TRUE);
			if ($this->session->userdata('masuk') == TRUE) {
				$this->session->set_userdata('status_login', 'Oke');
				$this->session->set_userdata('kode', $value['kode']);
				$this->session->set_userdata('level', $value['level']);
			} else {
				$this->session->sess_destroy();
			}
			$json['status'] = true;
		} else {
			$json['status'] = false;
			$json['pesan']  = $this->form_validation->error_array();
		}
		echo json_encode($json);
	}
	public function username_check($username, $recordCount)
	{
		if ($username == null) {
			$this->form_validation->set_message('username_check', 'Username is required.');
			return false;
		} else if ($recordCount == 0) {
			$this->form_validation->set_message('username_check', 'Username is not correct.');
			return FALSE;
		} else {

			return true;
		}
	}
	public function password_check($password, $hasil)
	{
		if ($password == null) {
			$this->form_validation->set_message('password_check', 'Password is required.');
			return false;
		} else if ($hasil == FALSE) {
			$this->form_validation->set_message('password_check', 'Password is not correct.');
			return FALSE;
		} else {

			return true;
		}
	}
	public function logout()
	{
		//$this->session->sess_destroy();
		$this->session->unset_userdata('status_login', FALSE);
		$this->session->unset_userdata('kode');
		// $url = base_url();
		redirect('login');
	}
}
