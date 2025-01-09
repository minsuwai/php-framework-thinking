<?php

// fetch all todos
$tasks = $query->selectAll('tasks');
require "views/index.view.php";
