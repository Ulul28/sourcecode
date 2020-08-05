<?php
class Mterkait extends CI_Model
{
	public $tabel = 'terkait';

	public function getAll()
	{
		return $this->db->get($this->tabel)->result_array();
	}
	public function show($kode)
	{
		return $this->db->where('id', $kode)->get($this->tabel)->row_array();
	}

    public function store($judul, $gambar, $link)
    {
        return $this->db->query("INSERT INTO slider VALUES('','$judul','$gambar','$link')");
    }

    public function destroy($kode)
    {
        return $this->db->simple_query("DELETE FROM " . $this->tabel . " WHERE id='$kode'");
    }
}
