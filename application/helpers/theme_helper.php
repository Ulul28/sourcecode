<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('theme')) {
	function theme()
	{
		$path = base_url() . 'assets/';
		return $path;
	}
}

if (!function_exists('frontend')) {
	function frontend()
	{
		$path = base_url() . 'frontend/';
		return $path;
	}
}

if (!function_exists('title')) {
	function title()
	{
		return $title = "PUPR Kabupaten Padang Pariaman";
	}
}

if (!function_exists('cek_user')) {
	function cek_user()
	{
		$CI = &get_instance();
		if ($CI->session->userdata('status_login') != 'Oke') {
			redirect('logout');
		}
	}
}

if (!function_exists('iduser')) {
	function iduser()
	{
		$CI = &get_instance();
		$kode = $CI->session->userdata('kode');
		return $kode;
	}
}
if (!function_exists('level')) {
	function level()
	{
		$CI = &get_instance();
		$level = $CI->session->userdata('level');
		return $level;
	}
}

if (!function_exists('username')) {
	function username()
	{
		$CI = &get_instance();
		if (level() == '1' || level() == '2') {
			$value = $CI->db->where('id_user', iduser())->get('users')->row_array();
			return $value['nama_user'];
		}
	}
}

if (!function_exists('username')) {
	function iduser()
	{
		$CI = &get_instance();
		if (level() == '1' || level() == '2') {
			$value = $CI->db->where('id_user', iduser())->get('users')->row_array();
			return $value['id_user'];
		}
	}
}

if (!function_exists('role')) {
	function role()
	{
		if (level() == '1') {
			return $value = 'Administrator';
		} else if (level() == '2') {
			return $value = 'User';
		}
	}
}

if (!function_exists('foto')) {
	function foto()
	{
		return $value = theme() . 'dist/img/user2-160x160.jpg';
	}
}

// if (!function_exists('rupiah')) {
// 	function rupiah($uang)
// 	{
// 		$format = number_format($uang, 0, ",", ".");
// 		return $format;
// 	}
// }

if (!function_exists('slug')) {
    function slug($text)
    {
        $text = preg_replace('~[^\\pL\d]+~u', '-', $text);
        $text = trim($text, '-');
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        $text = strtolower($text);
        $text = preg_replace('~[^-\w]+~', '', $text);
        if (empty($text)) {
            return 'n-a';
        }
        return $text;
    }
}

if (!function_exists('shortText')) {
    function shortText($story_desc,$link) {
        $chars = 50;
        $story_desc = substr($story_desc,0,$chars);
        $story_desc = substr($story_desc,0,strrpos($story_desc,' '));
        $story_desc = $story_desc." ...";
        return $story_desc;  
    }
}

if (!function_exists('readMore')) {
    function readMore($story_desc,$link) {
        $chars = 180;
        $story_desc = substr($story_desc,0,$chars);
        $story_desc = substr($story_desc,0,strrpos($story_desc,' '));
        $story_desc = $story_desc." ...";
        return $story_desc;  
    }
}

if (!function_exists('blogname')) {
    function blogname()
    {
        $CI     = &get_instance();
        $result = $CI->db->where('option_id', 1)->get('tbl_options')->row_array();
        $nama   = $result['option_value'];
        return $nama;
    }
}

if (!function_exists('address')) {
    function address()
    {
        $CI     = &get_instance();
        $result = $CI->db->where('option_id', 3)->get('tbl_options')->row_array();
        $nama   = $result['option_value'];
        return $nama;
    }
}