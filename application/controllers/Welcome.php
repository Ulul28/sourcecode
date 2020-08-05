<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status_login') == "Oke")
			cek_user();
		else
			redirect('logout');
	}
	public function index()
	{
		$data = array(
			'page' => 'Dashboard',
			'info' => title(),
			'urls' => '',
			'file' => 'layout/content'
		);
		$this->parser->parse('layout/index', $data);
	}

}
