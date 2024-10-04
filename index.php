<?php
require __DIR__ . "/php/data.php";
require __DIR__ . "/php/extrafunctions.php";
?>


<html lang="sv">

<?php
$headTitle = "Startsida";
require __DIR__ . "/php/head.php";
?>

<body>
    <?php
    $title = "Teams";
    require __DIR__ . "/php/header.php";
    ?>

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

    <?php
    require __DIR__ . "/php/footer.php";
    ?>

</body>

</html>