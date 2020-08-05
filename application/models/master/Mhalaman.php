<?php
class Mhalaman extends CI_Model
{
	public $tabel = 'halaman';
	public $lapor = 'lapor';
	public function getAll()
	{
		return $this->db->get($this->tabel)->result_array();
	}

	public function getLapor()
	{
		return $this->db->get($this->lapor)->result_array();
	}

	public function show($kode)
	{
		return $this->db->where('id_hal', $kode)->get($this->tabel)->row_array();
	}
	public function store($judul, $isi, $link)
	{
		return $this->db->query("INSERT INTO halaman VALUES('','$judul','$isi','$link')");
	}
	public function edit($id, $judul, $isi, $link)
	{
		$data = [
			'judul' => $judul,
			'isi' => $isi,
			'link' => $link
		];
		return $this->db->where('id_hal', $id)->update('halaman', $data);

	}
	public function destroy($kode)
	{
		return $this->db->simple_query("DELETE FROM " . $this->tabel . " WHERE id_hal='$kode'");
	}
}
