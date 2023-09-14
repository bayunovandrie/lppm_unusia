<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// home
$route['home'] = 'Home';
$route['admin'] = 'admin/Auth';

// profil
$route['tentang-lppm'] = 'Profil/tentang_lppm';
$route['tupoksi-pegawai'] = 'Profil/tupoksi_pegawai';
$route['struktur-pengurus'] = 'Profil/struktur';

// penelitian
$route['penelitian-internal'] = 'Penelitian/internal';
$route['penelitian-eksternal'] = 'Penelitian/eksternal';
$route['penelitian-mandiri'] = 'Penelitian/mandiri';

// pengabdian
$route['pengabdian-internal'] = 'Pengabdian/internal';
$route['pengabdian-eksternal'] = 'Pengabdian/eksternal';
$route['pengabdian-kkn'] = 'Pengabdian/kkn';
$route['pengabdian-mandiri'] = 'Pengabdian/mandiri';

// capaian
$route['laporan-HKI'] = 'Capaian';
$route['laporan-pengabdian'] = 'Capaian/laporan_pengabdian';
$route['laporan-sitasi-karya-ilmiah'] = 'Capaian/rekomisi_dosen';
$route['laporan-prosiding-dan-media-massa'] = 'Capaian/laporan_hki';
$route['laporan-publikasi-jurnal'] = 'Capaian/publikasi_jurnal';
$route['laporan-publikasi-buku-/-book-chapter'] = 'Capaian/publikasi_buku';
$route['laporan-rekomisi-prestasi-dan-kinerja-peneliti-dan-pengabdi'] = 'Capaian/publikasi';
$route['laporan-teknologi-tepat-guna-produk-karya-seni-rekayasa-sosial'] = 'Capaian/teknologi';

// download
$route['donwload-panduan'] = 'Download';

// pusat
$route['pusat-kajian-islam-nusantara'] = 'Pusat/pusinus';
$route['pusat-studi-dan-pendidikan-anti-korupsi'] = 'Pusat/pusdak';
$route['pusat-studi-ekonomi-dan-bisnis'] = 'Pusat/puseknis';
$route['pusat-studi-teknik-informatika'] = 'Pusat/pasti';
$route['pusat-studi-gender-dan-anak'] = 'Pusat/psga';
$route['sdgs-center'] = 'Pusat/sdgs_center';

// layanan
$route['layanan-hki-dan-paten'] = 'Layanan/hki';
$route['layanan-insentif-publikasi'] = 'Layanan/insentif_jurnal';
$route['layanan-penerbitan-buku'] = 'Layanan/penerbitan_buku';
$route['layanan-kuliah-kerja-nyata'] = 'Layanan/layanan_kkn';
$route['layanan-pengelolaan-jurnal'] = 'Layanan/kelola_jurnal';
$route['layanan-penelitian-dan-pengabdian-masyarakat'] = 'Layanan/ppm';
$route['lapor'] = 'Layanan/lapor';

// donwload
$route['download-panduan'] = 'Download/choose_category';