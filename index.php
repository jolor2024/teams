<?php
require __DIR__ . "/data.php";
require __DIR__ . "/extrafunctions.php";
?>

<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Startsida</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Teams</h1>
    </header>

    <div class="teams">
        <?php foreach ($teams as $team => $value) : ?>
            <h2> <?= $team ?> </h2>
            <p> Liga: <?= $value["league"] ?> </p>
            <p> Grupp: <?= $value["group"] ?> </p>
            <p> UEFA rankning: <?= $value["uefa-coefficient-ranking"] ?> </p>
            <p> Stad: <?= $value["city"] ?> </p>
            <img src='<?= $value["logo"] ?>'>
        <?php endforeach; ?>
    </div>
</body>

</html>