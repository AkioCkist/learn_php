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
            [
                'name' => 'Do android dreams of electric sheep',
                'author' => 'Philips K. Dick',
                'purchaseUrl' => 'http://example.com'

            ],
            [
                'name' => 'Project Hail Mary',
                'author' => 'Andy Weir',
                'purchaseUrl' => 'http://example.com'
            ]
        ] ;
    ?>
    
    <ul>
        <?php foreach ($books as $book): ?>
            <a href= "<?= $book['purchaseUrl'] ?>">
                <li><?= $book['name']; ?></li>
            </a>
        <?php endforeach; ?>
    </ul>


</body>
</html>
