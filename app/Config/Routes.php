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
$routes->get('/', 'Home::index');

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
$routes->get('catalogo', 'Home::catalogo');
$routes->get('admin', 'AdminControllerRenta::index');
$routes->post('admin/info', 'AdminControllerRenta::info');
$routes->post('admin/Devolucion', 'AdminControllerRenta::Devolucion');
$routes->post('admin/nuevaRentaAdmin', 'AdminControllerRenta::nuevaRentaAdmin');
$routes->get('admin/borrar/(:num)', 'AdminControllerRenta::borrar/$1');
$routes->get('admin/clientes', 'ClientesController::index');
$routes->get('admin/empleados', 'EmpleadosController::index');
$routes->get('admin/reportes', 'ReportesController::index');
$routes->post('admin/clientes/nuevo', 'ClientesController::nuevo');
$routes->post('admin/empleados/nuevo', 'EmpleadosController::nuevo');
$routes->get('admin/clientes/borrar/(:num)', 'ClientesController::borrar/$1');
$routes->get('admin/empleados/borrar/(:num)', 'EmpleadosController::borrar/$1');
$routes->post('admin/empleados/verData', 'EmpleadosController::verData');
$routes->post('admin/empleados/editar', 'EmpleadosController::editar');
$routes->post('admin/clientes/editar', 'ClientesController::editar');
$routes->post('admin/clientes/verData', 'ClientesController::verData');
$routes->get('admin/clientes/verDataRenta', 'ClientesController::verDataRenta');
$routes->post('admin/clientes/rellenarInputs', 'ClientesController::rellenarInputs');
$routes->get('admin/vehiculos', 'vehiculosController::index');
$routes->post('admin/vehiculos/nuevo', 'vehiculosController::nuevo');
$routes->post('admin/vehiculos/verData', 'vehiculosController::verData');
$routes->post('admin/vehiculos/editar', 'vehiculosController::editar');
$routes->get('admin/vehiculos/borrar/(:num)', 'vehiculosController::borrar/$1');
