<?php

class Database {

    public static function connect()
    {
        $pdo = new PDO(
            "mysql:host=localhost;dbname=bymquiz",
            "root",
            "",
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]
        );

        return $pdo;
    }
}