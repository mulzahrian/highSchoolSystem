<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth::index');
$routes->get('/auth', 'Auth::index');
$routes->get('/register', 'Auth::register');
$routes->post('/register', 'Auth::registerProcess');
$routes->post('/login', 'Auth::loginProcess');
$routes->get('/logout', 'Auth::logout');
$routes->get('/menu', 'Menu::index', ['filter' => 'auth']);
$routes->get('/', 'Menu::index');

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









