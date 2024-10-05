<main>
    <h1 class="startTitle">Fotbollsklubbar</h1>
    <section class="teams-info">

        <?php foreach ($teams as $team => $value) : ?> <!-- Foreach loop för gå igenom varje värde -->
            <div class="team">
                <img src='<?= $value["logo"] ?>' alt='<?= $team ?> logo'>
                <div class="text-info">
                    <a href='<?= $value["url"] ?>'><?= $team ?></a>
                    <p>Liga: <?= $value["league"] ?></p>
                    <p>Grupp: <?= $value["group"] ?></p>
                    <p>Stad: <?= $value["city"] ?></p>
                    <p>UEFA rankning: <?= $value["uefa-coefficient-ranking"] ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </section>
</main>