<?php

require "functions.php";

// PDO connection
$pdo = dbConnection();

// fetch all todos
$tasks = fetchTasks($pdo);

require "index.view.php";
