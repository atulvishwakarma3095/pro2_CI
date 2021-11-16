<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Login::index');
/*$routes->get('login', 'Login::index');
$routes->post('loginform','Login::checkusers');
$routes->get('registerform', 'Login::register');
$routes->post('regsave','Login::savereg');*/

$routes->get('logout','Login::logout');


$routes->group('',['filter'=>'AuthCheck'],function($routes){
    $routes->get('dashboard','Dashboard::index');
    $routes->get('profile','Dashboard::profile');
    $routes->get('bonafied','Dashboard::bonafied');
    $routes->get('assignments','Dashboard::assignments');
    $routes->get('certificate','Dashboard::certificate');
    $routes->get('coursestn','Dashboard::coursesturcture');
    $routes->get('ebooks','Dashboard::Ebook');
    $routes->get('notes','Dashboard::notes');
    $routes->get('synotes','Dashboard::SYnotes');
    $routes->get('tynotes','Dashboard::TYnotes');
    $routes->get('questionpaper','Dashboard::questionpaper');
    $routes->get('referencebook','Dashboard::referencebook');
    $routes->get('reportissue','Dashboard::reportissue');
    $routes->get('syllabus','Dashboard::syllabus');
});


$routes->group('',['filter'=>'AlreadyLoggedInUsers'],function($routes){
    $routes->get('login', 'Login::index');
    $routes->post('loginform','Login::checkusers');
    $routes->get('registerform', 'Login::register');
    $routes->post('regsave','Login::savereg');
});


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
