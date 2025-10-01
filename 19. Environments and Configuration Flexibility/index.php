<?php

require 'function.php';

require 'router.php';

//Connect to database and execute query
require 'database.php';

$config = require 'config.php';

$db = new Database($config['database'], $config['database']['db'], $config['database']['username'], $config['database']['password']);

$post = $db->query("SELECT * FROM post where id = 1") -> fetch(PDO::FETCH_ASSOC);

if($post){
    echo "<li>" . $post['title'] . "</li>";
}