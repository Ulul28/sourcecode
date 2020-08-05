<?php
defined('BASEPATH') or exit('No direct script access allowed');

class halaman extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status_login') == "Oke")
            cek_user();
        else
            redirect('logout');
        $this->load->model('master/Mhalaman');
    }
    public function index()
    {
        $data = array(
            'page' => 'Halaman',
            'info' => 'Menampilkan dan mengelola data halaman',
            'urls' => '<li class="active">Halaman</li>',
            'data' => $this->Mhalaman->getAll(),
            'file' => 'master/halaman/index'
        );
        $this->parser->parse('layout/index', $data);
    }

    public function proses($id)
    {
        $id=$this->uri->segment(4);
        $this->db->query("UPDATE lapor SET status='2' WHERE id='$id'");
        redirect('master/halaman/lapor');
    }

    public function setuju($id)
    {
        $id=$this->uri->segment(4);
        $this->db->query("UPDATE lapor SET status='3' WHERE id='$id'");
        redirect('master/halaman/lapor');
    }

    public function lapor()
    {
        $data = array(
            'page' => 'Halaman',
            'info' => 'Menampilkan dan mengelola data halaman',
            'urls' => '<li class="active">Halaman</li>',
            'data' => $this->Mhalaman->getLapor(),
            'file' => 'master/lapor/index'
        );
        $this->parser->parse('layout/index', $data);
    }

    public function create()
    {
        $data = array(
            'page' => 'Halaman',
            'info' => 'Menambahkan data halaman',
            'urls' => '<li class="active">Halaman</li>',
            'file' => 'master/halaman/create'
        );
        $this->parser->parse('layout/index', $data);
    }
    public function store()
    {
        $judul  = $this->input->post('judul',TRUE);
        $isi    = $this->input->post('isi',TRUE);
        $link   = $this->input->post('link',TRUE);
        $this->Mhalaman->store($judul, $isi, $link);
        // $id = $this->db->insert_id();
        redirect('master/halaman/');
    }
    public function edit($encode)
    {
        $kode = decryp($encode);
        $data = array(
            'page' => 'Halaman',
            'info' => 'Edit data halaman',
            'urls' => '<li class="active">Halaman</li>',
            'data' => $this->Mhalaman->show($kode),
            'file' => 'master/halaman/edit'
        );
        $this->parser->parse('layout/index', $data);
    }
    public function update()
    {
        $id  = decryp($this->input->post('id',TRUE));
        $judul  = $this->input->post('judul',TRUE);
        $isi    = $this->input->post('isi',TRUE);
        $link   = $this->input->post('link',TRUE);
        $this->Mhalaman->edit($id, $judul, $isi, $link);
        redirect('master/halaman/');
    }
    public function destroy()
    {
        $kode = $this->uri->segment(4);
        if (!$this->Mhalaman->destroy($kode)) {
            echo 'Anda tidak bisa hapus data halaman.';
        } else {
            echo 'Anda telah menghapus data halaman.';
        }
        redirect('master/halaman');
    }
}
