<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = 'login';
$route['logout'] = 'auth/logout';

$route['user'] = 'master/user';
$route['kategori'] = 'master/kategori';

$route['post'] = 'post';
$route['download'] = 'download';
$route['pusat_data'] = 'pusat_data';

$route['berita/(:any)']  = 'home/berita/$1';
$route['berita']         = 'home/posts';
