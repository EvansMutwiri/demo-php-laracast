<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <?php
    $movie = "Walking Dead";
    $watched = true;
    $message = "You have watched $movie!";

    if ($watched) {
        $message = "You have watched $movie!";
    } else {
        $message = "You have not watched $movie!";
    }
    ?>
<h1>
    <?= $message ?>
</h1>
</body>
</html>