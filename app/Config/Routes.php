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
// $routes->get('/', 'Home::index');
$routes->get('/', 'CrudController::index');
$routes->get('/crear', 'CrudController::crear');
$routes->post('/guardar', 'CrudController::guardar');
$routes->get('/borrar/(:num)', 'CrudController::borrar/$1');
$routes->get('/editar/(:num)', 'CrudController::editar/$1');
$routes->post('/actualizar', 'CrudController::actualizar');

// login
$routes->resource('cliente',['except'=>['show']]);
$routes->get('/login', 'web/User::login');
$routes->post('/login_post', 'web/User::login_post',['as'=>'user_login_post']);
$routes->post('/logout', 'web/User::logout',['as'=>'user_logout']);
$routes->get('/logout', 'web/User::logout');


//email libreria
$routes->get('/email/contacto', 'EmailController::index');
$routes->post('/email/enviar', 'EmailController::email');
// $routes->get('/perfil', 'Perfilcontroller::index');



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
