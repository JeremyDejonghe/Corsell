<?php
require_once("header.php");
?>

<?php
require_once("aside.php");
?>
<div class="elements-container">
    <div class="element-title">
        <h1>Votre recherche</h1>
    </div>
    <div class="horizontal-banner">
        <?php
        foreach ($products as $product) {
        ?>

            <a href="./product&<?= $product["id"] ?>">
                <div class="elementcard">
                    <img src="assets/img/<?= $product["picture"] ?>" alt="">
                    <p><?= $product["name"] ?></p>
                </div>
            </a>

        <?php } ?>
    </div>
</div>
</main>
<?php
require_once("footer.php");
?>