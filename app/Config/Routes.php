<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
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

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

$routes->group('api', function ($routes) {

	$routes->group('presentation', function ($routes) {
		$routes->get('findall', 'PresentationRestController::findAll');
		$routes->get('find/(:any)', 'PresentationRestController::find/$1');
		$routes->post('create', 'PresentationRestController::create');
		$routes->put('update', 'PresentationRestController::update');
		$routes->delete('delete/(:any)', 'PresentationRestController::delete/$1');
	});
});


//login register
$routes->get('/presenter-register', 'User::presenter_register');



$routes->get('/add-presentation', 'Home::addpresentation');
$routes->get('/add-association', 'AssociationController::addassociation');
$routes->get('/add-exhibitor', 'Home::addexhibitor');

// Presentations Routes
$routes->get('/current-presentation', 'PresentationController::currentpresentation');
$routes->get('/past-presentation', 'PresentationController::pastpresentation');

// Exhibitoe Booth Routes
$routes->get('/industry-exhibitors', 'ExhibitorController::exhibitor/industry');
$routes->get('/premium-exhibitors', 'ExhibitorController::exhibitor/premium');
$routes->get('/platinum-exhibitors', 'ExhibitorController::exhibitor/platinum');

$routes->get('/associations', 'AssociationController::associates');



$routes->group('admin', function ($routes) {
	$routes->add('users', 'Admin\Users::index');
	$routes->add('blog', 'Admin\Blog::index');
});
/**
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
