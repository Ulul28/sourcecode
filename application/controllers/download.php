<?php
defined('BASEPATH') or exit('No direct script access allowed');

class download extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status_login') == "Oke")
			cek_user();
		else
			redirect('logout');
		$this->load->model('Mdownload');
	}


	public function index()
    {
        $data = array(
            'page' => 'Download',
            'info' => 'Menampilkan dan mengelola data download',
            'urls' => '<li class="active">kategori</li>',
            'query' => $this->Mdownload->getAll(),
            'file' => 'download/index'
        );
        $this->parser->parse('layout/index', $data);
    }
    public function create()
    {
        $data['title'] = 'Tambah Data';
        $this->load->view('download/create', $data);
    }
	public function store()
	{
        $nama = $this->input->post('nama', TRUE);
        if ($_FILES['gambar']['error'] !== 4) {
            $config['upload_path']   = './assets/downloads/';
            $config['file_name']     = $_FILES['gambar']['name'];
            $config['allowed_types'] = 'docx|xlsx|doc|pptx|pdf';
            $config['max_size']      = '5048';
            $this->load->library('upload');
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('gambar')) {
                echo 'Dokumen yang diupload tidak sesuai format.';
            } else {
                $media = $this->upload->data();
                $link  = './assets/downloads/' . $media['file_name'];
                $this->Mdownload->store($nama, $link);
                echo 'Anda telah menambahkan data.';
            }
        } else {
            $this->session->set_flashdata('pesan', danger('Dokumen belum diinputkan.'));
        }
        redirect('download');
	}
	public function edit($encode)
	{
		$kode = decryp($encode);
        $data = array(
            'page' => 'Download',
			'info' => 'Edit data download',
			'urls' => '<li class="active">download</li>',
			'data' => $this->Mdownload->show($kode),
            'file' => 'download/edit'
        );
        $this->parser->parse('layout/index', $data);

	}
	public function update()
	{
		$this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_message('required', 'Kolom {field} wajib diisi');
        if ($this->form_validation->run() == TRUE) {
            $post = $this->input->post(null, TRUE);
            $this->Mdownload->update($post);
            $result['status'] = true;
        } else {
            $result['status'] = false;
            $result['message'] = $this->form_validation->error_array();
        }
        echo json_encode($result);
        redirect('download');
	}

	public function destroy()
    {
        $kode = $this->uri->segment(3);
        if (!$this->Mdownload->destroy($kode)) {
            echo 'Anda tidak bisa hapus data download.';
        } else {
            echo 'Anda telah menghapus data download.';
        }
        redirect('download');
    }

    public function getFile($id)
    {
        $data = $this->db->get_where('download',['id_download'=>$id])->row();
        force_download('assets/download/'.$data->file,NULL);
    }
}
