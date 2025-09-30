<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            height: 100vh;
            display: grid;
            place-items: center;
            margin: 0;
        }
        h1 {
            color: #000000ff;
        }
    </style>
</head>
<body>
    <?php 
        $name = "Dark Matter";
        $read = false;

        if($read){
            $message = "You have read \"$name\"";
        }
        else{
            $message = "You have not read \"$name\"";
        }
    ?>
    <h1>
        <?php echo $message; ?>
        <?= $message; // Short echo tag ?>
    </h1>
    
</body>
</html>