<?php
require_once("header.php");
?>

<main class="mainCategories">

    <div class="titleCategories">
        <h2>Choisissez un produit parmi les catégories suivantes</h2>
    </div>

    <div class="cardsCategories">

        <?php
                foreach ($categories as $category) {
                ?>
            <a><div class="cardCategory">
                <?= $category["picture"] ?>
                <h2><?= $category["name"] ?></h2>
            </div></a>

        <?php }
        ?>
    </div>

</main>

<?php
require_once("footer.php");
?>