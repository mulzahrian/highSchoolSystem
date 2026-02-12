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




















