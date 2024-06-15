<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->set404Override();
// $routes->get('/', 'Home::home');
// $routes->get('about-us', 'Home::aboutUs');
// $routes->match(['get','post'],'/contact-us', 'Home::contactUs');
// $routes->get('services', 'Home::services');
// $routes->get('services/(:any)', 'Home::pages/$1');



// osn v2 routes 
$routes->get('/', 'OsnV2::home');
$routes->get('about-us', 'OsnV2::aboutUs');
$routes->get('services', 'OsnV2::services');
$routes->get('services/(:any)', 'OsnV2::servicesPages/$1');
$routes->get('contact-us', 'OsnV2::contactUs');
$routes->get('tax-calculator', 'OsnV2::taxCalculator');
$routes->get('demo-excel-dashboard', 'OsnV2::demoExcelDashboard');



// if (HEADER_LOGIN_BTN) {
// user routes 
    $routes->match(['get', 'post'], 'login', 'User::login', ["filter" => "authFilter"]);
    // $routes->match(['get', 'post'], 'register', 'User::register');
    $routes->get('logout', 'User::logout');
    $routes->get('verification', 'User::verification');



    // dashboard routes 
    $routes->get('dashboard', 'Dashboard::dashboard', ["filter" => "authFilter"]);
    $routes->get('dashboard/queries', 'Dashboard::queries', ["filter" => "authFilter"]);
    $routes->get('dashboard/subscribe', 'Dashboard::subscribe', ["filter" => "authFilter"]);

    // admin routes 
    $routes->get('admin', 'Admin::admin', ["filter" => "authFilter"]);
    $routes->match(['get', 'post'], 'admin/users', 'Admin::users', ["filter" => "authFilter"]);
    $routes->match(['get', 'post'], 'admin/pages', 'Admin::pages', ["filter" => "authFilter"]);
    $routes->match(['get', 'post'], 'admin/media', 'Admin::media', ["filter" => "authFilter"]);

// }

// other routes
$routes->match(['get', 'post'], 'api/newsSubscribe', 'OsnV2::newsSubscribe');
$routes->match(['get', 'post'], 'api/contactUs', 'OsnV2::contactUsForm');

$routes->get('/404', 'Admin::to404');
