<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('encryp')) {
    function encryp($id)
    {
        $CI = &get_instance();
        $encode = str_replace(array('+', '/', '='), array('-', '_', '~'), $CI->encryption->encrypt($id));
        return $encode;
    }
}
if (!function_exists('decryp')) {
    function decryp($id)
    {
        $CI = &get_instance();
        $decode = str_replace(array('-', '_', '~'), array('+', '/', '='), $id);
        $kode = $CI->encryption->decrypt($decode);
        return $kode;
    }
}
