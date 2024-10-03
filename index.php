<?php
require __DIR__ . "/data.php";
require __DIR__ . "/extrafunctions.php";
?>

<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Startsida</title>
</head>

<body>
    <header>
        <h1>Startsida</h1>
    </header>
    <p>Hejsan</p>
    <?php foreach ($teams as $team) : ?>
        <h2> <?= $team["league"] ?> </h2>
    <?php endforeach; ?>
</body>

</html>