<?php
require_once("header.php");
?>

<?php
require_once("aside.php");
?>

<div class="elements-container">
    <div class="element-title">
        <h1>Les essentiels du pirate</h1>
        <p>Voici une sélection de Cor-Sell pour bien débuter votre aventure en haute-mer</p>
    </div>
    <div class="horizontal-banner">
        <?php
        foreach ($essentials as $essential) {
        ?>

            <a href="./product&<?= $essential["id"] ?>">
                <div class="elementcard">
                    <img src="assets/img/<?= $essential["picture"] ?>" alt="">
                    <p><?= $essential["name"] ?></p>
                </div>
            </a>

        <?php } ?>
    </div>
</div>
</main>



<?php
require_once("footer.php");
?>