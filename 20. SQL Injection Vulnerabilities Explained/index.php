<?php

require 'function.php';

require 'router.php';

//Connect to database and execute query
require 'database.php';

$config = require 'config.php';

$db = new Database($config['database'], $config['database']['db'], $config['database']['username'], $config['database']['password']);

$id = $_GET['id'];

$query = "SELECT * FROM post where id = :id";



$post = $db->query($query, [':id' => $id]) -> fetch(PDO::FETCH_ASSOC);

if($post){
    echo "<li>" . $post['title'] . "</li>";
}