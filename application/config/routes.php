<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'C_home/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['home']	= 'C_home/index';
$route['about'] = 'C_home/about';
$route['galery']= 'C_home/galery';
$route['galeri/rumah']= 'C_home/galeryRumah';
$route['agent']	= 'C_home/agent';
$route['galery/detail/(:any)']	= 'C_home/detail/$1';

// Admin
$route['admin']	= 'admin/C_admin';
$route['admin/dashboard']	= 'admin/C_admin';

// Fasilitas
$route['admin/fasilitas']    = 'admin/C_admin';
$route['admin/fasilitas/edit/(:any)']    = 'admin/C_admin';
$route['admin/fasilitas/aksi/edit/(:any)']    = 'admin/C_admin';
$route['admin/fasilitas/aksi/hapus/(:any)']    = 'admin/C_admin';

// Keterangan
$route['admin/keterangabn']    = 'admin/C_admin';
$route['admin/keterangabn/edit/(:any)']    = 'admin/C_admin';
$route['admin/keterangabn/aksi/edit/(:any)']    = 'admin/C_admin';
$route['admin/keterangabn/aksi/hapus/(:any)']    = 'admin/C_admin';

// Tim
$route['admin/tim']    = 'admin/C_tim';
$route['admin/tim/tambah']    = 'admin/C_tim/tambah';
$route['admin/tim/aksi/tambah']    = 'admin/C_tim/aksiTambah';
$route['admin/tim/edit/(:any)']    = 'admin/C_tim/edit/$1';
$route['admin/tim/aksi/edit/(:any)']    = 'admin/C_tim/aksiEdit/$1';
$route['admin/tim/aksi/hapus/(:any)']    = 'admin/C_tim/aksiHapus/$1';

// Spesifikasi
$route['admin/spesifikasi']    = 'admin/C_tim';
$route['admin/spesifikasi/edit/(:any)']    = 'admin/C_tim';
$route['admin/spesifikasi/aksi/edit/(:any)']    = 'admin/C_tim';
$route['admin/spesifikasi/aksi/hapus/(:any)']    = 'admin/C_tim';


// Kategori
$route['admin/kategori']	= 'admin/C_kategori';
$route['admin/kategori/tambah']	= 'admin/C_kategori/tambah';
$route['admin/kategori/edit/(:any)']	= 'admin/C_kategori/edit/$1';
$route['admin/kategori/aksi/edit/(:any)']	= 'admin/C_kategori/aksiEdit/$1';
$route['admin/kategori/aksi/hapus/(:any)']	= 'admin/C_kategori/aksiHapus/$1';

// Konten Galeri
$route['admin/konten/aktifitas']    = 'admin/C_konten/aktivitas';
$route['admin/konten/tambah']    = 'admin/C_konten/tambah';
$route['admin/konten/tambah/(:any)']    = 'admin/C_konten/tambah/$1';
$route['admin/kategori/aksi/tambah']    = 'admin/C_konten/aksiTambah';
$route['admin/konten/rumah']    = 'admin/C_konten/rumah';
$route['admin/konten/edit/(:any)']    = 'admin/C_konten/edit/$1';
$route['admin/konten/aksi/edit/(:any)']    = 'admin/C_konten/edit/$1';
$route['admin/konten/aksi/hapus/(:any)']    = 'admin/C_konten/aksiHapus/$1';

// Konten CMS
$route['admin/konten/fasilitas']        = 'admin/C_konten/konten/fst';
$route['admin/konten/keterangan']       = 'admin/C_konten/konten/ktr';
$route['admin/konten/aksebilitas']      = 'admin/C_konten/konten/aks';
$route['admin/konten/spesifikasi']      = 'admin/C_konten/konten/spk';

// Unit
$route['admin/unit']	= 'admin/C_unit';
$route['admin/unit/edit/(:any)']	= 'admin/C_unit/aksiEdit/$1';
$route['admin/unit/aksi/edit/(:any)']	= 'admin/C_unit/aksiSimpan/$1';

// Login
$route['admin/login']	= 'C_login';
$route['admin/login/aksi']	= 'C_login/aksi';