<?php
class Mkategori extends CI_Model
{
	public $tabel = 'kategori';
	public function getAll()
	{
		return $this->db->get($this->tabel)->result_array();
	}
	public function show($kode)
	{
		return $this->db->where('id_kategori', $kode)->get($this->tabel)->row_array();
	}
	public function store($param)
	{
		$data = [
			'title_kategori'  	=> $param['title'],
			'slug_kategori' 	=> $param['slug']
		];
		return $this->db->insert($this->tabel, $data);
	}
	public function update($param)
	{
			$data = [
				'title_kategori'  	=> $param['title'],
				'slug_kategori' 	=> $param['slug']
			];
		return $this->db->where('id_kategori', $param['kode'])->update($this->tabel, $data);
	}
	public function destroy($kode)
	{
		return $this->db->simple_query("DELETE FROM " . $this->tabel . " WHERE id_kategori='$kode'");
	}
}
