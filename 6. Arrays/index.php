<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>
<body>

    <h1> Recommend books</h1>
    
    <?php 
        $books = [
            "Do android dreams of electric sheep",
            "Neuromancer",
            "Snow Crash",
            "The Diamond Age"
        ] ;
    ?>
    <ul>
        <?php 
        foreach ($books as $book){
            echo "<li> {$book}™ </li>";
        }
        ?>

        <?php foreach($books as $book): ?>
            <li><?= $book ?></li>
        <?php endforeach; ?>
    </ul>       


</body>
</html>
