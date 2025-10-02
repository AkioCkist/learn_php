<?php

class Database{
    public $connection;

    public function __construct($config, $db, $username, $password){

        // $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset={$config['charset']}";

        $dsn = $db . http_build_query($config, '', ';');

        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_ERRMODE => PDO::FETCH_ASSOC,
        ]);
    }
    public function query($query, $params = []){

        $statement = $this->connection->prepare($query);
        $statement->execute($params);
        return $statement;
    }
}