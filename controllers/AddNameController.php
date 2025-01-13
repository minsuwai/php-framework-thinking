<?php

$query->insert([
    'name' => $_POST['name']
], 'users');

header('Location: /');
