<?php

function dd($data)
{
    echo "<pre>";
    die(var_dump($data));
}

function dbConnection()
{
    try {
        return new PDO('mysql:host=localhost;port=3307;dbname=todo', 'root', '');
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

function fetchTasks($pdo)
{
    $stmt = $pdo->prepare('SELECT * FROM tasks');
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
}
