<?php
require_once("header.php");
?>

<main class="products-container">

    <div class="main-title">
        <h1>Vos produits</h1>
    </div>
    <div class="products-banner">
        <?php
        foreach ($products as $product) {
        ?>

            <a href="./product&<?= $product["id"] ?>">
                <div class="elementcard">
                    <img src="assets/img/<?= $product["picture"] ?>" alt="">
                    <p><?= $product["name"] ?></p>
                    
                </div>
                <a class="delete-btn" href="">X</a>
            </a>

        <?php } ?>
    </div>

</main>
<?php
require_once("footer.php");
?>