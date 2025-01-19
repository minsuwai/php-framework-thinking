<?php

// fetch all todos
$users = App::get('database')->selectAll('users');

view('index', [
    'users' => $users
]);
