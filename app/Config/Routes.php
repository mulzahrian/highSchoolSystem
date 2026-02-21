<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('home', 'Home::index');

$routes->get('/berita', 'Berita::index');
$routes->get('/sejarah', 'Sejarah::index');
$routes->get('/visi-misi', 'VisiMisi::index');
$routes->get('/struktur-organisasi', 'StrukturOrganisasi::index');
$routes->get('/lokasi', 'Lokasi::index');
$routes->get('/profil-guru', 'ProfilGuru::index');
$routes->get('/pendidik', 'Pendidik::index');
$routes->get('/sarana-prasarana', 'Sarana::index');
$routes->get('/rencana-strategis', 'RencanaStrategis::index');
$routes->get('/rencana-strategis/(:num)', 'RencanaStrategis::detail/$1');
$routes->get('pengumuman', 'Pengumuman::index');
$routes->get('pengumuman/(:num)', 'Pengumuman::detail/$1');
$routes->get('kalender-akademik', 'KalenderAkademik::index');
$routes->get('kalender-akademik/(:num)', 'KalenderAkademik::detail/$1');
$routes->get('kom', 'Kom::index');
$routes->get('bimbingan', 'Bimbingan::index');
$routes->get('outdownload', 'OutDownload::index');
$routes->get('outdownload/(:num)', 'OutDownload::detail/$1');
$routes->get('outartikel', 'OutArtikel::index');
$routes->get('outartikel/(:num)', 'OutArtikel::detail/$1');
$routes->get('outkaleidoskop', 'OutKaleidoskop::index');
$routes->get('outkaleidoskop/(:num)', 'OutKaleidoskop::detail/$1');
$routes->get('outgaleri', 'OutGaleri::index');
$routes->get('outalur-penelitian', 'OutAlurPenelitian::index');
$routes->get('/agen-perubahan/(:any)', 'AgenPerubahan::detail/$1');
$routes->get('/outppdb', 'OutPpdb::index');
$routes->get('/outtracat', 'OutTracat::index');
$routes->get('/outmaklumat-layanan', 'OutMaklumatLayanan::index');



$routes->get('/', 'Auth::index');
$routes->get('/auth', 'Auth::index');
$routes->get('/register', 'Auth::register');
$routes->post('/register', 'Auth::registerProcess');
$routes->post('/login', 'Auth::loginProcess');
$routes->get('/logout', 'Auth::logout');
$routes->get('/menu', 'Menu::index', ['filter' => 'auth']);
$routes->get('/', 'Menu::index');
$routes->get('news/(:num)', 'News::detail/$1');


$routes->post('menu/store', 'Menu::store');
$routes->get('menu/delete/(:num)', 'Menu::delete/$1');

// sample
$routes->get('/', 'VisionMission::index');
$routes->get('vision-mission', 'VisionMission::index');
$routes->post('vision-mission/add', 'VisionMission::add');

//Organization Profile Routes
$routes->get('organization-structure', 'OrganizationStructure::index');
$routes->post('organization-structure/add', 'OrganizationStructure::add');
$routes->get('organization-structure/delete/(:num)', 'OrganizationStructure::delete/$1');

$routes->get('profile-teacher', 'ProfileTeacher::index');
$routes->post('profile-teacher/add', 'ProfileTeacher::add');
$routes->get('profile-teacher/delete/(:num)', 'ProfileTeacher::delete/$1');

$routes->get('profile-location', 'ProfileLocation::index');
$routes->post('profile-location/add', 'ProfileLocation::add');
$routes->get('profile-location/delete/(:num)', 'ProfileLocation::delete/$1');

$routes->get('profile-teacher-detail', 'ProfileTeacherDetail::index');
$routes->post('profile-teacher-detail/add', 'ProfileTeacherDetail::add');
$routes->get('profile-teacher-detail/delete/(:num)', 'ProfileTeacherDetail::delete/$1');

$routes->get('profile-infrastructure', 'ProfileInfrastructure::index');
$routes->post('profile-infrastructure/add', 'ProfileInfrastructure::add');
$routes->get('profile-infrastructure/delete/(:num)', 'ProfileInfrastructure::delete/$1');

$routes->get('news', 'News::index');
$routes->post('news/add', 'News::add');
$routes->get('news/delete/(:num)', 'News::delete/$1');

$routes->get('plan-strategic', 'PlanStrategic::index');
$routes->post('plan-strategic/add', 'PlanStrategic::add');
$routes->get('plan-strategic/delete/(:num)', 'PlanStrategic::delete/$1');

$routes->get('announcement', 'Announcement::index');
$routes->post('announcement/add', 'Announcement::add');
$routes->get('announcement/delete/(:num)', 'Announcement::delete/$1');

$routes->get('academic-calender', 'AcademicCalender::index');
$routes->post('academic-calender/add', 'AcademicCalender::add');
$routes->get('academic-calender/delete/(:num)', 'AcademicCalender::delete/$1');

$routes->get('ktsp', 'Ktsp::index');
$routes->post('ktsp/add', 'Ktsp::add');
$routes->get('ktsp/delete/(:num)', 'Ktsp::delete/$1');

$routes->get('bimbingan-karir', 'BimbinganKarir::index');
$routes->post('bimbingan-karir/add', 'BimbinganKarir::add');
$routes->get('bimbingan-karir/delete/(:num)', 'BimbinganKarir::delete/$1');

$routes->get('opening', 'Opening::index');
$routes->post('opening/add', 'Opening::add');
$routes->get('opening/delete/(:num)', 'Opening::delete/$1');

$routes->get('pjj', 'PembelajaranJarakJauh::index');
$routes->post('pjj/add', 'PembelajaranJarakJauh::add');
$routes->post('pjj/update/(:num)', 'PembelajaranJarakJauh::update/$1');
$routes->get('pjj/delete/(:num)', 'PembelajaranJarakJauh::delete/$1');


$routes->get('ptmt', 'Ptmt::index');
$routes->post('ptmt/add', 'Ptmt::add');
$routes->post('ptmt/update/(:num)', 'Ptmt::update/$1');
$routes->get('ptmt/delete/(:num)', 'Ptmt::delete/$1');

$routes->get('sks', 'Sks::index');
$routes->post('sks/add', 'Sks::add');
$routes->post('sks/update/(:num)', 'Sks::update/$1');
$routes->get('sks/delete/(:num)', 'Sks::delete/$1');

$routes->get('ukbm', 'Ukbm::index');
$routes->post('ukbm/add', 'Ukbm::add');
$routes->post('ukbm/update/(:num)', 'Ukbm::update/$1');
$routes->get('ukbm/delete/(:num)', 'Ukbm::delete/$1');

$routes->get('keterampilan', 'Keterampilan::index');
$routes->post('keterampilan/add', 'Keterampilan::add');
$routes->post('keterampilan/update/(:num)', 'Keterampilan::update/$1');
$routes->get('keterampilan/delete/(:num)', 'Keterampilan::delete/$1');

$routes->get('layanan-madrasah', 'LayananMadrasah::index');
$routes->post('layanan-madrasah/add', 'LayananMadrasah::add');
$routes->post('layanan-madrasah/update/(:num)', 'LayananMadrasah::update/$1');
$routes->get('layanan-madrasah/delete/(:num)', 'LayananMadrasah::delete/$1');

$routes->get('ekstrakulikuler', 'Ekstrakulikuler::index');
$routes->post('ekstrakulikuler/add', 'Ekstrakulikuler::add');
$routes->post('ekstrakulikuler/update/(:num)', 'Ekstrakulikuler::update/$1');
$routes->get('ekstrakulikuler/delete/(:num)', 'Ekstrakulikuler::delete/$1');

$routes->get('laporan-kinerja', 'LaporanKinerja::index');
$routes->post('laporan-kinerja/add', 'LaporanKinerja::add');
$routes->post('laporan-kinerja/update/(:num)', 'LaporanKinerja::update/$1');
$routes->get('laporan-kinerja/delete/(:num)', 'LaporanKinerja::delete/$1');

$routes->get('perkin', 'Perkin::index');
$routes->post('perkin/add', 'Perkin::add');
$routes->post('perkin/update/(:num)', 'Perkin::update/$1');
$routes->get('perkin/delete/(:num)', 'Perkin::delete/$1');

$routes->get('relasi-belanja', 'RelasiBelanja::index');
$routes->post('relasi-belanja/add', 'RelasiBelanja::add');
$routes->post('relasi-belanja/update/(:num)', 'RelasiBelanja::update/$1');
$routes->get('relasi-belanja/delete/(:num)', 'RelasiBelanja::delete/$1');

$routes->get('lima-budaya', 'LimaBudaya::index');
$routes->post('lima-budaya/add', 'LimaBudaya::add');
$routes->post('lima-budaya/update/(:num)', 'LimaBudaya::update/$1');
$routes->get('lima-budaya/delete/(:num)', 'LimaBudaya::delete/$1');

$routes->get('zona-integrasi', 'ZonaIntegrasi::index');
$routes->post('zona-integrasi/add', 'ZonaIntegrasi::add');
$routes->post('zona-integrasi/update/(:num)', 'ZonaIntegrasi::update/$1');
$routes->get('zona-integrasi/delete/(:num)', 'ZonaIntegrasi::delete/$1');

$routes->get('layanan-public', 'LayananPublic::index');
$routes->post('layanan-public/add', 'LayananPublic::add');
$routes->post('layanan-public/update/(:num)', 'LayananPublic::update/$1');
$routes->get('layanan-public/delete/(:num)', 'LayananPublic::delete/$1');

$routes->get('ppid', 'Ppid::index');
$routes->post('ppid/add', 'Ppid::add');
$routes->post('ppid/update/(:num)', 'Ppid::update/$1');
$routes->get('ppid/delete/(:num)', 'Ppid::delete/$1');

$routes->get('yel-yel', 'YelYel::index');
$routes->post('yel-yel/add', 'YelYel::add');
$routes->post('yel-yel/update/(:num)', 'YelYel::update/$1');
$routes->get('yel-yel/delete/(:num)', 'YelYel::delete/$1');

$routes->get('pengendalian_intern', 'PengendalianIntern::index');
$routes->post('pengendalian_intern/add', 'PengendalianIntern::add');
$routes->post('pengendalian_intern/update/(:num)', 'PengendalianIntern::update/$1');
$routes->get('pengendalian_intern/delete/(:num)', 'PengendalianIntern::delete/$1');

$routes->get('pengendalian_gratifikasi', 'PengendalianGratifikasi::index');
$routes->post('pengendalian_gratifikasi/add', 'PengendalianGratifikasi::add');
$routes->post('pengendalian_gratifikasi/update/(:num)', 'PengendalianGratifikasi::update/$1');
$routes->get('pengendalian_gratifikasi/delete/(:num)', 'PengendalianGratifikasi::delete/$1');

$routes->get('whistle_blowing', 'WhistleBlowing::index');
$routes->post('whistle_blowing/add', 'WhistleBlowing::add');
$routes->post('whistle_blowing/update/(:num)', 'WhistleBlowing::update/$1');
$routes->get('whistle_blowing/delete/(:num)', 'WhistleBlowing::delete/$1');

$routes->get('agen_perubahan', 'AgenPerubahan::index');
$routes->post('agen_perubahan/add', 'AgenPerubahan::add');
$routes->post('agen_perubahan/update/(:num)', 'AgenPerubahan::update/$1');
$routes->get('agen_perubahan/delete/(:num)', 'AgenPerubahan::delete/$1');

$routes->get('tracat', 'Tracat::index');
$routes->post('tracat/add', 'Tracat::add');
$routes->post('tracat/update/(:num)', 'Tracat::update/$1');
$routes->get('tracat/delete/(:num)', 'Tracat::delete/$1');

$routes->get('maklumat_layanan', 'MaklumatLayanan::index');
$routes->post('maklumat_layanan/add', 'MaklumatLayanan::add');
$routes->post('maklumat_layanan/update/(:num)', 'MaklumatLayanan::update/$1');
$routes->get('maklumat_layanan/delete/(:num)', 'MaklumatLayanan::delete/$1');

$routes->get('alur_tamu', 'AlurTamu::index');
$routes->post('alur_tamu/add', 'AlurTamu::add');
$routes->post('alur_tamu/update/(:num)', 'AlurTamu::update/$1');
$routes->get('alur_tamu/delete/(:num)', 'AlurTamu::delete/$1');

$routes->get('alur_penelitian', 'AlurPenelitian::index');
$routes->post('alur_penelitian/add', 'AlurPenelitian::add');
$routes->post('alur_penelitian/update/(:num)', 'AlurPenelitian::update/$1');
$routes->get('alur_penelitian/delete/(:num)', 'AlurPenelitian::delete/$1');

$routes->get('peminjaman_barang', 'PeminjamanBarang::index');
$routes->post('peminjaman_barang/add', 'PeminjamanBarang::add');
$routes->post('peminjaman_barang/update/(:num)', 'PeminjamanBarang::update/$1');
$routes->get('peminjaman_barang/delete/(:num)', 'PeminjamanBarang::delete/$1');

$routes->get('mutasi_siswa', 'MutasiSiswa::index');
$routes->post('mutasi_siswa/add', 'MutasiSiswa::add');
$routes->post('mutasi_siswa/update/(:num)', 'MutasiSiswa::update/$1');
$routes->get('mutasi_siswa/delete/(:num)', 'MutasiSiswa::delete/$1');

$routes->get('survey_kepuasan', 'SurveyKepuasan::index');
$routes->post('survey_kepuasan/add', 'SurveyKepuasan::add');
$routes->post('survey_kepuasan/update/(:num)', 'SurveyKepuasan::update/$1');
$routes->get('survey_kepuasan/delete/(:num)', 'SurveyKepuasan::delete/$1');

$routes->get('ppdb', 'Ppdb::index');
$routes->post('ppdb/add', 'Ppdb::add');
$routes->post('ppdb/update/(:num)', 'Ppdb::update/$1');
$routes->get('ppdb/delete/(:num)', 'Ppdb::delete/$1');

$routes->get('download', 'Download::index');
$routes->post('download/add', 'Download::add');
$routes->post('download/update/(:num)', 'Download::update/$1');
$routes->get('download/delete/(:num)', 'Download::delete/$1');

$routes->get('artikel', 'Artikel::index');
$routes->post('artikel/add', 'Artikel::add');
$routes->post('artikel/update/(:num)', 'Artikel::update/$1');
$routes->get('artikel/delete/(:num)', 'Artikel::delete/$1');

$routes->get('kaleidoskop', 'Kaleidoskop::index');
$routes->post('kaleidoskop/add', 'Kaleidoskop::add');
$routes->post('kaleidoskop/update/(:num)', 'Kaleidoskop::update/$1');
$routes->get('kaleidoskop/delete/(:num)', 'Kaleidoskop::delete/$1');

$routes->get('galeri', 'Galeri::index');
$routes->post('galeri/add', 'Galeri::add');
$routes->post('galeri/update/(:num)', 'Galeri::update/$1');
$routes->get('galeri/delete/(:num)', 'Galeri::delete/$1');
























