<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'auth';

$route['auth/login'] = 'auth/login';
$route['pages/ccd'] = 'auth/ccd';

$route['pages/(:any)'] = 'dashboard1/pusat/$1';

$route['pages/create'] = 'crud/create';
$route['create/create_dosen'] = 'crud/create_dosen';
$route['create/create_matkul'] = 'crud/create_matkul';

$route['pages/update/(:any)'] = 'crud/edit/$1';
$route['pages/haha'] = 'crud/update/$1';

$route['pages/update_dosen/(:any)'] = 'crud/edit_dosen/$1';
$route['pages/haha'] = 'crud/update/$1';

$route['pages/delete/(:any)'] = 'crud/delete/$1';
$route['pages/delete_dosen/(:any)'] = 'crud/delete_dosen/$1';
$route['pages/delete_matkul/(:any)'] = 'crud/delete_matkul/$1';

$route['pages/profil'] = 'crud/profil';
$route['pages/download'] = 'dashboard1/download';
$route['pages/download_dosen'] = 'dashboard1/download_dosen';

$route['mahasiswa/login_mahasiswa'] = 'auth/login_mahasiswa';
$route['mahasiswa/(:any)'] = 'mahasiswa/mahasiswa_c/$1';

$route['mahasiswa/login_mahasiswa2'] = 'auth/login_mahasiswa2';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
