<?php
require_once("header.php");
?>

<main class="mycommands-container">

    <div class="mycommands-title">
        <h1>Vos dernières commandes</h1>
    </div>
    <div class="commands">
        <?php foreach ($products as $product) { ?>
            <div class="command-card">
                <a href="./product&<?= $product["id"] ?>">
                    <div class="command-img">
                        <img src="./assets/img/<?= $product["picture"] ?>" alt="">
                    </div>
                </a>
                <div class="command-description">
                    <p><?= $product["name"] ?></p>
                </div>
            </div>
        <?php } ?>
    </div>
</main>

<?php
require_once("footer.php");
?>