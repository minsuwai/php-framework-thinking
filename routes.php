<?php

// $router->register([
//     '' => 'controllers/IndexController.php',
//     'about' => 'controllers/AboutController.php',
//     'contactus' => 'controllers/ContactController.php',
//     'orders' => 'controllers/OrderController.php',
//     'names' => 'controllers/AddNameController.php'
// ]);

$router->get('', 'controllers/IndexController.php');
$router->get('about', 'controllers/AboutController.php');
$router->get('contactus', 'controllers/ContactController.php');

$router->post('names', 'controllers/AddNameController.php');
