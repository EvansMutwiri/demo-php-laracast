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
<div>
    <h1>Recommended TV Series</h1>

    <?php
    $series = [
        [
            "name" => "Walking Dead",
            "main" => "Daryl",
            "location" => "France",
            "url" => "https://en.wikipedia.org/wiki/Walking_Dead"
        ],
        [
            "name" => "Walking Dead",
            "main" => "Rick Grimes",
            "location" => "Alexandria",
            "url" => "https://en.wikipedia.org/wiki/Walking_Dead"
        ],
        [
            "name" => "Game of Thrones",
            "main" => "Jon Snow",
            "location" => "Winterfell",
            "url" => "https://en.wikipedia.org/wiki/Game_of_Thrones"
        ],
        [
            "name" => "Breaking Bad",
            "main" => "Walter White",
            "location" => "Albuquerque",
            "url" => "https://en.wikipedia.org/wiki/Breaking_Bad"
        ],
        [
            "name" => "Stranger Things",
            "main" => "Eleven",
            "location" => "Hawkins",
            "url" => "https://en.wikipedia.org/wiki/Stranger_Things"
        ],
        [
            "name" => "The Mandalorian",
            "main" => "Din Djarin",
            "location" => "Tatooine",
            "url" => "https://en.wikipedia.org/wiki/The_Mandalorian"
        ],
        [
            "name" => "Sherlock",
            "main" => "Sherlock Holmes",
            "location" => "London",
            "url" => "https://en.wikipedia.org/wiki/Sherlock_(TV_series)"
        ],
        [
            "name" => "The Witcher",
            "main" => "Geralt of Rivia",
            "location" => "The Continent",
            "url" => "https://en.wikipedia.org/wiki/The_Witcher_(TV_series)"
        ],
        [
            "name" => "The Boys",
            "main" => "Billy Butcher",
            "location" => "New York",
            "url" => "https://en.wikipedia.org/wiki/The_Boys_(TV_series)"
        ],
        [
            "name" => "Westworld",
            "main" => "Dolores Abernathy",
            "location" => "Westworld",
            "url" => "https://en.wikipedia.org/wiki/Westworld_(TV_series)"
        ],
    ];

    ?>

    <ol>
        <?php foreach ($series as $seriesItem) :?>

<!--        can use htmlspecial chars
            $link = htmlSpecialCharacters($seriesItem["url"])
-->

        <?php
            $url = $seriesItem["url"];
            ?>


        <li><?= $seriesItem["name"] . " : " . $seriesItem["main"] . " - " . "<a href='$url'> $url</a>"?></li>


        <?php endforeach; ?>
    </ol>
</div>
</body>
</html>