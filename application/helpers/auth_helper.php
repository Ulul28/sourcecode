<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('cek_user')) {
	function cek_user()
	{
		$CI = &get_instance();
		if ($CI->session->userdata('status_login') != 'Oke') {
			redirect('logout');
		}
	}
}
if (!function_exists('users')) {
	function users()
	{
		$CI     = &get_instance();
		$kode   = $CI->session->userdata('kode');
		$result = $CI->db->where('id_user', $kode)->get('tbl_user')->row_array();
		$nama   = $result['nama_lengkap'];
		return $nama;
	}
}
if (!function_exists('iduser')) {
	function iduser()
	{
		$CI   = &get_instance();
		$kode = $CI->session->userdata('kode');
		return $kode;
	}
}
