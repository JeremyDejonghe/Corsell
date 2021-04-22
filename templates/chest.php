<?php
require_once("header.php");
?>

<main class="chest-container">
    <div class="chest-title">
        <h1>Contenu du coffre</h1>
    </div>
    <div class="chest-products">
        <?php foreach ($products as $product) { ?>
            <div class="product">
                <a href="./product&<?= $product["id"] ?>">
                    <div class="product-img">
                        <img src="assets/img/<?= $product["picture"] ?>" alt="">
                    </div>
                </a>
                <div class="product-information">
                    <p><?= $product["name"] ?></p>
                    <p class="price"><?= $product["price"] ?> Couronnes</p>
                </div>
            </div>

        <?php } ?>
    </div>

<div class="total">
    <h2>Total :  <span><?= $total ?> Couronnes</span></h2>
    <a class="btn-command" href="./chestcommand">
        Passer commande
    </a>
</div>
</main>
<?php
require_once("footer.php");
?>