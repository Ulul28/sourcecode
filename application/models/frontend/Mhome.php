<?php
class Mhome extends CI_Model
{

    public $tabel = 'views';
    function search($keyword)
    {
        $this->db->like('nama',$keyword);
        $query  =   $this->db->get('download');
        return $query->result();
    }

    public function store($nik,$ttg,$uraian,$link)
    {
        $this->db->query("INSERT INTO lapor (nik,tentang,uraian,file,status) VALUES('$nik','$ttg','$uraian','$link','1')");
    }

    public function cari($cari)
    {
        $this->db->select('*');
        $this->db->from('post');
        $this->db->join('users', 'author_post=id_user');
        $this->db->join('kategori', 'kategori=id_kategori');
        $this->db->like(['title_post' => $cari]);
        $this->db->or_like(['desk_post' => $cari]);
        return $this->db->get()->result_array();
    }

    public function getPosts()
    {
        $this->db->select('*');
        $this->db->from('post');
        $this->db->join('users', 'author_post=id_user');
        $this->db->join('kategori', 'kategori=id_kategori');
        $this->db->where('status_post', 1);
        $this->db->where('kategori', 2);
        $this->db->order_by("id_post", "DESC");
        return $this->db->get()->result_array();
    }

    public function getartikel()
    {
        $this->db->select('*');
        $this->db->from('post');
        $this->db->join('users', 'author_post=id_user');
        $this->db->join('kategori', 'kategori=id_kategori');
        $this->db->where('status_post', 1);
        $this->db->where('kategori', 5);
        $this->db->order_by("id_post", "DESC");
        return $this->db->get()->result_array();
    }

    public function getPop()
    {
        $this->db->select('*');
        $this->db->from('post');
        $this->db->join('users', 'author_post=id_user');
        $this->db->where('status_post', 1);
        $this->db->order_by("id_post", "DESC");
        $this->db->limit("3");
        return $this->db->get()->result_array();
    }

    public function getPost()
    {
        $this->db->select('*');
        $this->db->from('post');
        $this->db->join('users', 'author_post=id_user');
        $this->db->where('status_post', 1);
        $this->db->order_by("id_post", "DESC");
        return $this->db->get()->result_array();
    }

    public function showPosts($slug)
    {
        $this->db->select('*');
        $this->db->from('post');
        $this->db->join('users', 'author_post=id_user');
        $this->db->where(['status_post' => 1, 'slug_post' => $slug]);
        return $this->db->get()->row_array();
    }

    public function showArtikel($slug)
    {
        $this->db->select('*');
        $this->db->from('post');
        $this->db->join('users', 'author_post=id_user');
        $this->db->where(['status_post' => 1, 'slug_post' => $slug]);
        return $this->db->get()->row_array();
    }

    public function gethalaman($link)
    {
        $this->db->select('*');
        $this->db->from('halaman');
        $this->db->where(['link' => $link]);
        $this->db->order_by('id_hal','asc');
        return $this->db->get()->row_array();
    }

    // public function kadis()
    // {
    //     $this->db->select('*');
    //     $this->db->from('halaman');
    //     $this->db->where(['judul' => 'Kepala Dinas']);
    //     return $this->db->get()->row_array();
    // }

    // public function vm()
    // {
    //     $this->db->select('*');
    //     $this->db->from('halaman');
    //     $this->db->where(['judul' => 'Visi Misi']);
    //     return $this->db->get()->row_array();
    // }

    public function getSlides()
    {
        $this->db->select('*');
        $this->db->from('slider');
        $this->db->order_by("id", "DESC");
        return $this->db->get()->result_array();
    }

    public function getMenu()
    {
        $this->db->select('*');
        $this->db->from('menu');
        return $this->db->get()->result_array();
    }

    public function getDownload()
    {
        $this->db->select('*');
        $this->db->from('download');
        $this->db->order_by("id_download", "DESC");
        return $this->db->get()->result_array();
    }
}
