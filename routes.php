<?php

// $router->register([
//     '' => 'controllers/IndexController.php',
//     'about' => 'controllers/AboutController.php',
//     'contactus' => 'controllers/ContactController.php',
//     'orders' => 'controllers/OrderController.php',
//     'names' => 'controllers/AddNameController.php'
// ]);

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');

$router->post('names', 'PagesController@createUser');
