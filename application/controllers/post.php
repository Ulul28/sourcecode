<?php
defined('BASEPATH') or exit('No direct script access allowed');

class post extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status_login') == "Oke")
			cek_user();
		else
			redirect('logout');
		$this->load->model('Mpost');
        $this->load->model('master/Mkategori');
	}


	public function index()
	{
		$data = array(
			'page' => 'Postingan',
			'info' => 'Menampilkan dan mengelola data postingan',
			'urls' => '<li class="active">post</li>',
			'data' => $this->Mpost->getAll(),
			'file' => 'post/index'
		);
		$this->parser->parse('layout/index', $data);
	}

	public function create()
	{
		$data = array(
			'page' => 'Postingan',
			'info' => 'Menambahkan data postingan',
			'urls' => '<li class="active">post</li>',
            'kat' => $this->Mkategori->getAll(),
			'file' => 'post/create'
        );
        $this->parser->parse('layout/index', $data);
	}
	public function store()
	{
		$this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('slug', 'slug', 'required');
        $this->form_validation->set_rules('desk', 'deskripsi', 'required');
        $this->form_validation->set_message('required', 'Kolom {field} wajib diisi');
        if ($this->form_validation->run() == TRUE) {
            if ($_FILES['gambar']['error'] != 0) {
                // $result['status'] = false;
                // $result['message'] = array("gambar" => "Please choose a file to upload.");
                $post = $this->input->post(null, TRUE);
                $this->Mpost->storeNoimage($post);
                $result['status'] = true;
            } else {
                $config['upload_path']   = './assets/postingan/';
                $config['allowed_types'] = 'jpg|jpeg|png|pdf|docx|xlsx|doc';
                $config['max_size']      = '2048';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('gambar')) {
                    $result['status'] = false;
                    $result['message'] = array("gambar" => "Please select only JPG, PNG file.");
                } else {
                    $media = $this->upload->data();
                    $link  = './assets/postingan/' . $media['file_name'];
                    $post  = $this->input->post(null, TRUE);
                    $this->Mpost->store($link, $post);
                    $result['status'] = true;
                }
            }
        } else {
            $result['status'] = false;
            $result['message'] = $this->form_validation->error_array();
        }
        redirect('post');
	}
	public function edit($encode)
	{
		$kode = decryp($encode);
        $data = array(
            'page' => 'Postingan',
			'info' => 'Edit data postingan',
			'urls' => '<li class="active">post</li>',
			'data' => $this->Mpost->show($kode),
            'kat' => $this->Mkategori->getAll(),
            'file' => 'post/edit'
        );
        $this->parser->parse('layout/index', $data);

	}
	public function update()
	{
        $id  = decryp($this->input->post('id',TRUE));
		$title=$this->input->post('title',null);
        $slug=$this->input->post('slug',null);
        $desk=$this->input->post('desk',null);
        $status=$this->input->post('status',null);
        $kategori=$this->input->post('kategori',null);
        $this->Mpost->edit($id, $title, $slug, $desk, $status, $kategori);
        redirect('post');
	}
	public function hapus($encode)
    {
        $kode = decryp($encode);
        $this->Mpost->hapus($kode);
        redirect('post');
    }

    public function modal()
    {
        if (!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        } else {
            $kode = $this->input->post('kode');
            $d['data'] = $this->Mpost->show($kode);
            $this->load->view('post/upload', $d);
        }
    }

    public function upload()
    {
        if ($_FILES['gambar']['error'] != 0) {
            $result['status'] = false;
            $result['message'] = array("gambar" => "Please choose a file to upload.");
        } else {
            $config['upload_path']   = './assets/postingan/';
            $config['allowed_types'] = 'jpg|jpeg|png|pdf';
            $config['max_size']      = '2048';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('gambar')) {
                $result['status'] = false;
                $result['message'] = array("gambar" => "Please select only JPG, PNG file.");
            } else {
                $media = $this->upload->data();
                $link  = './assets/postingan/' . $media['file_name'];
                $post  = $this->input->post(null, TRUE);
                $this->Mpost->upload($link, $post);
                $result['status'] = true;
            }
        }
        echo json_encode($result);
        redirect('post');
    }

    public function viewImage()
    {
        if (!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        } else {
            $kode = $this->input->post('kode');
            $d['data'] = $this->Mpost->show($kode);
            $this->load->view('post/viewImage', $d);
        }
    }

    public function hapusimage($kode)
    {
        $this->Mpost->hapusimage($kode);
        redirect('post');
    }
}
