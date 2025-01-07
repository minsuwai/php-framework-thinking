<?php

class Connection
{
    public static function make()
    {
        try {
            return new PDO('mysql:host=localhost;port=3307;dbname=todo', 'root', '');
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
