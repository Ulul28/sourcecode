<?php
class Mauth extends CI_Model
{
	public function check_user($level, $username)
	{
		if ($level == '1')
			return $this->db->get_where('users', ['username' => $username]);
		else
			return $this->db->get_where('users', ['username' => $username]);
	}
	public function check_pass($level, $username, $password)
	{
		if ($level == '1')
			return $this->db->get_where('users', ['username' => $username, 'password' => md5($password)]);
		else
			return $this->db->get_where('users', ['username' => $username, 'password' => md5($password)]);
	}

	public function validate($post)
	{
		// $id 	  = $post['id_user'];
		$level 	  = $post['level'];
		$username = $post['username'];
		$password = $post['password'];
			return $this->db->select('id_user AS kode,level_user AS level')->get_where('users', ['username' => $username, 'password' => md5($password), 'level_user' => $level])->row_array();
	}
}
