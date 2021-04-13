<?php
require_once("header.php");
?>

<?php 
require_once("aside.php");
?>

    <div class="elements-container">

        <div class="horizontal-banner">

            <div class="container-subcategorydetail">
                <?php
                foreach ($names as $name) {
                ?>
                    <div class="div-title-subcategorydetail">
                        <h1><?= $name ?></h1>
                        <p>Voici tout les produit de notre sous-catégorie <?= $name ?></p>
                    </div>
                <?php
                }
                ?>
                <div class="container-img-subcategorydetail">
                    <?php
                    foreach ($products as $product) {
                        
                    ?>
                        <a href="./product&<?= $product["id"] ?>">
                            <div class="div-subcategorydetail">
                                <img src="assets/img/<?= $product["picture"] ?>" alt="Image du produit" class="img-subcategorydetail">
                                <h2><?= $product["name"] ?></h2>
                                
                                <?php
                                if (empty($product["promo"])) {
                                ?>
                                    <p class="price-img-subcategorydetail"><?= $product["price"] ?> 💰</p>

                                <?php
                                }else{
                                ?>
                                    <p class="price-promo-img-subcategorydetail"> Promo: <?= $product["promo"] ?> 💰</p>
                                
                                <?php
                    }
                        ?>
                            </div>
                        <?php
                    }
                        ?>
                </div>
            </div>
        </div>
    </div>


</main>












<?php
require_once("footer.php");
?>