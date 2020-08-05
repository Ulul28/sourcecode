<?php
class Mdownload extends CI_Model
{
	public $tabel = 'download';

	public function getAll()
	{
		return $this->db->get($this->tabel)->result_array();
	}
	public function show($kode)
	{
		return $this->db->where('id_download', $kode)->get($this->tabel)->row_array();
	}

    public function store($nama, $link)
    {
        $this->db->query("INSERT INTO download VALUES('','$nama','$link')");
    }

	public function update($post)
    {
        $kode = decryp($post['id']);
        $data = array(
            'nama'  => $post['nama']
        );
        return $this->db->update('download', $data, array('id_download' => $kode));
    }

    public function destroy($kode)
    {
        return $this->db->simple_query("DELETE FROM " . $this->tabel . " WHERE id_download='$kode'");
    }
}
