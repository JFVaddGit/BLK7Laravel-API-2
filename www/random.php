<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Random Number Generator</h1>

    <?php
        $randomNumber = rand(1, 100);
        echo "Random number between 1 and 100: " . $randomNumber;
    ?>

    <nav>
        <a href="index.php">Home</a>
        <a href="random.php">Random Number</a>
    </nav>

    <footer>
        <p>&copy; 2024 Random Number Generator</p>
    </footer>





</body>
</html>