<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('frontend/Mhome');
		$this->load->model('master/Mhalaman');
	}
	public function index()
	{
		$data = array(
			'posts'   => $this->Mhome->getPosts(),
			'pop'   => $this->Mhome->getPop(),
			'post'   => $this->Mhome->getPost(),
			'slide'   => $this->Mhome->getSlides(),
			'content' => 'frontend/layout/content'
		);
		$this->parser->parse('frontend/layout/index', $data);
	}

	public function lapor()
    {
        $data = array(
			// 'title'   => '',
			'content' => 'frontend/layout/lapor'
		);
		$this->parser->parse('frontend/layout/index', $data);
	}
	
	public function storelapor()
	{
		$nik = $this->input->post('nik', TRUE);
		$ttg = $this->input->post('ttg', TRUE);
		$uraian = $this->input->post('uraian', TRUE);
        // $nama = $this->input->post('nama', TRUE);
        if ($_FILES['gambar']['error'] !== 4) {
            $config['upload_path']   = './assets/lapor/';
            $config['file_name']     = $_FILES['gambar']['name'];
            $config['allowed_types'] = 'png|jpg|jpeg|pptx|pdf';
            $config['max_size']      = '5048';
            $this->load->library('upload');
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('gambar')) {
                echo 'Dokumen yang diupload tidak sesuai format.';
            } else {
                $media = $this->upload->data();
                $link  = './assets/lapor/' . $media['file_name'];
                $this->Mhome->store($nik,$ttg,$uraian,$link);
                echo 'Anda telah menambahkan data.';
            }
        } else {
            $this->session->set_flashdata('pesan', danger('Dokumen belum diinputkan.'));
        }
        redirect('home/lapor');
	}

	public function search()
	{
		$keyword = $this->input->post('keyword');
		$this->db->like('title',$keyword);
		$this->db->or_like('desk_post',$keyword);
		$this->db->or_like('slug_post',$keyword);
		$query['post'] = $this->db->get('post')->result();
		$this->load->view('result',$query);
	}

	public function cari()
	{
		$cari = $this->input->post('cari', TRUE);
		$data = array(
			'cari'   	=> $this->Mhome->cari($cari),
			'content' 	=> 'frontend/layout/result'
		);
		$this->parser->parse('frontend/layout/index', $data);
	}

	public function halaman($link)
	{
		$data = array(
			'data'		=> $this->Mhome->gethalaman($link),
			'content' => 'frontend/layout/halaman'
		);
		$this->parser->parse('frontend/layout/index', $data);
	}

	public function berita($slug)
	{
		$data = array(
			'title' => 'Berita',
			'link'  => '<li><a href="' . site_url() . '">Home </a></li><li class="active">/ Berita</li>',
			'data'  => $this->Mhome->showPosts($slug),
			'page'  => 'frontend/berita/show'
		);
		// $berita = $this->input->post('berita', TRUE);
		// $this->Mhome->pop($berita);
		$this->parser->parse('frontend/layout/index', $data);
	}

	public function artikel($slug)
	{
		$data = array(
			'title' => 'ARTIKEL',
			'link'  => '<li><a href="' . site_url() . '">Home </a></li><li class="active">/ Artikel</li>',
			'data'  => $this->Mhome->showArtikel($slug),
			'page'  => 'frontend/berita/artikel'
		);
		$this->parser->parse('frontend/layout/index', $data);
	}

	public function posts()
	{
		$data = array(
			'title' => 'Berita',
			'link'  => '<li><a href="' . site_url() . '">Home </a></li><li class="active">/ Berita</li>',
			'posts' => $this->Mhome->getPosts(),
			'page'  => 'frontend/berita/index'
		);
		$this->parser->parse('frontend/layout/index', $data);
	}

	public function download()
	{
		$data = array(
			'title' => 'Download',
			'link'  => '<li><a href="' . site_url() . '">Home </a></li><li class="active">/ Download</li>',
			'download' => $this->Mhome->getDownload(),

			'page'  => 'frontend/download/index'
		);
		$this->parser->parse('frontend/layout/index', $data);
	}
}
