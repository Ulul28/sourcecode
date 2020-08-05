<?php
class Muser extends CI_Model
{
	public $tabel = 'users';
	public function getAll()
	{
		return $this->db->get($this->tabel)->result_array();
	}
	public function show($kode)
	{
		return $this->db->where('id_user', $kode)->get($this->tabel)->row_array();
	}
	public function store($param)
	{
		$data = [
			'nama_user'   => $param['nama'],
			'username'    => $param['user'],
			'password'	  => md5($param['pass']),
			'level_user'  => $param['level'],
			'status_user' => 1
		];
		return $this->db->insert($this->tabel, $data);
	}
	public function update($param)
	{
		if (empty($param['pass'])) {
			$data = array(
				'nama_user'  => $param['nama'],
				'username'   => $param['user'],
				'level_user' => $param['level']
			);
		} else {
			$data = array(
				'nama_user'  => $param['nama'],
				'username'   => $param['user'],
				'password'	 => md5($param['pass']),
				'level_user' => $param['level']
			);
		}
		return $this->db->where('id_user', $param['kode'])->update($this->tabel, $data);
	}
	public function destroy($kode)
	{
		return $this->db->simple_query("DELETE FROM " . $this->tabel . " WHERE id_user='$kode'");
	}
	public function status($kode)
	{
		$data = $this->show($kode);
		if ($data['status_user'] == '1') {
			$this->db->query("UPDATE " . $this->tabel . " SET status_user='0' WHERE id_user='$kode'");
		} else {
			$this->db->query("UPDATE " . $this->tabel . " SET status_user='1' WHERE id_user='$kode'");
		}
	}
	public function level()
	{
		$data = array(
			'1' => 'Administrator',
			'2' => 'Users'
		);
		return $data;
	}
	public function level_login()
	{
		$data = array(
			'1' => 'Administrator',
			'2' => 'Users'
		);
		return $data;
	}
}
