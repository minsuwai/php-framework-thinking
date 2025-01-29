<?php

// $router->register([
//     '' => 'controllers/IndexController.php',
//     'about' => 'controllers/AboutController.php',
//     'contactus' => 'controllers/ContactController.php',
//     'orders' => 'controllers/OrderController.php',
//     'names' => 'controllers/AddNameController.php'
// ]);

use controllers\PagesController;

// $router->get('', 'PagesController@home');
// $router->get('about', 'PagesController@about');
// $router->get('contact', 'PagesController@contact');

// $router->post('names', 'PagesController@createUser');

$router->get('', [PagesController::class, 'home']);
$router->get('about', [PagesController::class, 'about']);
$router->get('contact', [PagesController::class, 'contact']);

$router->post('names', [PagesController::class, 'createUser']);
