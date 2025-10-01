<?php

require 'function.php';

require 'router.php';

//Connect to database and execute query
require 'database.php';

$db = new Database();
$post = $db->query("SELECT * FROM post where id = 1") -> fetch(PDO::FETCH_ASSOC);

if($post){
    echo "<li>" . $post['title'] . "</li>";
}