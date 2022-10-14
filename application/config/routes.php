<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['tanyaahli'] = 'tanyaahli/index';
$route['artikel/detail/(:any)'] = 'artikel/detail/$1';
$route['katering/detail/(:any)'] = 'katering/detail/$1';
$route['riwayattransaksi/(:any)'] = 'transaksi/riwayattransaksi/$1';
$route['riwayattransaksi/finish/(:any)'] = 'konsultasiAdmin/finish/$1';
$route['riwayattransaksi/detail/(:any)/(:any)'] = 'transaksi/detailriwayattransaksi/$1/$2';
$route['riwayatkonsultasi/detail/(:any)'] = 'konsultasi/detailriwayatkonsultasi/$1';
$route['about'] = 'home/about';
$route['home/setelah'] = 'home/setelah';
$route['admin'] = 'admin/index';
$route['admin/kateringAdmin'] = 'kateringAdmin/index';
$route['admin/konversiAdmin'] = 'konversiAdmin/index';
$route['admin/programAdmin'] = 'programAdmin/index';
$route['admin/dataPasien'] = 'dataPasien/index';
$route['admin/laporanKeuangan'] = 'laporankeuangan/index';
$route['login'] = 'Auth/index';
$route['daftar'] = 'Auth/daftar';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
