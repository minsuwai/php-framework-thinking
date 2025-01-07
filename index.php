<?php

require "functions.php";
require "database/Connection.php";
require "database/QueryBuilder.php";


$query = new QueryBuilder(Connection::make());

// fetch all todos
$tasks = $query->selectAll('tasks');

require "index.view.php";
