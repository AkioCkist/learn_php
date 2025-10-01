<?php

require 'function.php';

require 'router.php';

//Connect to database
$dsn = 'mysql:host=localhost;port=3306;dbname=myapp;user=root;charset=utf8mb4';
$pdo = new PDO($dsn);

$statement = $pdo->prepare('SELECT * FROM post');
$statement->execute();
$posts = $statement->fetchAll(PDO::FETCH_ASSOC);


foreach($posts as $post){
    echo "<li>" . $post['title'] . "</li>";
}