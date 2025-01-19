<?php

// fetch all todos
$users = $query->selectAll('users');

view('index', [
    'users' => $users
]);
