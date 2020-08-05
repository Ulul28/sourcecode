<?php
defined('BASEPATH') or exit('No direct script access allowed');

class slider extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status_login') == "Oke")
			cek_user();
		else
			redirect('logout');
		$this->load->model('master/Mslider');
        $this->load->library('upload');
	}

	public function index()
    {
        $data = array(
            'page' => 'Slider',
            'info' => 'Menampilkan dan mengelola data slider',
            'urls' => '<li class="active">slider</li>',
            'query' => $this->Mslider->getAll(),
            'file' => 'master/slider/index'
        );
        $this->parser->parse('layout/index', $data);
    }
    public function create()
    {
        $data['title'] = 'Tambah Data';
        $this->load->view('master/slider/create', $data);
    }
	public function store()
	{
        $config['upload_path'] = './assets/postingan/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload
 
        $this->upload->initialize($config);
        if(!empty($_FILES['filefoto']['name'])){
 
            if ($this->upload->do_upload('filefoto')){
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/postingan/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '100%';
                $config['width']= 1000;
                $config['height']= 400;
                $config['new_image']= './assets/postingan/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
 
                $gambar=$gbr['file_name'];
                $judul=$this->input->post('xjudul');
                $this->Mslider->store($judul,$gambar);
                echo "Image berhasil diupload";
            }
                      
        }else{
            echo "Image yang diupload kosong";
        }

        redirect('master/slider');
	}
	public function edit($encode)
	{
		$kode = $this->input->post('kode');
        $d['title'] = 'Edit Slider';
        $d['data']  = $this->Mslider->show($kode);
        $this->load->view('master/slider/edit', $d);

	}
	public function update()
	{
		$this->form_validation->set_rules('judul', 'judul', 'required');
        $this->form_validation->set_message('required', 'Kolom {field} wajib diisi');
        if ($this->form_validation->run() == TRUE) {
            $post = $this->input->post(null, TRUE);
            $this->Mslider->update($post);
            $result['status'] = true;
        } else {
            $result['status'] = false;
            $result['message'] = $this->form_validation->error_array();
        }
        echo json_encode($result);
        redirect('master/slider');
	}

	public function destroy()
    {
        $kode = $this->uri->segment(4);
        if (!$this->Mslider->destroy($kode)) {
            echo 'Anda tidak bisa hapus data download.';
        } else {
            echo 'Anda telah menghapus data download.';
        }
        redirect('master/slider');
    }
}
