<?php
class Mmenu extends CI_Model
{
	public $tabel = 'menu';
	public function getAll()
	{
		return $this->db->get($this->tabel)->result_array();
	}
	public function show($kode)
	{
		return $this->db->where('id', $kode)->get($this->tabel)->row_array();
	}
	public function store($param)
	{
		$data = [
			'judul_menu'  	=> $param['judul'],
			'link' 	=> $param['link'],
			// 'icon' 	=> $param['icon'],
			'is_main_menu' 	=> $param['is_main_menu']
		];
		//$this->db->set('created_at', 'NOW()', FALSE);
		return $this->db->insert($this->tabel, $data);
	}
	public function update($param)
	{
			$data = [
				'judul_menu'  	=> $param['judul'],
				'link' 	=> $param['link'],
				// 'icon' 	=> $param['icon'],
				'is_main_menu' 	=> $param['is_main_menu']
			];
		return $this->db->where('id', $param['kode'])->update($this->tabel, $data);
	}
	public function destroy($kode)
	{
		return $this->db->simple_query("DELETE FROM " . $this->tabel . " WHERE id='$kode'");
	}
}
