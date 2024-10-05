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
    <h1 class="startTitle">Fotbollsklubbar</h1>
    <section class="teams-info">
        <?php foreach ($teams as $team => $value) : ?>
            <div class="team">
                <img src='<?= $value["logo"] ?>' alt='<?= $team ?> logo'>
                <div class="text-info">
                    <h2><?= $team ?></h2>
                    <p>Liga: <?= $value["league"] ?></p>
                    <p>Grupp: <?= $value["group"] ?></p>
                    <p>Stad: <?= $value["city"] ?></p>
                    <p>UEFA rankning: <?= $value["uefa-coefficient-ranking"] ?></p>
                </div>

            </div>
        <?php endforeach; ?>
    </section>

    <?php
    require __DIR__ . "/php/footer.php";
    ?>

</body>

</html>