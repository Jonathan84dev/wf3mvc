<?php

use Bramus\Router\Router;

$router = new Router;
$router->setNamespace('App\Controller');

//route index

$router->get('/', 'AppController@index');

//routes VehiculeController

$router->get ('/vehicule', 'VehiculeController@index');

$router->get ('/vehicule/(\d+)', 'VehiculeController@show');

$router->get ('/vehicule/create', 'VehiculeController@create');

$router->post ('/vehicule','VehiculeController@new');

$router->get ('/vehicule/(\d+)/edit', 'VehiculeController@edit');

$router->post ('/vehicule/(\d+)/edit', 'VehiculeController@update');

$router->post ('/vehicule/(\d+)/delete', 'VehiculeController@delete');

$router->run();


//routes ConducteurController

$router->get ('/conducteur', 'ConducteurController@index');

$router->get ('/conducteur/(\d+)', 'ConducteurController@show');

$router->get ('/conducteur/create', 'ConducteurController@create');

$router->post ('/conducteur','ConducteurController@new');

$router->get ('/conducteur/(\d+)/edit', 'ConducteurController@edit');

$router->post ('/conducteur/(\d+)/edit', 'ConducteurController@update');

$router->post ('/conducteur/(\d+)/delete', 'ConducteurController@delete');

$router->run();

//routes AssociationVehiculeController

$router->get ('/association_vehicule_conducteur', 'AssociationVehiculeController@index');

$router->get ('/association_vehicule_conducteur/(\d+)', 'AssociationVehiculeController@show');

$router->get ('/association_vehicule_conducteur', 'AssociationVehiculeController@create');

$router->post ('/association_vehicule_conducteur','AssociationVehiculeController@new');

$router->get ('/association_vehicule_conducteur/(\d+)/edit', 'AssociationVehiculeController@edit');

$router->post ('/association_vehicule_conducteur/(\d+)/edit', 'AssociationVehiculeController@update');

$router->post ('/association_vehicule_conducteur/(\d+)/delete', 'AssociationVehiculeController@delete');

$router->run();

