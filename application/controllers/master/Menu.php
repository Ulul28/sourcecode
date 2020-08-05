<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status_login') == "Oke")
			cek_user();
		else
			redirect('logout');
		$this->load->model('master/Mmenu');
	}
	public function index()
	{
		$data = array(
			'page' => 'Menu',
			'info' => 'Menampilkan dan mengelola tampilan menu halaman depan',
			'urls' => '<li class="active">Menu</li>',
			'data' => $this->Mmenu->getAll(),
			'file' => 'master/menu/index'
		);
		$this->parser->parse('layout/index', $data);
	}
	public function create()
	{
		$data['title'] = 'Tambah Menu';
		$this->load->view('master/menu/create', $data);
	}
	public function store()
	{
		$param = $this->input->post(null, TRUE);
		$this->Mmenu->store($param);
		echo 'Anda telah menambahkan data menu.';
		redirect('master/menu');
	}
	public function edit()
	{
		$kode = $this->input->post('kode');
		$d['title'] = 'Edit Kategori';
		$d['data']  = $this->Mmenu->show($kode);
		$this->load->view('master/menu/edit', $d);

	}
	public function update()
	{
		$param = $this->input->post(null, TRUE);
		$this->Mmenu->update($param);
		echo 'Anda telah meg-edit data menu.';
		redirect('master/menu');
	}
	public function destroy()
	{
		$kode = $this->uri->segment(4);
		if (!$this->Mmenu->destroy($kode)) {
			echo 'Anda tidak bisa hapus data menu.';
		} else {
			echo 'Anda telah menghapus data menu.';
		}
		redirect('menu');
	}
}
