<?php

require "bootstrap.php";

// fetch all todos
$users = $query->selectAll('users');

dd($users);

require "index.view.php";
