<?php
class mpost extends CI_Model
{
	public $tabel = 'post'; 

	public function getAll()
	{
	  return $this->db->get($this->tabel)->result_array();
	}
	public function show($kode)
	{
		return $this->db->where('id_post', $kode)->get($this->tabel)->row_array();
	}
	public function store($link, $post)
    {
        $data = array(
            'title_post'  => $post['title'],
            'slug_post'   => slug($post['slug']),
            'desk_post'   => $post['desk'],
            'image_post'  => $link,
            'author_post' => iduser(),
            'status_post' => $post['status'],
            'kategori' => $post['kategori']
        );
        $this->db->set('tgl_post', 'NOW()', FALSE);
        $this->db->set('tgl_edit', 'NOW()', FALSE);
        return $this->db->insert('post', $data);
    }

	public function storeNoimage($post)
    {
        $data = array(
            'title_post'  => $post['title'],
            'slug_post'   => slug($post['slug']),
            'desk_post'   => $post['desk'],
            'image_post'  => null,
            'author_post' => iduser(),
            'status_post' => 1
        );
        $this->db->set('tgl_post', 'NOW()', FALSE);
        $this->db->set('tgl_edit', 'NOW()', FALSE);
        return $this->db->insert('post', $data);
    }

	public function edit($id, $title, $slug, $desk, $status, $kategori)
    {
        $data = [
                    'title_post'    => $title,
                    'slug_post'     => $slug,
                    'desk_post'     => $desk,
                    'status_post'   => $status,
                    'kategori'      => $kategori
                ];
        $this->db->set('tgl_edit', 'NOW()', FALSE);
        return $this->db->where('id_post', $id)->update('post', $data);
    }

    public function hapus($kode)
    {
        $data = $this->show($kode);
        unlink($data['image_post']);
        return $this->db->delete('post', array('id_post' => $kode));
    }

    public function upload($link, $post)
    {
        $kode = $post['id'];
        $data = array(
            'image_post'  => $link,
        );
        $this->db->set('tgl_post', 'NOW()', FALSE);
        return $this->db->update('post', $data, array('id_post' => $kode));
    }

    public function hapusimage($kode)
    {
        $data = $this->show($kode);
        unlink($data['image_post']);
        $data = array(
            'image_post'  => null,
        );
        $this->db->set('tgl_post', 'NOW()', FALSE);
        return $this->db->update('post', $data, array('id_post' => $kode));
    }
}
