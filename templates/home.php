<?php
$home = true;
require_once("header.php");
?>
<main>
    <section class="header-wrapper">
        <figure>
            <img src="assets/img/background-header.png" alt="">
        </figure>

        <div class="card">
            <h2>Les plus vendus</h2>
            <?php foreach ($mostSells as $mostSell) { ?>
                <img src="assets/img/products/<?= $mostSell["picture"] ?>" alt="">
            <?php } ?>
        </div>
        <div class="card">
            <h2>Les essentiels du Pirate</h2>
            <img src="assets/img/essentials.png" alt="">
        </div>
        <div class="card">
            <h2>Dernières nouveautées</h2>
            <?php foreach ($lastProducts as $lastProduct) { ?>
                <img src="assets/img/products/<?= $lastProduct["picture"] ?>" alt="">
            <?php } ?>
        </div>
    </section>

    <div class="banner">
        <img src="assets/img/banner_commercial.png" alt="">
    </div>

    <section class="category">
        <?php foreach ($categories as $category) { ?>
            <div class="card">
                <h2><?= $category["name"] ?></h2>
                <img src="assets/img/products/<?= $category["picture"] ?>" alt="">
            </div>
        <?php } ?>

        <div class="card-line">
            <h2>Meilleures ventes dans armes</h2>
            <?php foreach ($mostSellWeapons as $mostSellWeapon) { ?>
                <img src="assets/img/products/<?= $mostSellWeapon["picture"] ?>" alt="">
            <?php } ?>
        </div>
    </section>

    <div class="banner">
        <img src="assets/img/banner_commercial.png" alt="">
    </div>

</main>
<?php
require_once("footer.php");
?>