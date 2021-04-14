<?php
$home = true;
require_once("header.php");
?>
<main class="home-container">
    <section class="header-wrapper">
        <div class="header-img">
            <img src="assets/img/background-header.png" alt="">
        </div>
        <div class="cards-ban">
            <div class="card">
                <h2>Les plus vendus</h2>
                <div class="card-img">
                    <?php foreach ($mostSells as $mostSell) { ?>
                        <a href="./product&<?= $mostSell["id"] ?>"><img src="assets/img/<?= $mostSell["picture"] ?>" alt=""></a>
                    <?php } ?>
                </div>
            </div>
            <a href="./essentials">
                <div class="card">
                    <h2>Les essentiels du Pirate</h2>
                    <img src="assets/img/essentials.png" alt="">
                </div>
            </a>
            <div class="card">
                <h2>Dernières nouveautées</h2>
                <div class="card-img">
                    <?php foreach ($lastProducts as $lastProduct) { ?>
                        <a href="./product&<?= $lastProduct["id"] ?>"><img src="assets/img/<?= $lastProduct["picture"] ?>" alt=""></a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

    <div class="banner">
        <a href="./commercial1"><img src="assets/img/banner_commercial.png" alt=""></a>
    </div>

    <section class="home-category">
        <div class="cards-ban">
            <?php foreach ($categories as $category) { ?>
                <a href="./categorydetail&<?= $category["id"] ?>">
                    <div class="card">
                        <h2><?= $category["name"] ?></h2>
                        <img src="assets/img/Logo_categories/<?= $category["picture"] ?>" alt="">

                    </div>
                </a>
            <?php } ?>
        </div>
    </section>
    <div class="card-line">
        <h2>Meilleures ventes dans armes</h2>
        <?php foreach ($mostSellWeapons as $mostSellWeapon) { ?>
            <a href="./product&<?= $mostSellWeapon["id"] ?>"><img src="assets/img/<?= $mostSellWeapon["picture"] ?>" alt=""></a>
        <?php } ?>
    </div>
    <div class="banner">
        <a href="./commercial2"> <img src="assets/img/banner_commercial2.png" alt=""></a>
    </div>

</main>
<?php
require_once("footer.php");
?>