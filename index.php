<?php

require "vendor/autoload.php";
require "core/bootstrap.php";

Router::load('routes.php')
    ->direct(trim($_SERVER['REQUEST_URI'], '/'), $_SERVER['REQUEST_METHOD']);
