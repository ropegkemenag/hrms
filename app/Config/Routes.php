<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
 $routes->get('auth', 'Auth::index');
 $routes->get('auth/login', 'Auth::login');
 $routes->get('auth/logout', 'Auth::logout');
 $routes->get('auth/callback', 'Auth::callback');

 $routes->get('/', 'Home::index',['filter' => 'auth']);

// Manajemen
 $routes->group("manajemen", ["filter" => "auth"], function ($routes) {
   $routes->get('/', 'Manajemen\Dashboard::pegawai');
   $routes->get('pegawai/(:num)', 'Manajemen\Home::getpegawai/$1');
   $routes->get('dashboard', 'Manajemen\Dashboard::pegawai');
   $routes->get('informasi', 'Manajemen\Informasi::index');

   $routes->group("report", function ($routes) {
       $routes->get('', 'Report::index');
       $routes->get('getpejabat/(:num)', 'Report::datapejabat/$1');
       $routes->get('map', 'Dashboard::map');
   });

   // $routes->group("dashboard", function ($routes) {
   //     $routes->get('pegawai', 'Manajemen\Dashboard::pegawai');
   //     $routes->get('kinerja', 'Manajemen\Dashboard::kinerja');
   //     $routes->get('map', 'Manajemen\Dashboard::map');
   // });

   $routes->group("download", function ($routes) {
       $routes->get('', 'Manajemen\Download::index');
       $routes->get('pegawai', 'Manajemen\Download::pegawai');
       $routes->get('unor', 'Manajemen\Download::unor');
   });

   $routes->group("satker", function ($routes) {
       // $routes->get('', 'Master\Satker::index');
       // $routes->post('', 'Master\Satker::search');
       // $routes->get('detail/(:any)', 'Master\Satker::detail/$1');
       // $routes->post('update/(:any)', 'Master\Satker::update/$1');
       // $routes->get('getdata/(:any)', 'Master\Satker::getdata/$1');
       $routes->get('lokasi', 'Manajemen\Satker::lokasi');
       $routes->get('lokasi/pegawai', 'Manajemen\Satker::lokasipegawai');
       $routes->post('lokasi/pegawai', 'Manajemen\Satker::lokasipegawaisave');
       $routes->get('lokasi/pegawai/delete/(:any)', 'Manajemen\Satker::lokasipegawaidelete/$1');
       $routes->get('lokasi/(:any)', 'Manajemen\Satker::lokasi/$1');
       $routes->post('lokasi', 'Manajemen\Satker::lokasisave');
       $routes->post('lokasi/(:any)', 'Manajemen\Satker::lokasisave');
   });

   $routes->group("pegawai", function ($routes) {
       $routes->get('', 'Manajemen\Pegawai::index');
       $routes->post('', 'Manajemen\Pegawai::cari');
       $routes->get('profil', 'Manajemen\Pegawai::profil');
       $routes->get('data', 'Manajemen\Pegawai::data');
       $routes->get('getdata', 'Manajemen\Pegawai::getdata');
       $routes->get('getdata/(:any)', 'Manajemen\Pegawai::getdata/$1');
       $routes->get('getdataall', 'Manajemen\Pegawai::getdataall');
       $routes->get('getdataall/(:any)', 'Manajemen\Pegawai::getdataall/$1');
       $routes->get('getcountsatker/(:any)', 'Manajemen\Pegawai::getCountSatker/$1');
       $routes->get('profil/pendidikan/(:any)', 'Manajemen\Pegawai::pendidikan/$1');
       $routes->get('profil/pekerjaan/(:any)', 'Manajemen\Pegawai::pekerjaan/$1');
       $routes->get('profil/alamat/(:any)', 'Manajemen\Pegawai::alamat/$1');
       $routes->get('profil/keluarga/(:any)', 'Manajemen\Pegawai::keluarga/$1');
       $routes->get('profil/organisasi/(:any)', 'Manajemen\Pegawai::organisasi/$1');
       $routes->get('profil/(:any)', 'Manajemen\Pegawai::profil/$1');
       $routes->get('profil/(:any)/(:any)', 'Manajemen\Pegawai::profil/$1/$2');
   });

   // Non ASN
   $routes->group("nonasn", function ($routes) {
       $routes->get('', 'Manajemen\Nonasn::index');
       $routes->get('profil/(:num)', 'Manajemen\Nonasn::profil/$1');
       $routes->get('add', 'Nonasn::add');
       $routes->get('detail/(:num)', 'Manajemen\Nonasn::detail/$1');
       $routes->get('edit/(:num)', 'Manajemen\Nonasn::edit/$1');
       $routes->post('add', 'Manajemen\Nonasn::save');
   });

   $routes->group("ajax", function ($routes) {
       $routes->get('pegawai/(:num)', 'Manajemen\Ajax::getpegawai/$1');
       $routes->get('pensiun', 'Manajemen\Ajax::pensiun');
       $routes->get('birthday', 'Manajemen\Ajax::birthday');
       $routes->get('kabupaten', 'Manajemen\Ajax::kabupaten');
       $routes->get('getlokasi/(:any)', 'Manajemen\Ajax::getlokasi/$1');
       $routes->post('getaccess', 'Manajemen\Ajax::getAccess');
       $routes->get('updateuser/(:any)', 'Manajemen\Ajax::updateuser/$1');
   });

   $routes->group("laporan", function ($routes) {
       $routes->get('pivot', 'Manajemen\Laporan::pivot');
       $routes->get('pejabat', 'Manajemen\Laporan::pejabat');
       $routes->get('pejabat/(:num)', 'Manajemen\Laporan::pejabat/$1');
       $routes->get('anomali', 'Manajemen\Laporan::anomali');
       $routes->get('pensiun', 'Manajemen\Laporan::pensiun');
       $routes->get('pensiun/(:num)', 'Manajemen\Laporan::pensiun/$1');
       $routes->get('pensiun/(:num)/(:num)', 'Manajemen\Laporan::pensiun/$1/$2');
       $routes->get('jumlah', 'Manajemen\Laporan::jumlah');
       $routes->get('jumlah/(:any)', 'Manajemen\Laporan::jumlah/$1');
       $routes->get('jobmap', 'Manajemen\Laporan::jobmap');
       $routes->get('jobmap/(:any)', 'Manajemen\Laporan::jobmapdetail/$1');

       $routes->get('duk', 'Manajemen\Laporan::duk');
       $routes->post('duk/generate', 'Manajemen\Laporan::duk_generate');
       $routes->get('duk/cetak', 'Manajemen\Laporan::duk_cetak');
   });

   $routes->get('satker/getchild/(:any)', 'Manajemen\Satker::getchild/$1');


   $routes->get('export/pensiun/(:num)/(:num)', 'Manajemen\Export::pensiun/$1/$2');


   $routes->group("anjababk", function ($routes) {
       $routes->get('anjab', 'Anjababk\Anjab::index');
       $routes->get('anjab/sub/(:any)', 'Anjababk\Anjab::sub/$1');
       $routes->get('anjab/detail/(:any)/(:any)', 'Anjababk\Anjab::detail/$1/$2');
       $routes->get('anjab/print', 'Anjababk\Anjab::print');
       $routes->post('anjab/ikhtisar/save', 'Anjababk\Anjab::save_ikhtisar');

       $routes->get('petajabatan/struktur/(:any)', 'Anjababk\Petajabatan::struktur/$1');
       $routes->get('petajabatan/(:any)', 'Anjababk\Petajabatan::index/$1');
   });

   $routes->group("access", function ($routes) {
       $routes->get('/', 'Manajemen\Access::index');
       $routes->post('', 'Manajemen\Access::add');
       $routes->get('delete/(:num)', 'Manajemen\Access::delete/$1');
   });

   $routes->group("setting", function ($routes) {
       $routes->get('user', 'Manajemen\Users::index');
       $routes->post('user/search', 'Manajemen\Users::search');
       $routes->post('user/changepassword', 'Manajemen\Users::changepassword');
   });

   $routes->get('bkn/sendskp/(:num)/(:num)', 'Manajemen\Bkn::sendskp/$1/$2');
 });
 // end manajemen

 $routes->group("ajax", ["filter" => "auth"], function ($routes) {
     $routes->get('searchunor', 'Ajax::searchunor');
     $routes->get('getpegawai/(:num)', 'Ajax::getpegawai/$1');
 });

 $routes->group("usul", ["filter" => "auth"], function ($routes) {
     $routes->post('create', 'Usul::create');
 });

 $routes->group("dokumen", ["filter" => "auth"], function ($routes) {
     $routes->post('upload', 'Dokumen::upload');
 });


 $routes->group("kenaikanpangkat", ["filter" => "auth"], function ($routes) {
     $routes->get('', 'Kenaikanpangkat\Home::index');
 });

 $routes->group("kgb", ["filter" => "auth"], function ($routes) {
     $routes->get('', 'Kgb\Home::index');
     $routes->get('pegawai', 'Kgb\Pegawai::index');
     $routes->post('pegawai/getdata', 'Kgb\Pegawai::getData');
     $routes->get('setup', 'Kgb\Home::setup');
     $routes->get('proses', 'Kgb\Proses::index');
     $routes->post('proses/getdata', 'Kgb\Proses::getData');
     $routes->get('proses/add/(:any)', 'Kgb\Proses::add/$1');
 });

 $routes->group("tubel", ["filter" => "auth"], function ($routes) {
     $routes->get('', 'Tubel\Home::index');
     $routes->get('detail/(:any)', 'Tubel\Home::detail/$1');
     $routes->get('detail/(:any)/(:num)', 'Tubel\Home::detail/$1/$2');
     $routes->post('addusul', 'Tubel\Home::addusul');
     $routes->post('savedata', 'Tubel\Home::savedata');
     $routes->get('submit/(:any)', 'Tubel\Home::submit/$1');
 });

 $routes->group("mutasi", ["filter" => "auth"], function ($routes) {
     $routes->get('kenaikanjf', 'Mutasi\Kenaikanjf::index');
     $routes->post('kenaikanjf/addusul', 'Mutasi\Kenaikanjf::addusul');
     $routes->get('kenaikanjf/detail/(:any)', 'Mutasi\Kenaikanjf::detail/$1');
     $routes->get('kenaikanjf/detail/(:any)/(:num)', 'Mutasi\Kenaikanjf::detail/$1/$2');
     $routes->post('kenaikanjf/savedata', 'Mutasi\Kenaikanjf::savedata');
     $routes->get('kenaikanjf/submit/(:any)', 'Mutasi\Kenaikanjf::submit/$1');
 });

 $routes->group("simpeg", ["filter" => "auth"], function ($routes) {
     $routes->get('', 'Simpeg\Home::index');
     $routes->get('unor', 'Simpeg\Unor::index');
     $routes->post('unor/addusul', 'Simpeg\Unor::addusul');
     $routes->get('unor/delete/(:any)', 'Simpeg\Unor::delete/$1');

     $routes->group("pegawaibaru",function ($routes) {
         $routes->get('', 'Simpeg\Pegawaibaru::index');
         $routes->post('addusul', 'Simpeg\Pegawaibaru::addusul');
         $routes->get('delete/(:any)', 'Simpeg\Pegawaibaru::delete/$1');
     });

     $routes->group("mutasi",function ($routes) {
         $routes->get('', 'Simpeg\Pegawaimutasi::index');
         $routes->get('inbox', 'Simpeg\Pegawaimutasi::inbox');
         $routes->post('addusul', 'Simpeg\Pegawaimutasi::addusul');
         $routes->get('accept/(:any)', 'Simpeg\Pegawaimutasi::accept/$1');
         $routes->post('decline', 'Simpeg\Pegawaimutasi::decline');
     });
 });

 $routes->group('converter', static function ($routes) {
     $routes->get('', 'Converter::index');
     $routes->get('docxtopdf', 'Converter::docxtopdf');
 });

 $routes->group("api", function ($routes) {
     $routes->group("tubel",function ($routes) {
         $routes->get('', 'Api\Tubel::index');
         $routes->get('lists/(:any)', 'Api\Tubel::lists/$1');
         $routes->get('detail/(:any)', 'Api\Tubel::detail/$1');
         $routes->get('delete/(:any)', 'Simpeg\Tubel::delete/$1');
     });

     $routes->group("mutasi",function ($routes) {
         $routes->get('', 'Simpeg\Pegawaimutasi::index');
         $routes->get('inbox', 'Simpeg\Pegawaimutasi::inbox');
         $routes->post('addusul', 'Simpeg\Pegawaimutasi::addusul');
         $routes->get('accept/(:any)', 'Simpeg\Pegawaimutasi::accept/$1');
         $routes->post('decline', 'Simpeg\Pegawaimutasi::decline');
     });
 });
