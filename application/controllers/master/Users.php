<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status_login') == "Oke")
			cek_user();
		else
			redirect('logout');
		$this->load->model('master/Muser');
	}
	public function index()
	{
		$data = array(
			'page' => 'User',
			'info' => 'Menampilkan dan mengelola data user',
			'urls' => '<li class="active">User</li>',
			'level' => $this->Muser->level(),
			'data' => $this->Muser->getAll(),
			'file' => 'master/user/index'
		);
		$this->parser->parse('layout/index', $data);
	}
	public function create()
	{
		$data['title'] = 'Tambah User';
		$data['level'] = $this->Muser->level();
		$this->load->view('master/user/create', $data);
	}
	public function store()
	{
		$param = $this->input->post(null, TRUE);
		$this->Muser->store($param);
		echo 'Anda telah menambahkan data user.';
		redirect('master/users');
	}
	public function edit()
	{
		$kode = $this->input->post('kode');
		$d['title'] = 'Edit User';
		$d['data']  = $this->Muser->show($kode);
		$d['level'] = $this->Muser->level();
		$this->load->view('master/user/edit', $d);
	}
	public function update()
	{
		$param = $this->input->post(null, TRUE);
		$this->Muser->update($param);
		echo 'Anda telah mengubah data user.';
		redirect('master/users');
	}
	public function destroy()
	{
		$kode = $this->uri->segment(4);
		if (!$this->Muser->destroy($kode)) {
			echo 'Anda tidak bisa menghapus data user.';
		} else {
			echo 'Anda telah menghapus data user.';
		}
		redirect('master/users');
	}
	public function status($kode)
	{
		$this->Muser->status($kode);
		echo 'Anda telah merubah status user.';
		redirect('master/users');
	}
}
