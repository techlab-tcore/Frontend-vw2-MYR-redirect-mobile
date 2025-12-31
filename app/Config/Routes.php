<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('General_control');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/translate/{locale}', 'Lang_control::translate');
$routes->get('device/check', 'General_control::checkDevice');

$routes->resource('Sms_control');
$routes->get('secondpassword/sms/send', 'Sms_control::sendSecondPassSMS');
$routes->post('sms/send', 'Sms_control::sendSMS');
$routes->post('whatsapp/send-tac', 'Sms_control::sendWhatsapp');
$routes->post('whatsapp/send-tac-mass', 'Sms_control::insertWhatsappMass');

$routes->resource('Support_control');
$routes->get('list/whatsapp/register', 'Support_control::wsRegisterList');
$routes->get('list/support', 'Support_control::wsList');
$routes->get('support/live-chat', 'Support_control::getLiveChat');

$routes->get('/', 'General_control::index');
$routes->get('/LB/(:any)', 'General_control::index/$1');
$routes->get('RA/(:any)', 'General_control::index_redirect/$1');
$routes->get('RE/(:any)', 'General_control::index_affiliateRegister/$1');

$routes->resource('User_control');
$routes->get('user-company-link', 'User_control::getAdminLink');
$routes->post('tac/set', 'User_control::tac');
$routes->post('user/login', 'User_control::login');
$routes->post('user/registration', 'User_control::userRegistration');

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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
