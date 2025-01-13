<?php

// fetch all todos
$users = $query->selectAll('users');
require "views/index.view.php";
