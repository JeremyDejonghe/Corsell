<?php
require_once("header.php");
?>

<?php
require_once("aside.php");
?>

<div class="elements-container">
    <div class="element-title">
        <h1>Les meilleures ventes</h1>
        <p>Nos produits les plus populaires selon les ventes</p>
    </div>
    <div class="horizontal-banner">
        <?php
        foreach ($categories as $category) {
        ?>
            <div class="sub-title">
                <h2><?= $category["name"] ?></h2>
            </div>

            <?php

            foreach ($products[$category["id"]] as $product) {
            ?>

                <a href="./product&<?= $product["productid"] ?>">
                    <div class="elementcard">
                        <img src="assets/img/<?= $product["picture"] ?>" alt="">
                        <p><?= $product["productname"] ?></p>
                    </div>
                </a>

            <?php } ?>

            <a class="other-products" href="./categorydetail&<?= $category["id"] ?>">...</a>
        <?php } ?>
    </div>
</div>
</main>
<?php
require_once("footer.php");
?>