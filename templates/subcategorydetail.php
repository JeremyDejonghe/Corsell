<?php
require_once("header.php");
?>

<div>
    <?php
    foreach ($names as $name) {
    ?>
        <h1><?= $name["name"] ?></h1>
    <?php
    }
    ?>
    <?php
    foreach ($products as $product) {
    ?>
        <div>
            <img src="<?= $product["picture"] ?>" alt="Image du produit">
            <h2><?= $product["name"] ?></h2>
            <p><?= $product["price"] ?> 💰</p>

        </div>
    <?php
    }
    ?>
</div>

<?php
require_once("footer.php");
?>