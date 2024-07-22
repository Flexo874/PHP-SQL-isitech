<?php

    function connection(){
        $host = 'localhost';
        $db   = 'meds';
        $user = getenv('USER1')?getenv('USER1'):'root';
        $pass = getenv('password')?getenv('password'):'';


        $charset = 'utf8mb4';

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        try {
            var_dump($dsn);
            var_dump($options);
            var_dump($user);
            var_dump($pass);
            $pdo = new PDO($dsn, $user, $pass, $options);

        } catch (PDOException $e) {
            throw new PDOException($e->getMessage(), (int)$e->getCode());
        }

        return $pdo;
    }

    connection();










