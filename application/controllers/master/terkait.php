<?php
defined('BASEPATH') or exit('No direct script access allowed');

class terkait extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status_login') == "Oke")
			cek_user();
		else
			redirect('logout');
		$this->load->model('master/Mterkait');
        $this->load->library('upload');
	}


	public function index()
    {
        $data = array(
            'page' => 'Instansi Terkait',
            'info' => 'Menampilkan dan mengelola data galeri',
            'urls' => '<li class="active">terkait</li>',
            'query' => $this->Mterkait->getAll(),
            'file' => 'master/terkait/index'
        );
        $this->parser->parse('layout/index', $data);
    }
    public function create()
    {
        $data['title'] = 'Tambah Data';
        $this->load->view('master/terkait/create', $data);
    }
	public function store()
	{
        $config['upload_path'] = './assets/terkait/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload
 
        $this->upload->initialize($config);
        if(!empty($_FILES['filefoto']['name'])){
 
            if ($this->upload->do_upload('filefoto')){
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/terkait/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '100%';
                $config['width']= 1000;
                $config['height']= 400;
                $config['new_image']= './assets/terkait/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
 
                $gambar=$gbr['file_name'];
                $judul=$this->input->post('xjudul');
                $link=$this->input->post('xlink');
                $this->Mterkait->store($judul,$gambar,$link);
                echo "Image berhasil diupload";
            }
                      
        }else{
            echo "Image yang diupload kosong";
        }

        redirect('master/terkait');
	}
	public function edit($encode)
	{
		$kode = $this->input->post('kode');
        $d['title'] = 'Edit Data';
        $d['data']  = $this->Mterkait->show($kode);
        $this->load->view('master/galeri/edit', $d);

	}
	public function update()
	{
		$this->form_validation->set_rules('judul', 'judul', 'required');
        $this->form_validation->set_rules('link', 'link', 'required');
        $this->form_validation->set_message('required', 'Kolom {field} wajib diisi');
        if ($this->form_validation->run() == TRUE) {
            $post = $this->input->post(null, TRUE);
            $this->Mterkait->update($post);
            $result['status'] = true;
        } else {
            $result['status'] = false;
            $result['message'] = $this->form_validation->error_array();
        }
        echo json_encode($result);
        redirect('master/terkait');
	}

	public function destroy()
    {
        $kode = $this->uri->segment(3);
        if (!$this->Mterkait->destroy($kode)) {
            echo 'Anda tidak bisa hapus data download.';
        } else {
            echo 'Anda telah menghapus data download.';
        }
        redirect('master/galeri');
    }
}
