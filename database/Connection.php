<?php

class Connection
{
    public static function make($config)
    {
        try {
            return new PDO(
                "{$config['host']};port=3307;dbname={$config['dbName']}",
                $config['username'],
                $config['password']
            );
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
