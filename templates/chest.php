<?php
require_once("header.php");
?>

<main>
    <h1>Contenu du coffre</h1>
    <div class="products">
        <?php foreach ($products as $product) { ?>

            <div class="product">
                <div class="product-img">
                    <a href="./product&<?= $product["id"] ?>">
                        <img src="assets/img/<?= $product["picture"] ?>" alt="">
                    </a>
                </div>
                <div class="product-information">
                    <p><?= $product["name"] ?></p>
                    <p><?= $product["price"] ?> Couronnes</p>
                </div>
            </div>

        <?php } ?>
    </div>
</main>
<div class="total">
    <h2>Total : <?= $total ?> Couronnes</h2>
    <a href="./chestcommand">
        <p>Passer commande</p>
    </a>
</div>
<?php
require_once("footer.php");
?>