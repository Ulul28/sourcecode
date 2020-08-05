<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status_login') == "Oke")
			cek_user();
		else
			redirect('logout');
		$this->load->model('master/Mkategori');
	}
	public function index()
	{
		$data = array(
			'page' => 'Kategori',
			'info' => 'Menampilkan dan mengelola data kategori',
			'urls' => '<li class="active">kategori</li>',
			'data' => $this->Mkategori->getAll(),
			'file' => 'master/kategori/index'
		);
		$this->parser->parse('layout/index', $data);
	}
	public function create()
	{
		$data['title'] = 'Tambah Kategori';
		$this->load->view('master/kategori/create', $data);
	}
	public function store()
	{
		$param = $this->input->post(null, TRUE);
		$this->Mkategori->store($param);
		echo 'Anda telah menambahkan data kategori.';
		redirect('kategori');
	}
	public function edit()
	{
		$kode = $this->input->post('kode');
		$d['title'] = 'Edit Kategori';
		$d['data']  = $this->Mkategori->show($kode);
		$this->load->view('master/kategori/edit', $d);

	}
	public function update()
	{
		$param = $this->input->post(null, TRUE);
		$this->Mkategori->update($param);
		echo 'Anda telah meg-edit data kategori.';
		redirect('kategori');
	}
	public function destroy()
	{
		$kode = $this->uri->segment(4);
		if (!$this->Mkategori->destroy($kode)) {
			echo 'Anda tidak bisa hapus data kategori.';
		} else {
			echo 'Anda telah menghapus data kategori.';
		}
		redirect('kategori');
	}
}
